@extends('layout')

@section('content')
<h2 class="text-center text-info">Modifier le personnel</h2>

<form action="{{ route('personnels.update', $personnel->NumPersonnel) }}" method="POST">
    @csrf @method('PUT')

    <div class="mb-3">
        <label>Nom</label>
        <input type="text" name="Nom" class="form-control" value="{{ $personnel->Nom }}" required>
    </div>

    <div class="mb-3">
        <label>Salaire</label>
        <input type="number" name="Salaire" class="form-control" value="{{ $personnel->Salaire }}" required>
    </div>

    <div class="mb-3">
        <label>Date d'embauche</label>
        <input type="date" name="DateEmbauche" class="form-control" value="{{ $personnel->DateEmbauche }}" required>
    </div>

    <div class="mb-3">
        <label>Fonction</label>
        <input type="text" name="Fonction" class="form-control" value="{{ $personnel->Fonction }}" required>
    </div>

    <div class="mb-3">
        <label>Service</label>
        <select name="NumService" class="form-control" required>
            @foreach($services as $service)
            <option value="{{ $service->NumService }}" @if($personnel->NumService == $service->NumService) selected @endif>
                {{ $service->NomS }}
            </option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-success">Mettre à jour</button>
</form>
@endsection
