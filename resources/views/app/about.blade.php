


@extends('index')

@section('contenu')

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">A Propos de Nous</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="index.html">Acceuil</a></li>
                    <li class="breadcrumb-item"><a href="#">Menu</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">A Propos</li>
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


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 pt-4" style="min-height: 400px;">
                <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                    <img class="position-absolute img-fluid w-100 h-100" src="img/about.jpg" style="object-fit: cover;" alt="">
                    <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .08);">
                        <h1 class="display-4 text-white mb-0">15 <span class="fs-4">ANS</span></h1>
                        <h4 class="text-white">D'Experiences</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h6 class="text-primary text-uppercase">// A Propos de Nous//</h6>
                <h1 class="mb-4"><span class="text-primary">LavAut</span> Est le meilleur endroit pour l’entretien
                    de votre voiture </p>
                <div class="row g-4 mb-3 pb-3">
                    <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary">01</span>
                            </div>
                            <div class="ps-3">
                                <h6>Professionel & Expert</h6>
                                <span>Un service de qualité parfaite, où chaque détail est soigné pour offrir à
                                    votre véhicule une brillance et une propreté incomparables.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary">02</span>
                            </div>
                            <div class="ps-3">
                                <h6>Centre de service qualité</h6>
                                <span>Des services complets de détail pour chaque recoin de votre véhicule, offrant
                                    propreté, brillance et protection à chaque instant.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary">03</span>
                            </div>
                            <div class="ps-3">
                                <h6>Travailleurs primés</h6>
                                <span>Notre équipe de travailleurs primés allie expertise et innovation pour offrir
                                    un service de lavage automobile d'exception, alliant qualité, rapidité.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <a href="" class="btn btn-primary py-3 px-5">Lire Plus<i class="fa fa-arrow-right ms-3"></i></a> -->
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Fact Start -->
<div class="container-fluid fact bg-dark my-5 py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <i class="fa fa-check fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up">1</h2>
                <p class="text-white mb-0">ANS D'Experiences</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up">14</h2>
                <p class="text-white mb-0">Experts Techniciens</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                <i class="fa fa-users fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up">14</h2>
                <p class="text-white mb-0">Satisfaction Clients</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                <i class="fa fa-car fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up">14</h2>
                <p class="text-white mb-0">Projets complets</p>
            </div>
        </div>
    </div>
</div>
<!-- Fact End -->


<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">// Nos Techniciens //</h6>
            <h1 class="mb-5">Nos Experts Techniciens</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/1713957083316.jpeg" alt="">
                        <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                            <a class="btn btn-square mx-1" href="https://www.facebook.com/olivier.karka"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href="https://x.com/kara_olivier"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href="https://www.linkedin.com/in/gnimdou-karka-34906126b/"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="fw-bold mb-0">Olivier KARKA</h5>
                        <small>Responsable de Communication</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/WhatsApp Image 2024-09-17 à 13.45.46_37cfdb01.jpg" alt="">
                        <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                            <a class="btn btn-square mx-1" href="https://www.facebook.com/profile.php?id=100076656973503"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href="https://x.com/PrinceRegg48351"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href="www.linkedin.com/in/prince-reggie-a4501b246"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="fw-bold mb-0">Rauch YAKINE</h5>
                        <small>Directeur Exécutif</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/Design sans titre.png" alt="">
                        <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                            <a class="btn btn-square mx-1" href="https://www.facebook.com/david.hida.58"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href="https://www.linkedin.com/in/david-hida-35a07a198/"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="fw-bold mb-0">David HIDA</h5>
                        <small>Ingénieur de plateformes</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="" alt="">
                        <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="fw-bold mb-0">Bérenice TAGBA</h5>
                        <small>Responsable  Marketing Réseaux</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->
    
@endsection
