<?php

namespace App\Http\Controllers;

use App\Books;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
      if ($request) {
        $query = trim(request('search_data'));
        $allBooks = DB::table('books')
                        ->join('users', 'books.user_id', '=', 'users.id')
                        ->whereRaw('books.title LIKE "%'.$query.'%" OR books.isbn LIKE "%'.$query.'%" OR books.year_publication LIKE "%'.$query.'%" OR users.name LIKE "%'.$query.'%" OR CAST(books.created_at AS CHAR) LIKE "%'.$query.'%"')
                        ->where('books.canceled', '=', '0')
                        ->orderBy('books.title', 'asc')
                        ->select(['books.id', 'books.title', 'books.isbn', 'books.year_publication', 'users.name', 'books.created_at'])
                        ->paginate(10);

        return view('project.books', ["allBooks" => $allBooks, "search_data" => $query]);
      }
    }

    public function create() {
      $newIsbn = $this->newIsbn();
      if ($newIsbn) {
        return view("project.create_book", [
          'users' => User::orderBy('name', 'ASC')->pluck('name', 'id'),
          'isbn' => $newIsbn
        ]);
      }
    }

    public function store (Request $request) {
      request()->validate([
        'title' => 'required|string|max:500',
        'isbn' => 'required|string|unique:books',
        'year_publication' => 'required|numeric|min:1000|max:9999',
        'user_create' => 'required|numeric'
      ]);

      $newBook = new Books;
      $newBook->title = request('title');
      $newBook->isbn = request('isbn');
      $newBook->year_publication = request('year_publication');
      $newBook->user_id = request('user_create');
      $newBook->canceled = '0';
      $newBook->save();

      return redirect('books/create_book')->with('success', 'Congratulations! The '.request('title').' book has been created successfully.');
    }

    public function edit(Request $request) {
      request()->validate([
        'book_id' => 'required|numeric'
      ]);

      $checkBook = DB::table('books')
                        ->join('users', 'books.user_id', '=', 'users.id')
                        ->where('books.id', '=', request('book_id'))
                        ->where('books.canceled', '=', '0')
                        ->get(['books.id', 'books.title', 'books.isbn', 'books.year_publication', 'books.user_id', 'users.name', 'books.created_at']);

      return view('project.edit_book', [
        'checkBook' => $checkBook,
        'users' => User::orderBy('name', 'ASC')->pluck('name', 'id')
      ]);
    }

    public function update(Request $request) {
      request()->validate([
        'title' => 'required|string|max:500',
        'isbn' => 'required|string',
        'year_publication' => 'required|numeric|min:1000|max:9999',
        'user_create' => 'required|numeric',
        'book_id' => 'required|numeric'
      ]);

      $updateBook = Books::findOrFail(request('book_id'));
      $updateBook->title = request('title');
      $updateBook->year_publication = request('year_publication');
      $updateBook->user_id = request('user_create');
      $updateBook->update();

      return redirect('books/edit_book?book_id='.request('book_id'))->with('success', 'Congratulations! The '.request('title').' book has been updated successfully.');
    }

    public function destroy(Request $request) {
      $deleteBook = Books::findOrFail(request('book_id'));
      $deleteBook->canceled = '1';
      $deleteBook->update();
      return redirect('books')->with('success', 'Congratulations! The '.$deleteBook->title.' book has been deleted successfully.');
    }

    public function newIsbn() {
      $isbnExists = true;
      while ($isbnExists) {
        $isbn = rand(100, 200) . "-" . rand(201, 300) . "-" . rand(1000, 2000) . "-" . rand(10, 90) . "-" . rand(0, 9);
        $isbnExists = DB::select('SELECT * FROM books WHERE isbn = '.$isbn);
      }
      return $isbn;
    }
}
