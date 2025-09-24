@extends('layout')

@section('content')
<h2 class="text-center text-info">Gestion d'un hôpital</h2>

<h4>Nouveau service</h4>

<!-- Formulaire d'ajout -->
<form method="POST" action="{{ route('services.store') }}">
    @csrf
    <div class="mb-3">
        <label class="form-label">Numéro de service</label>
        <input type="text" name="NumService" class="form-control" >
        @error('NumService')
        <div>
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Nom de service</label>
        <input type="text" name="NomS" class="form-control" >
        @error('NomS')
        <div>
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Numéro de bloc</label>
        <input type="text" name="NumBloc" class="form-control" >
        @error('NumBloc')
        <div>
            {{$message}}
        </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-success">Ajouter</button>
</form>

<hr>

<!-- Tableau des services existants -->
@if(isset($services) && $services->count())
<table class="table table-bordered mt-4 text-center">
    <thead class="table-light">
        <tr>
            <th>Numéro de service</th>
            <th>Nom de service</th>
            <th>Numéro de Bloc</th>
        </tr>
    </thead>
    <tbody>
        @foreach($services as $service)
        <tr>
            <td>{{ $service->NumService }}</td>
            <td>{{ $service->NomS }}</td>
            <td>{{ $service->NumBloc }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif
@endsection
