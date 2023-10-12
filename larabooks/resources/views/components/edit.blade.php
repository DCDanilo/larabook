@extends('layout.app')
@section('title', 'Add Book')
@section('content')

<div class="container">
    <form action="{{route('books.update', $book)}}" method="POST">
        @csrf
        @method('patch')
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" aria-describedby="bookTitle" name="title" value="{{$book->title}}">
    </div>

    <div class="mb-3">
        <label for="author" class="form-label">Autore</label>
        <input type="text" class="form-control" id="author" aria-describedby="bookAuthor" name="author" value="{{$book->author}}">
    </div>

    <div class="mb-3">
        <label for="publ_year" class="form-label">Anno di Pubblicazione</label>
        <input type="text" class="form-control" id="publ_year" aria-describedby="bookPublication" name="publ_year" value="{{$book->publ_year}}">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection