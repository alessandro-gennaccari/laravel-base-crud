@extends('layouts.app')

@section('title', 'Modifica voce film')
    
@section('content')
<main class="p-5">

    <h1 class="text-center mb-5">Modifica film</h1>

    <div class="container">
        <form action="{{Route('film.update', $edit->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="inputname" class="form-label">Nome</label>
                <input type="text" class="form-control" id="inputname" name="name" value="{{$edit->name}}">
            </div>
            <div class="mb-3">
                <label for="inputgenre" class="form-label">Genere</label>
                <input type="text" class="form-control" id="inputgenre" name="genre" value="{{$edit->genre}}">
            </div>
            <div class="mb-3">
                <label for="inputdirector" class="form-label">Regia</label>
                <input type="text" class="form-control" id="inputdirector" name="director" value="{{$edit->director}}">
            </div>
            <div class="mb-3">
                <label for="inputyear" class="form-label">Anno</label>
                <input type="text" class="form-control" id="inputyear" placeholder="YYYY" name="year" value="{{$edit->year}}">
            </div>
            <a class="btn btn-info" href="{{ Route('film.index') }}">Back</a>
            <button type="submit" class="btn btn-warning">Edit</button>
            <form class="d-inline-block" method="post" action="{{ Route('film.destroy', $edit->id) }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete</button>
            </form>
        </form>
    </div>
</main>
@endsection