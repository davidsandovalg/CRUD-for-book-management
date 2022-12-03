@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 col-12 icons-and-titles">
          <a href="{{ route('books') }}" title=""><button class="btn btn-primary btn-sm" type="button"><i class="fa fa-arrow-left" aria-hidden="true"></i></button></a>
          <h1 class="">{{ __('Create Book') }}</h1>
        </div>
        <div class="col-lg-12 col-md-12 col-12">
          <form id="formCreateBook" method="POST" action="{{ route('create_book') }}" autocomplete="off" accept-charset="utf-8" >
            @include('partials.generic-form')
            <div class="d-grid gap-2 d-md-block">
              <input type="submit" class="btn btn-success" value="Create Book" >
              <input type="reset" class="btn btn-secondary" value="Cancel">
            </div>
          </form>
        </div>
    </div>
</div>
@endsection




