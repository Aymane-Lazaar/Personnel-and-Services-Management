@extends('layout')

@section('content')
<h2 class="text-center text-info">Gestion d'un hôpital</h2>
<h4>Modifier service</h4>

<form method="POST" action="{{ route('services.update', $service->NumService) }}">
    @csrf @method('PUT')

    <div class="mb-3">
        <label class="form-label">Numéro de service</label>
        <input type="text" class="form-control" value="{{ $service->NumService }}" disabled>
    </div>

    <div class="mb-3">
        <label class="form-label">Nom de service</label>
        <input type="text" name="NomS" class="form-control" value="{{ $service->NomS }}" >
        @error('NomS')
        <div>
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Numéro de bloc</label>
        <input type="text" name="NumBloc" class="form-control" value="{{ $service->NumBloc }}" >
        @error('NumBloc')
        <div>
            {{$message}}
        </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-success">Modifier</button>
</form>
@endsection
