@extends('layouts.app')

@section('title', 'Agginta nuovo film')
    
@section('content')
<main class="p-5">

    <h1 class="text-center mb-5">Aggiunta film</h1>

    <div class="container">
        <form>
            <div class="mb-3">
                <label for="inputname" class="form-label">Nome</label>
                <input type="text" class="form-control" id="inputname">
            </div>
            <div class="mb-3">
                <label for="inputgenre" class="form-label">Genere</label>
                <input type="text" class="form-control" id="inputgenre">
            </div>
            <div class="mb-3">
                <label for="inputdirector" class="form-label">Regia</label>
                <input type="text" class="form-control" id="inputdirector">
            </div>
            <div class="mb-3">
                <label for="inputyear" class="form-label">Anno</label>
                <input type="text" class="form-control" id="inputyear" placeholder="YYYY">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</main>
@endsection