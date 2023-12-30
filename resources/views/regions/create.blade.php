@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Ajouter une région</h2>
    <form action="{{ route('regions.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="code">Code :</label>
            <input type="text" class="form-control" id="code" name="code" required>
        </div>
        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection
