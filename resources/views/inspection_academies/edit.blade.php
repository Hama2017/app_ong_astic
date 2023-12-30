@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Modifier l'Inspection Academy</h2>
    <form action="{{ route('inspection_academies.update', $inspectionAcademy->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="code">Code :</label>
            <input type="text" class="form-control" id="code" name="code" value="{{ $inspectionAcademy->code }}" required>
        </div>
        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ $inspectionAcademy->nom }}" required>
        </div>
        <div class="form-group">
            <label for="id_region">Région :</label>
            <select class="form-control" id="id_region" name="id_region" required>
                @foreach ($regions as $region)
                    <option value="{{ $region->id }}" {{ $region->id == $inspectionAcademy->id_region ? 'selected' : '' }}>{{ $region->nom }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
    </form>
</div>
@endsection
