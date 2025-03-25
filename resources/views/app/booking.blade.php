@extends('index')


@section('contenu')

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Reservation</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="index.html">Acceuil</a></li>
                        <li class="breadcrumb-item"><a href="">Menu</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Reservation</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Service 1 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Un service de qualité</h5>
                            <p>Offrez-vous l'excellence, parce que la qualité ne se contente pas de répondre à vos attentes, elle les dépasse.</p>
                            <a class="text-secondary border-bottom" data-bs-toggle="modal" data-bs-target="#modalQualite">Voir plus</a>
                        </div>
                    </div>
                </div>
    
                <!-- Service 2 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex bg-light py-5 px-4">
                        <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Travaille Professionel</h5>
                            <p>Un lavage n’est pas qu’un simple nettoyage, c’est un art. Nos professionnels formés redonnent à votre voiture toute sa splendeur.</p>
                            <a class="text-secondary border-bottom" data-bs-toggle="modal" data-bs-target="#modalProfessionnel">Voir plus</a>
                        </div>
                    </div>
                </div>
    
                <!-- Service 3 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Équipement Moderne</h5>
                            <p>Grâce à un équipement moderne et innovant, LavAut garantit un lavage automobile efficace, rapide et respectueux de l’environnement, pour une expérience premium à chaque passage !</p>
                            <a class="text-secondary border-bottom" data-bs-toggle="modal" data-bs-target="#modalEquipement">Voir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- MODALES -->
    
    <!-- Modale Un service de qualité -->
    <div class="modal fade" id="modalQualite" tabindex="-1" aria-labelledby="modalQualiteLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalQualiteLabel">Un service de qualité</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="img/qualité.jpg" class="img-fluid mb-3" alt="Service de qualité">
                    <p>Offrez-vous l'excellence, car la qualité dépasse vos attentes et assure une prestation de haut niveau.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modale Travaille Professionel -->
    <div class="modal fade" id="modalProfessionnel" tabindex="-1" aria-labelledby="modalProfessionnelLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalProfessionnelLabel">Travaille Professionnel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="img/pro.jpg" class="img-fluid mb-3" alt="Travaille Professionnel">
                    <p>Nos professionnels formés réalisent un lavage automobile minutieux, redonnant à votre voiture une splendeur inégalée.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modale Équipement Moderne -->
    <div class="modal fade" id="modalEquipement" tabindex="-1" aria-labelledby="modalEquipementLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEquipementLabel">Équipement Moderne</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="img/equipement m.jpg" class="img-fluid mb-3" alt="Équipement Moderne">
                    <p>Un équipement moderne et innovant assure un lavage automobile rapide, efficace et respectueux de l’environnement.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Service End -->


    <!-- Booking Start -->
    <div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="text-white mb-4">Fournisseur de services de Lavage automobile certifié et primé
                        </h1>
                        <p class="text-white mb-0">LavAut, votre fournisseur de services de lavage automobile
                            certifié et primé – l’expertise qui redonne à votre voiture toute sa splendeur.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn"
                        data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Réserver pour un service</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Votre Nom"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Votre Email"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>Selectioner votre Service</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 2</option>
                                        <option value="3">Service 3</option>
                                        <option value="3">Service 4</option>
                                        <option value="3">Service 5</option>
                                        <option value="3">Service 6</option>
                                        <option value="3">Service 7</option>
                                        <option value="3">Service 8</option>
                                        <option value="3">Service 9</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control border-0 datetimepicker-input"
                                            placeholder="Service Date" data-target="#date1" data-toggle="datetimepicker"
                                            style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Requet Spécifique"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-secondary w-100 py-3" type="submit">Réservez
                                        maintenant</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Booking End -->


    <!-- Call To Action Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8 col-md-6">
                    <h6 class="text-primary text-uppercase">// Appel & Renseignement //</h6>
                    <h1 class="mb-4">Avez vous des Questions concernant la Reservation?</h1>
                    <p class="mb-0">Laissez nous votre message et nous vous ferons le plaisir de revenir au plus tot que possible</p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary d-flex flex-column justify-content-center text-center h-100 p-4">
                        <h3 class="text-white mb-4"><i class="fa fa-phone-alt me-3"></i>+228 91268640</h3>
                        <a href="" class="btn btn-secondary py-3 px-5">Contacter Nous<i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action End -->


    <!-- Footer Start -->


@endsection

