@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Ajouter un Établissement Scolaire</h2>
    <form action="{{ route('etablissement_scolaires.store') }}" method="POST">
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
            <label for="localisation">Localisation :</label>
            <input type="text" class="form-control" id="localisation" name="localisation" required>
        </div>
        <div class="form-group">
            <label for="id_ia">Inspection Académique :</label>
            <select class="form-control" id="id_ia" name="id_ia" required>
                @foreach ($inspectionAcademies as $inspectionAcademy)
                    <option value="{{ $inspectionAcademy->id }}">{{ $inspectionAcademy->nom }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_departement">Département :</label>
            <select class="form-control" id="id_departement" name="id_departement" required>
                @foreach ($departements as $departement)
                    <option value="{{ $departement->id }}">{{ $departement->nom }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection
