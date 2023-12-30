@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Liste des régions</h2>
    <a href="{{ route('regions.create') }}" class="btn btn-primary">Ajouter une région</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Code</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($regions as $region)
            <tr>
                <td>{{ $region->id }}</td>
                <td>{{ $region->code }}</td>
                <td>{{ $region->nom }}</td>
                <td>
                    <a href="{{ route('regions.edit', $region->id) }}" class="btn btn-warning">Modifier</a>
                    <form action="{{ route('regions.destroy', $region->id) }}" method="POST" style="display:inline">
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
