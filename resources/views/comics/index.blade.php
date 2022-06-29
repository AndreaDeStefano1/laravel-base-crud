@extends('layouts.main')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#ID</th>
        <th scope="col">Cover</th>
        <th scope="col">Title</th>
        <th scope="col">Type</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
        <tr>
            <th scope="row">{{ $comic->id }}</th>
            <td><img src="{{ $comic->image }}" alt=""></td>
            <td>{{ $comic->title }}</td>
            <td>{{ $comic->type }}</td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection