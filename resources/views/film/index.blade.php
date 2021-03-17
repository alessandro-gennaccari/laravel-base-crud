@extends('layouts.app')

@section('title', 'Film')
    
@section('content')
    <main class="p-5">

        <h1 class="text-center">Infromazioni film</h1>

        <h3 class="p-2">Lista Film</h3>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Info</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($films as $film) 
                <tr>
                    <th scope="row">{{ $film->id }}</th>
                    <td>{{ $film->name }}</td>
                    <td>{{ $film->year }}</td>
                    <td>{{ $film->genre }}</td>
                    <td><a class="text-success" href="{{ Route('film.show', ['film' => $film->id]) }}">View</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </main>
@endsection