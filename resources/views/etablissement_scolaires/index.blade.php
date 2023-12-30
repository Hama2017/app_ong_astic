@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Liste des Établissements Scolaires</h2>
    <a href="{{ route('etablissement_scolaires.create') }}" class="btn btn-primary">Ajouter un Établissement Scolaire</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Code</th>
                <th>Nom</th>
                <th>Localisation</th>
                <th>Inspection Académique</th>
                <th>Département</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($etablissementsScolaires as $etablissementScolaire)
            <tr>
                <td>{{ $etablissementScolaire->id }}</td>
                <td>{{ $etablissementScolaire->code }}</td>
                <td>{{ $etablissementScolaire->nom }}</td>
                <td>{{ $etablissementScolaire->localisation }}</td>
                <td>{{ $etablissementScolaire->inspectionAcademy->nom }}</td>
                <td>{{ $etablissementScolaire->departement->nom }}</td>
                <td>
                    <a href="{{ route('etablissement_scolaires.edit', $etablissementScolaire->id) }}" class="btn btn-warning">Modifier</a>
                    <form action="{{ route('etablissement_scolaires.destroy', $etablissementScolaire->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
