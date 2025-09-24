@extends('layout')

@section('content')
<h2 class="text-center text-info">Liste de tout le personnel</h2>
<a href="{{ route('personnels.create') }}" class="btn btn-success mb-3">Ajouter un personnel</a>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered text-center">
    <thead class="table-light">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Salaire</th>
            <th>Date d'embauche</th>
            <th>Fonction</th>
            <th>Service</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($personnels as $p)
        <tr>
            <td>{{ $p->NumPersonnel }}</td>
            <td>{{ $p->Nom }}</td>
            <td>{{ $p->Salaire }}</td>
            <td>{{ $p->DateEmbauche }}</td>
            <td>{{ $p->Fonction }}</td>
            <td>{{ $p->service->NomS ?? '—' }}</td>
            <td>
                <a href="{{ route('personnels.edit', $p->NumPersonnel) }}" class="btn btn-warning btn-sm">Modifier</a>
                <form action="{{ route('personnels.destroy', $p->NumPersonnel) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Supprimer ?')">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
