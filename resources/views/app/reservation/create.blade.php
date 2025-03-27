@extends('dashboardapp')

@section('contenudash')
<div class="container mt-5">
    <h2>Ajouter un Service</h2>

    <!-- Formulaire de création de service -->
    <div class="card">
        <div class="card-body">
<!-- resources/views/reservation.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Réserver un service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <h2 class="mb-4">Réserver un service</h2>


    <form action="{{ route('reservation.store') }}" method="POST" novalidate>
        @csrf

        <div class="mb-3">
            <label for="service_id" class="form-label">Service ID</label>
            <input type="text" class="form-control @error('service_id') is-invalid @enderror" id="service_id" name="service_id" value="{{ old('service_id') }}" required>
            @error('service_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Téléphone</label>
            <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}" required>
            @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="reservation_date" class="form-label">Date de réservation</label>
            <input type="date" class="form-control @error('reservation_date') is-invalid @enderror" id="reservation_date" name="reservation_date" value="{{ old('reservation_date') }}" required>
            @error('reservation_date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="requete_special" class="form-label">Requête spéciale</label>
            <textarea class="form-control @error('requete_special') is-invalid @enderror" id="requete_special" name="requete_special">{{ old('requete_special') }}</textarea>
            @error('requete_special')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Réserver</button>
    </form>
</div>
          
        </div>
    </div>
</div>
    
@endsection