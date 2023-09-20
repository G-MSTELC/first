@extends('layouts.app')
@section('title', 'Ajouter un étudiant')
@section('content')
<div class="container">
    <h1>Ajouter un étudiant</h1>
    <form method="POST" action="{{ route('etudiants.store') }}">
        @csrf
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom') }}" required>
        </div>
        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" class="form-control" id="adresse" name="adresse" value="{{ old('adresse') }}" required>
        </div>
        <div class="form-group">
            <label for="phone">Téléphone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
        </div>
        <div class="form-group">
            <label for="email">Courriel</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
        </div>
        <div class="form-group">
            <label for="date_de_naissance">Date de Naissance</label>
            <input type="date" class="form-control" id="date_de_naissance" name="date_de_naissance" value="{{ old('date_de_naissance') }}" required>
        </div>
        <div class="form-group">
            <label for="ville_id">Ville</label>
            <select class="form-control" id="ville_id" name="ville_id">
                @foreach($villes as $ville)
                    <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                @endforeach
            </select>
        </div>

        <div class="card-footer d-grid mx-auto">
            <input type="submit" value="Enregistrer" class="btn btn-dark btn-block">
            <a href="{{ route('etudiants.index') }}" class="btn btn-secondary btn-block">Retour</a>
        </div>
    </form>
</div>
@endsection
