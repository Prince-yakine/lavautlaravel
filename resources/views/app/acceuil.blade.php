@extends('index')
@section('titre', 'titre')

@section('contenu')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/Design sans titre.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Entretien
                                        Automobile //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Centre de service de
                                        réparation automobile qualifié</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Voir plus<i
                                            class="fa fa-arrow-circle-down ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="img/carousel-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-bg-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Lavage 
                                        automobile //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Centre de service de
                                        lavage de voiture qualifié</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Voir plus<i
                                            class="fa fa-arrow-circle-down ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="img/carousel-2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Précédente</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Prochain</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

     <!-- Section des services -->
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

<!-- Bootstrap JS -->
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-4" style="min-height: 400px;">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/about.jpg"
                            style="object-fit: cover;" alt="">
                        <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5"
                            style="background: rgba(0, 0, 0, .08);">
                            <h1 class="display-4 text-white mb-0"><span class="fs-4"></span></h1>
                            <h4 class="text-white"></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h6 class="text-primary text-uppercase">// A Propos de Nous //</h6>
                    <h1 class="mb-4"><span class="text-primary">LavAut</span> Est le meilleur endroit pour l’entretien
                        de votre voiture </h1>
                    <p class="mb-4">Nous choisissons les meilleurs produits pour vous garantir une qualité irréprochable
                        et une expérience inégalée. </p>
                    <div class="row g-4 mb-3 pb-3">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                    style="width: 45px; height: 45px;">
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
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                    style="width: 45px; height: 45px;">
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
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                    style="width: 45px; height: 45px;">
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
                    <a href="about.html" class="btn btn-primary py-3 px-5">Voir plus<i class="fa fa-arrow-right  ms-3"></i></a>
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
                    <h2 class="text-white mb-2" data-toggle="counter-up">3</h2>
                    <p class="text-white mb-0">Années D'Experiences</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">5</h2>
                    <p class="text-white mb-0">Expert Techniciens</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">10</h2>
                    <p class="text-white mb-0">Satisfaction Clients</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-car fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">15</h2>
                    <p class="text-white mb-0">Projets complets</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->


    <!-- Service Start -->
    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Nos Services //</h6>
                <h1 class="mb-5">Explorer Nos Services de lavage</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav w-100 nav-pills me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <i class="fa fa-broom fa-2x me-3"></i>
                            <h4 class="m-0">Lavage intérieur</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <i class="fa fa-car-side fa-2x me-3"></i>
                            <h4 class="m-0">Lavage extérieur</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <i class="fa fa-car fa-2x me-3"></i>
                            <h4 class="m-0">Lavage Complet</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <i class="fa fa-home fa-2x me-3"></i>
                            <h4 class="m-0">Lavage à Domicile</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-5" type="button">
                            <i class="fa fa-leaf fa-2x me-3"></i>
                            <h4 class="m-0">Nettoyage sans eau</h4>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                                <div class="tab-pane fade show active" id="tab-pane-1">
                                    <div class="row g-4">
                                        <div class="col-md-6" style="min-height: 500px;">
                                            <div class="position-relative h-100">
                                                <img class="position-absolute img-fluid w-100 h-100"
                                                    src="img/d7f15906b15997986abd4ec50c719513.jpg" style="object-fit: cover;"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3 class="mb-3">5 ans d’expérience dans le lavage automobile</h3>
                                            <p class="mb-4">Offrez à votre voiture un nettoyage intérieur en profondeur avec
                                                LavAut. Nous éliminons poussière, saletés et mauvaises odeurs pour un habitacle
                                                impeccable et agréable. Du dépoussiérage des surfaces à l’aspiration complète,
                                                en passant par le nettoyage des vitres et le traitement des sièges, chaque
                                                détail est pris en charge par nos professionnels formés. Profitez d’un intérieur
                                                propre, sain et rafraîchi après chaque passage.</p>
                                            <p><i class="fa fa-check text-success me-3"></i>Un service de qualité</p>
                                            <p><i class="fa fa-check text-success me-3"></i>Travailleurs experts</p>
                                            <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-pane-2">
                                    <div class="row g-4">
                                        <div class="col-md-6" style="min-height: 300px;">
                                            <div class="position-relative h-100">
                                                <img class="position-absolute img-fluid w-100 h-100"
                                                    src="img/exterieur.jpg" style="object-fit: cover;"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3 class="mb-3">Services complets de détail</h3>
                                            <p class="mb-4">Ce service consiste à une arrosage, de maintenir la carosserie
                                                propre et la faire briller de toutes éclats. Redonnez à votre voiture toute sa
                                                brillance avec notre lavage extérieur premium. Nos experts éliminent poussière,
                                                boue et traces de pollution pour une carrosserie éclatante et protégée. Du
                                                nettoyage des jantes au lustrage des surfaces, en passant par le lavage haute
                                                pression et le séchage soigné, chaque détail est pris en charge avec précision.
                                            </p>
                                            <p><i class="fa fa-check text-success me-3"></i>Un service de qualité</p>
                                            <p><i class="fa fa-check text-success me-3"></i>Travailleurs experts</p>
                                            <p><i class="fa fa-check text-success me-3"></i>Équipement moderne</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-pane-3">
                                    <div class="row g-4">
                                        <div class="col-md-6" style="min-height: 500px;">
                                            <div class="position-relative h-100">
                                                <img class="position-absolute img-fluid w-100 h-100"
                                                    src="img/43c37a62554492b9ee6d68c1acb7aebe.jpg" style="object-fit: cover;"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3 class="mb-3">Qualité parfaite</h3>
                                            <p class="mb-4">LavAut vous assure un service de lavage alliant expertise, précision
                                                et technologies de pointe pour un résultat impeccable !</p>
                                            <p><i class="fa fa-check text-success me-3"></i>Un service de qualité</p>
                                            <p><i class="fa fa-check text-success me-3"></i>Travailleurs experts</p>
                                            <p><i class="fa fa-check text-success me-3"></i>Équipement moderne</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-pane-4">
                                    <div class="row g-4">
                                        <div class="col-md-6" style="min-height: 500px;">
                                            <div class="position-relative h-100">
                                                <img class="position-absolute img-fluid w-100 h-100"
                                                    src="img/5cc0f50128a5bd489c6bea6cbd3fa121.jpg" style="object-fit: cover;"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3 class="mb-3">Votre voiture propre sans bouger de chez vous !</h3>
                                            <p class="mb-4">Offrez à votre voiture l’éclat qu’elle mérite – avec LavAut, elle
                                                brillera comme un diamant après chaque lavage ! </p>
                                            <p><i class="fa fa-check text-success me-3"></i>Un service de qualité</p>
                                            <p><i class="fa fa-check text-success me-3"></i>Travailleurs experts</p>
                                            <p><i class="fa fa-check text-success me-3"></i>Équipement moderne</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-pane-5">
                                    <div class="row g-4">
                                        <div class="col-md-6" style="min-height: 500px;">
                                            <div class="position-relative h-100">
                                                <img class="position-absolute img-fluid w-100 h-100"
                                                    src="img/lavage-voiture-a-domicile-idf.jpg" style="object-fit: cover;"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3 class="mb-3"> Propre, brillant et écoresponsable !</h3>
                                            <p class="mb-4">LavAut vous propose un lavage sans eau, une solution innovante et respectueuse de l’environnement. Grâce à des produits spécifiques et biodégradables, nous éliminons efficacement la saleté tout en protégeant la carrosserie. Ce procédé permet un nettoyage en profondeur, sans gaspillage d’eau, pour un résultat éclatant et une finition impeccable!</p>
                                            <p><i class="fa fa-check text-success me-3"></i>Un service de qualité</p>
                                            <p><i class="fa fa-check text-success me-3"></i>Travailleurs experts</p>
                                            <p><i class="fa fa-check text-success me-3"></i>Équipement moderne</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                                           

    <!-- service mecanique -->

    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Nos Services //</h6>
                <h1 class="mb-5">Explorer Nos Services Mécanique</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav w-100 nav-pills me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-6" type="button">
                            <i class="fa fa-car-side fa-2x me-3"></i>
                            <h4 class="m-0">Diagnostique Test</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-7" type="button">
                            <i class="fa fa-spray-can fa-2x me-3"></i>
                            <h4 class="m-0">Cirage de pneu</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-8" type="button">
                            <i class="fa fa-circle-dot fa-2x me-3"></i>
                            <i class="fa fa-wrench fa-2x me-3"></i>
                            <h4 class="m-0">Changement de pneus</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-9" type="button">
                            <i class="fa fa-oil-can fa-2x me-3"></i>
                            <h4 class="m-0">Changement d’huile</h4>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-6">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/diagnostic.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Analyse complète</h3>
                                    <p class="mb-4">Notre service de Diagnostic Test permet d’évaluer l’état de votre véhicule avant chaque lavage. Nous analysons la carrosserie, les jantes et l’intérieur pour détecter les zones nécessitant un soin particulier.Avec LavAut, ne laissez rien au hasard !</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Un service de qualité</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Travailleurs experts</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-7">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 330px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/2b8f4be289224a1d1e9dd13ba5b1e765.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">La touche finale</h3>
                                    <p class="mb-4">Offrez à vos pneus une finition noire profonde et brillante. Notre traitement nourrit et protège le caoutchouc contre les fissures et le vieillissement. Des pneus éclatants, comme neufs, pour une voiture qui attire tous les regards !</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Un service de qualité</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Travailleurs experts</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Équipement moderne</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-8">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-3.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Sécurité et performance</h3>
                                    <p class="mb-4">LavAut vous propose un service de changement de pneus rapide et efficace. Que ce soit pour un montage, un équilibrage ou une permutation, nous nous assurons que vos pneus soient parfaitement installés pour une conduite sécurisée et confortable </p>
                                    <p><i class="fa fa-check text-success me-3"></i>Un service de qualité</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Travailleurs experts</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Équipement moderne</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-9">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 390px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/huile.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">La jeunesse de votre moteur</h3>
                                    <p class="mb-4">Bénéficiez d’un changement d’huile rapide et professionnel, réalisé avec des huiles de qualité adaptées à votre moteur. 
                                        Pour une meilleure lubrification et une conduite en toute sérénité. </p>
                                    <p><i class="fa fa-check text-success me-3"></i>Un service de qualité</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Travailleurs experts</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Équipement moderne</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


   <x-app.reservation.reservation />
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
                            <img class="img-fluid" src="img/WhatsApp Image 2024-09-17 à 13.45.46_37cfdb01.jpg" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href="https://www.facebook.com/profile.php?id=100076656973503"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href="https://x.com/PrinceRegg48351"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href="www.linkedin.com/in/prince-reggie-a4501b246"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Rauch Yakine TCHONTCHOKO</h5>
                            <small>Directeur Executif</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
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
                            <small>Responsable de la communication</small>
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
                            <small>Ingénieur des plateformes</small>
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
                            <small>Responsable Marketing Réseaux</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="text-primary text-uppercase">// Témoignages //</h6>
                <h1 class="mb-5">Nos Clients Disent!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/femme.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Armelle</h5>
                    <p>Commerçante</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Un Travail impacable! Mon véhicule n'as jamais été propre, à l'intérieur comme à
                            l'extérieur. la brillance est incroyable!</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/eiseignant.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Albert</h5>
                    <p>Enseignant</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Écoute bien, j’suis pas du genre à faire de la pub gratuite, mais là... C’est
                            criminel de garder ça pour moi ! Ma voiture Plus propre que ma conscience. Les jantes
                            brillent comme si elles avaient gagné à la loterie. Franchement, Si t’aimes ta voiture, tu
                            dois absolument tester, c’est du grand art ! </p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/homme.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Claude</h5>
                    <p>Directeur des études</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">j’ai récupéré ma voiture, j’ai cru que c’était une pub pour une marque de luxe.
                            Même les sièges sentent le neuf, j’ai presque pas envie de m’asseoir dedans de peur de
                            déranger le travail d’artiste qu’ils ont fait.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Clarice</h5>
                    <p>Caissière</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Si tu veux que ta caisse respire le luxe sans vendre un rein, tu sais où aller !
                            C’est pas un simple nettoyage, c’est une renaissance pour ta caisse ! </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

@endsection
