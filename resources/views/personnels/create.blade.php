@extends('layout')

@section('content')
<h2 class="text-center text-info">Ajouter un nouveau personnel</h2>

<form action="{{ route('personnels.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Nom</label>
        <input type="text" name="Nom" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Salaire</label>
        <input type="number" name="Salaire" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Date d'embauche</label>
        <input type="date" name="DateEmbauche" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Fonction</label>
        <input type="text" name="Fonction" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Service</label>
        <select name="NumService" class="form-control" required>
            <option value="">-- Choisir un service --</option>
            @foreach($services as $service)
            <option value="{{ $service->NumService }}">{{ $service->NomS }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-success">Enregistrer</button>
</form>
@endsection
