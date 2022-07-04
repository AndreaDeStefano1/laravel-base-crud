@extends('layouts.main')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="row">
    <div class="col-6 offset-3">
        <h1 class="text-center my-5">ADD COMIC</h1>
        <form action ="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Nome fumetto</label>
              <input type="text" class="form-control" name="title" id="title" >
            </div>
            <div class="mb-3">
              <label for="image" class="form-label">Immage Url</label>
              <input type="text" class="form-control" name="image" id="image">
            </div>
            <div class="mb-3">
              <label for="type" class="form-label">Type</label>
              <input type="text" class="form-control" name="type" id="type">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
