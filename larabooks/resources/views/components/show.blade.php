@extends('layout.app')
@section('title', 'Show Book')
@section('content')

<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ISBN</th>
      <th scope="col">Titolo</th>
      <th scope="col">Autore</th>
      <th scope="col">Anno di Pubblicazione</th>
    </tr>
  </thead>
  <tbody>
    @foreach($books as $data)
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->title}}</td>
      <td>{{$data->author}}</td>
      <td>{{$data->publ_year}}</td>
      <td>
        <form action="{{route('books.destroy', $data)}}" method="POST" class="d-flex">
            @csrf
            @method('delete')
            <button class="btn btn-danger me-2">Delete</button>
            <a class="btn btn-primary" href="{{route('books.edit', $data)}}">Edit</a>
        </form> 
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection