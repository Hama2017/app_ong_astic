@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Modifier l'Établissement Scolaire</h2>
    <form action="{{ route('etablissement_scolaires.update', $etablissementScolaire->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="code">Code :</label>
            <input type="text" class="form-control" id="code" name="code" value="{{ $etablissementScolaire->code }}" required>
        </div>
        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ $etablissementScolaire->nom }}" required>
        </div>
        <div class="form-group">
            <label for="localisation">Localisation :</label>
            <input type="text" class="form-control" id="localisation" name="localisation" value="{{ $etablissementScolaire->localisation }}" required>
        </div>
        <div class="form-group">
            <label for="id_ia">Inspection Académique :</label>
            <select class="form-control" id="id_ia" name="id_ia" required>
                @foreach ($inspectionAcademies as $inspectionAcademy)
                    <option value="{{ $inspectionAcademy->id }}" {{ $inspectionAcademy->id == $etablissementScolaire->id_ia ? 'selected' : '' }}>{{ $inspectionAcademy->nom }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_departement">Département :</label>
            <select class="form-control" id="id_departement" name="id_departement" required>
                @foreach ($departements as $departement)
                    <option value="{{ $departement->id }}" {{ $departement->id == $etablissementScolaire->id_departement ? 'selected' : '' }}>{{ $departement->nom }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
    </form>
</div>
@endsection
