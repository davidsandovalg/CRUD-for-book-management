<?php

use App\Books;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data[] = ['title' => 'To Kill a Mockingbird de Harper Lee', 'isbn' => '140-270-1283-38-3', 'year_publication' => '1999', 'user_id' => '1', 'canceled' => '0', 'created_at' => '2022-01-01 15:47:54'];
        $data[] = ['title' => 'Ulysses de James Joyce', 'isbn' => '174-207-1540-16-2', 'year_publication' => '2017', 'user_id' => '1', 'canceled' => '0', 'created_at' => '2022-05-17 09:10:15'];
        $data[] = ['title' => 'The Great Gatsby de F. Scott Fitzgerald', 'isbn' => '110-243-1352-22-9', 'year_publication' => '1985', 'user_id' => '2', 'canceled' => '0', 'created_at' => '2022-09-01 11:17:32'];
        $data[] = ['title' => 'Little Women de Louisa May Alcott', 'isbn' => '161-265-1660-22-7', 'year_publication' => '1990', 'user_id' => '2', 'canceled' => '0', 'created_at' => '2022-10-27 09:10:55'];
        $data[] = ['title' => ' Pride and Prejudice de Jane Austen', 'isbn' => '105-208-1645-13-5', 'year_publication' => '1994', 'user_id' => '3', 'canceled' => '0', 'created_at' => '2022-02-27 16:06:45'];
        $data[] = ['title' => 'In Cold Blood de Truman Capote', 'isbn' => '165-272-1354-26-2', 'year_publication' => '2007', 'user_id' => '3', 'canceled' => '0', 'created_at' => '2022-07-11 10:19:23'];
        $data[] = ['title' => 'Oliver Twist de Charles Dickens', 'isbn' => '111-281-1564-26-7', 'year_publication' => '2017', 'user_id' => '4', 'canceled' => '0', 'created_at' => '2022-03-04 17:03:48'];
        $data[] = ['title' => 'The Wind in the Willows de Kenneth Grahame', 'isbn' => '155-283-1853-26-9', 'year_publication' => '2020', 'user_id' => '4', 'canceled' => '0', 'created_at' => '2022-03-23 13:34:59'];
        $data[] = ['title' => 'Homage to Catalonia de George Orwell', 'isbn' => '156-296-1411-38-1', 'year_publication' => '2002', 'user_id' => '5', 'canceled' => '0', 'created_at' => '2022-09-03 13:08:50'];
        $data[] = ['title' => 'The Secret Garden de Frances Hodgson Burnett', 'isbn' => '167-244-1151-11-7', 'year_publication' => '2015', 'user_id' => '5', 'canceled' => '0', 'created_at' => '2022-09-29 11:52:30'];
        $data[] = ['title' => 'Adventures of Sherlock Holmes de Arthur Conan Doyle', 'isbn' => '133-247-1204-32-1', 'year_publication' => '2004', 'user_id' => '5', 'canceled' => '0', 'created_at' => '2022-06-10 10:09:29'];
        $data[] = ['title' => 'The Scarlet Letter de Nathaniel Hawthorne', 'isbn' => '130-223-1248-37-3', 'year_publication' => '1998', 'user_id' => '1', 'canceled' => '0', 'created_at' => '2022-03-16 17:51:31'];
        $data[] = ['title' => 'The Old Man and the Sea de Ernest Hemingway', 'isbn' => '112-219-1617-29-5', 'year_publication' => '2017', 'user_id' => '3', 'canceled' => '0', 'created_at' => '2022-09-12 13:24:32'];
        $data[] = ['title' => 'Moby Dick de Herman Melville', 'isbn' => '174-277-1976-29-1', 'year_publication' => '2020', 'user_id' => '2', 'canceled' => '0', 'created_at' => '2022-12-30 14:29:15'];
        $data[] = ['title' => 'Tales of mystery and imagination de Edgar Allan Poe', 'isbn' => '183-259-1582-36-2', 'year_publication' => '2018', 'user_id' => '4', 'canceled' => '0', 'created_at' => '2022-12-28 11:19:43'];
        $data[] = ['title' => 'Hamlet de William Shakespeare', 'isbn' => '125-270-1198-12-4', 'year_publication' => '1988', 'user_id' => '4', 'canceled' => '0', 'created_at' => '2022-10-22 16:14:17'];
        $data[] = ['title' => 'One Flew Over the Cuckoo’s Nest de Ken Kesey', 'isbn' => '106-283-1253-10-3', 'year_publication' => '1988', 'user_id' => '6', 'canceled' => '0', 'created_at' => '2022-03-24 15:19:29'];
        $data[] = ['title' => 'The Picture of Dorian Gray de Oscar Wilde', 'isbn' => '198-241-1089-23-4', 'year_publication' => '1990', 'user_id' => '6', 'canceled' => '0', 'created_at' => '2022-03-08 17:50:12'];
        $data[] = ['title' => 'The Adventures of Tom Sawyer de Mark Twain', 'isbn' => '138-284-1890-11-0', 'year_publication' => '2016', 'user_id' => '1', 'canceled' => '0', 'created_at' => '2022-09-07 10:59:29'];
        $data[] = ['title' => 'To the Lighthouse de Virginia Woolf', 'isbn' => '176-265-1346-24-0', 'year_publication' => '2020', 'user_id' => '2', 'canceled' => '0', 'created_at' => '2022-05-02 09:17:15'];

        Books::insert($data);
    }
}
