@extends('layouts.app')

@section('title', 'Film')
    
@section('content')
    <main class="p-5">

        <h1 class="text-center">Dettegli Film</h1>

        <h3 class="p-2">Lista Film</h3>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Director</th>
                    <th scope="col">Date</th>
                    <th scope="col">Genre</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{{ $info->id }}</th>
                    <td>{{ $info->name }}</td>
                    <td>{{ $info->director }}</td>
                    <td>{{ $info->year }}</td>
                    <td>{{ $info->genre }}</td>
                    <td class="text-right">
                        <a class="btn btn-info" href="{{ Route('film.index') }}">Back</a>
                        <a class="btn btn-warning" href="{{ Route('film.edit',  $info->id) }}">Edit</a>
                        <form class="d-inline-block" method="post" action="{{ Route('film.destroy', $info->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>

    </main>
@endsection