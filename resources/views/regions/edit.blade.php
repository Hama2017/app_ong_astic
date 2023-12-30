@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Modifier la région</h2>
    <form action="{{ route('regions.update', $region->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="code">Code :</label>
            <input type="text" class="form-control" id="code" name="code" value="{{ $region->code }}" required>
        </div>
        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ $region->nom }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
    </form>
</div>
@endsection
