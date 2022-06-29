
@extends('layouts.main')


@section('content')
    <h1>{{ $comic->title }}</h1>
    <div class="row">
        <div class="col-6">
            <img src="{{ $comic->image }}" alt="">
        </div>
        <div class="col-6">
          <p>Tipo: {{ $comic->type }}</p>
          <p>Altro: ...</p>
        </div>
    </div>
@endsection
