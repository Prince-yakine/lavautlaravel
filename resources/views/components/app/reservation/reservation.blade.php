<!-- Booking Start -->
<div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-6 py-5">
                <div class="py-5">
                    <h1 class="text-white mb-4">Fournisseur de services de Lavage automobile certifié et primé</h1>
                    <p class="text-white mb-0">LavAut, votre fournisseur de services de lavage automobile certifié et primé – l’expertise qui redonne à votre voiture toute sa splendeur.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                    <h1 class="text-white mb-4">Réserver pour un service</h1>
                    <form action="{{ route('reservation.store') }}" method="post">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0 @error('name') is-invalid @enderror" placeholder="Votre Nom" style="height: 55px;" name="name" value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0 @error('phone') is-invalid @enderror" placeholder="Votre Numero de telephone" style="height: 55px;" name="phone" value="{{ old('phone') }}">
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-sm-6">
                                <select class="form-select border-0 @error('service_id') is-invalid @enderror" style="height: 55px;" name="service_id">
                                    <option selected>Selectionner votre Service</option>
                                    @foreach (App\Models\Service::all() as $service)
                                        <option value="{{ $service->id }}" {{ old('service_id') == $service->id ? 'selected' : '' }}>{{ $service->service_name }}</option>
                                    @endforeach
                                </select>
                                @error('service_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="date" id="date1" data-target-input="nearest">
                                    <input type="text" class="form-control border-0 datetimepicker-input @error('reservation_date') is-invalid @enderror" placeholder="Date de Service" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;" name="reservation_date" value="{{ old('reservation_date') }}">
                                </div>
                                @error('reservation_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0 @error('requete_special') is-invalid @enderror" placeholder="Requete Spécifique" name="requete_special">{{ old('requete_special') }}</textarea>
                                @error('requete_special')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <button class="btn btn-secondary w-100 py-3" type="submit">Réservez maintenant</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Booking End -->

