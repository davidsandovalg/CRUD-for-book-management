@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 col-12 titles-and-button">
            <h1 class="">{{ __('Books') }}</h1>
            <a href="{{ route('view_create_book') }}" title=""><button class="btn btn-success btn-sm" type="button">New</button></a>
            <form class="form-search" action="{{ route('books') }}" method="get" autocomplete="off" accept-charset="utf-8" role="search" >
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search_data" placeholder="Look for the book here.." value="{{ $search_data }}">
                        <span class="input-group-btn">
                            <input type="submit" class="btn btn-primary" value="Search">
                        </span>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-12 col-md-12 col-12">
            @if (count($allBooks) != 0)
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <caption></caption>
                        <thead>
                            <tr>
                                <th style="width: 300px;">Title</th>
                                <th>ISBN</th>
                                <th>Year Publication</th>
                                <th>User Created</th>
                                <th>Creation Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allBooks as $books)
                                <tr>
                                    <td style="width: 300px;">
                                        {{ $books->title }}
                                    </td>
                                    <td>
                                        {{ $books->isbn }}
                                    </td>
                                    <td>
                                        {{ $books->year_publication }}
                                    </td>
                                    <td>
                                        {{ $books->name }}
                                    </td>
                                    <td>
                                        {{ date('m/d/y', strtotime($books->created_at)) }}
                                    </td>
                                    <td>
                                        <div class="d-grid gap-2 d-md-block">
                                            <a onclick="event.preventDefault(); document.getElementById('form-edit{{ $books->id }}').submit();">
                                                <button class="btn btn-info btn-sm">Edit</button>
                                            </a>
                                            <a title="" data-target="#modal-delete{{ $books->id }}" data-toggle="modal">
                                                <button class="btn btn-danger btn-sm">Delete</button>
                                            </a>
                                        </div>
                                        <form id="form-edit{{ $books->id }}" action="{{ route('view_edit_book') }}" method="get" class="d-none">
                                            @csrf
                                            <input name="book_id" id="book_id" value="{{ $books->id }}">
                                        </form>
                                        <form id="form-delete{{ $books->id }}" action="{{ route('delete_book') }}" method="post" class="d-none">
                                            @csrf
                                            <input name="book_id" id="book_id" value="{{ $books->id }}">
                                        </form>
                                        @include('project.delete_book')
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                {{ $allBooks->render() }}
            @else
                <div class="alert alert-info col-lg-12 col-md-12 col-12 alert-no-result-found" role="alert">
                     No results found for <span class="search-value">{{ $search_data }}</span>, please search again!
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
