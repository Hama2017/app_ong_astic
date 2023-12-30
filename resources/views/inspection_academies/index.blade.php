@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Liste des Inspection Academies</h2>
    <a href="{{ route('inspection_academies.create') }}" class="btn btn-primary">Ajouter une Inspection Academy</a>
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
            @foreach ($inspectionAcademies as $inspectionAcademy)
            <tr>
                <td>{{ $inspectionAcademy->id }}</td>
                <td>{{ $inspectionAcademy->code }}</td>
                <td>{{ $inspectionAcademy->nom }}</td>
                <td>{{ $inspectionAcademy->region->nom }}</td>
                <td>
                    <a href="{{ route('inspection_academies.edit', $inspectionAcademy->id) }}" class="btn btn-warning">Modifier</a>
                    <form action="{{ route('inspection_academies.destroy', $inspectionAcademy->id) }}" method="POST" style="display:inline">
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
