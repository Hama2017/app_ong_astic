@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Ajouter un Département</h2>
    <form action="{{ route('departements.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="code">Code :</label>
            <input type="text" class="form-control" id="code" name="code" required>
        </div>
        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="form-group">
            <label for="id_region">Région :</label>
            <select class="form-control" id="id_region" name="id_region" required>
                @foreach ($regions as $region)
                    <option value="{{ $region->id }}">{{ $region->nom }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection
