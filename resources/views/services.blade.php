@extends('layout')

@section('content')
<h2 class="text-center text-info">Gestion d'un hôpital</h2>
<a href="{{ route('services.create') }}" class="btn btn-success mb-3">Nouveau service</a>
<a href="{{ route('personnels.create') }}" class="btn btn-success mb-3">Nouveau personnels</a>

<table class="table table-bordered text-center">
    <thead class="table-light">
        <tr>
            <th>Numéro de service</th>
            <th>Nom de service</th>
            <th>Numéro de Bloc</th>
            <th>Opérations</th>
        </tr>
    </thead>
    <tbody>
        @foreach($services as $service)
        <tr>
            <td>{{ $service->NumService }}</td>
            <td>{{ $service->NomS }}</td>
            <td>{{ $service->NumBloc }}</td>
            <td>
                <a href="{{ route('services.show', $service->NumService) }}" class="btn btn-primary">Afficher personnel</a>
                <a href="{{ route('services.edit', $service->NumService) }}" class="btn btn-warning">Modifier</a>
                <form action="{{ route('services.destroy', $service->NumService) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger" onclick="return confirm('Supprimer ce service ?')">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
