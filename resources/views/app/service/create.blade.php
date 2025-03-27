@extends('dashboardapp')

@section('contenudash')
<div class="container mt-5">
    <h2>Ajouter un Service</h2>

    <!-- Formulaire de création de service -->
    <div class="card">
        <div class="card-body">
            <form action="{{ route('services.store ') }}" method="POST">
                @csrf
        
                <!-- Champ pour le nom du service -->
                <div class="mb-3">
                    <label for="service_name" class="form-label">Nom du Service</label>
                    <input type="text" class="form-control form-control-lg @error('service_name') is-invalid @enderror" id="service_name" name="service_name" value="{{ old('service_name') }}">
                    @error('service_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
        
                <!-- Champ pour le prix -->
                <div class="mb-3">
                    <label for="prix" class="form-label">Prix</label>
                    <input type="text" class="form-control @error('prix') is-invalid @enderror" id="prix" name="prix" value="{{ old('prix') }}">
                    @error('prix')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
        
                <!-- Champ pour les caractéristiques du service -->
                <div class="mb-3">
                    <label for="caracteristique_service" class="form-label">Caractéristiques du Service</label>
                    <textarea class="form-control @error('caracteristique_service') is-invalid @enderror" id="caracteristique_service" name="caracteristique_service">{{ old('caracteristique_service') }}</textarea>
                    @error('caracteristique_service')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
        
                <!-- Bouton de soumission -->
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
          
        </div>
    </div>
</div>
    
@endsection