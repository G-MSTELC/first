@extends('layouts.app')
@section('title', 'Créer un nouvel étudiant')
@section('content')
<div class="row justify-content-center">
    <div class="col-6">
        <div class="card">
            <form action="{{ route('etudiants.store') }}" method="post">
                @csrf
                <div class="card-body">
                    <!-- Champ Nom -->
                    <input type="text" class="form-control mt-3" name="nom" placeholder="Nom de l'étudiant" value="{{ old('nom') }}">
                    @error('nom')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror

                    <!-- Autres champs (adresse, téléphone, email, date de naissance, ville, mot de passe) -->
                    <!-- Assurez-vous que tous les autres champs sont corrects ici -->

                    <!-- Champ Ville -->
                    <select class="form-control mt-3" name="ville_id">
                        @foreach($villes as $ville)
                            <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                        @endforeach
                    </select>
                    @error('ville_id')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="card-footer d-grid mx-auto">
                    <input type="submit" value="Enregistrer" class="btn btn-dark btn-block">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
