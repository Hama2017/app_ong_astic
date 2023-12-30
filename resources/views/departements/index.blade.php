@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Liste des Départements</h2>
    <a href="{{ route('departements.create') }}" class="btn btn-primary">Ajouter un Département</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Code</th>
                <th>Nom</th>
                <th>Région</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($departements as $departement)
            <tr>
                <td>{{ $departement->id }}</td>
                <td>{{ $departement->code }}</td>
                <td>{{ $departement->nom }}</td>
                <td>{{ $departement->region->nom }}</td>
                <td>
                    <a href="{{ route('departements.edit', $departement->id) }}" class="btn btn-warning">Modifier</a>
                    <form action="{{ route('departements.destroy', $departement->id) }}" method="POST" style="display:inline">
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
