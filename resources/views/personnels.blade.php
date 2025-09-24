@extends('layout')

@section('content')
<h2 class="text-center text-info">Gestion d'un hôpital</h2>
<h4>Liste du personnel affecté au service "{{ $service->NomS }}"</h4>

<table class="table table-striped text-center">
    <thead class="table-light">
        <tr>
            <th>Numéro du personnel</th>
            <th>Nom du personnel</th>
            <th>Salaire</th>
            <th>Date d'embauche</th>
            <th>Fonction</th>
        </tr>
    </thead>
    <tbody>
        @foreach($service->personnels as $p)
        <tr>
            <td>{{ $p->NumPersonnel }}</td>
            <td>{{ $p->Nom }}</td>
            <td>{{ $p->Salaire }}</td>
            <td>{{ $p->DateEmbauche }}</td>
            <td>{{ $p->Fonction }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{route('services.index')}}">return</a>
@endsection
