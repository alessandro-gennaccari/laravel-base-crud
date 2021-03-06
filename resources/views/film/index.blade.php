@extends('layouts.app')

@section('title', 'Film')
    
@section('content')
    <main class="p-5">

        <h1 class="text-center">Informazioni film</h1>

        <h3>Lista Film</h3>
        <div class="pb-3 text-right">
            <a class="btn btn-success" href="{{ Route('film.create') }}" role="button">Aggiungi</a>
        </div>
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        @if (session('delete'))
        <div class="alert alert-danger">
            {{ session('delete') }}
        </div>
        @endif
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Genre</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($films as $film) 
                <tr>
                    <th scope="row">{{ $film->id }}</th>
                    <td>{{ $film->name }}</td>
                    <td>{{ $film->year }}</td>
                    <td>{{ $film->genre }}</td>
                    <td class="text-right">
                        <a class="btn btn-success" href="{{ Route('film.show', $film->id) }}">View</a>
                        <a class="btn btn-warning" href="{{ Route('film.edit',  $film->id) }}">Edit</a>
                        <form class="d-inline-block" method="post" action="{{ Route('film.destroy', $film->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </main>
@endsection