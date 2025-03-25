@extends('index')

@section('contenu')
    

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-2.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="index.html">Acceuil</a></li>
                        <li class="breadcrumb-item"><a href="#">Menu</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


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
                                                    src="img/fdca72d5165ba813bebfe33efad1e57c.jpg" style="object-fit: cover;"
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
                                                    src="img/lavage-voiture-a-domicile-idf-768x512.jpg" style="object-fit: cover;"
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
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-1.jpg"
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
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-4.jpg"
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

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="text-primary text-uppercase">// Témoignages //</h6>
                <h1 class="mb-5">Nos Clients Disent!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Armelle</h5>
                    <p>Commerçante</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Un Travail impacable! Mon véhicule n'as jamais été propre, à l'intérieur comme à
                            l'extérieur. la brillance est incroyable!</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg"
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
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg"
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


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Kara-TOGO</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+22891268640</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>lavaut7@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-sm-square bg-white text-primary me-1" href="https://www.facebook.com/profile.php?id=61574345795208"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square bg-white text-primary me-1" href="https://x.com/lavaut7"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square bg-white text-primary me-1" href="http://www.linkedin.com/in/lav-aut-70a999357"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-sm-square bg-white text-primary me-0" href="https://www.instagram.com/lavaut1/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Heures d’ouverture</h4>
                    <h6 class="text-light">Lundi - Vendredi:</h6>
                    <p class="mb-4">08h 00 - 22h 00 </p>
                    <h6 class="text-light">Samedi - Dimanche:</h6>
                    <p class="mb-0">09h 00 - 20h 00 </p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Services</h4>
                    <a class="btn btn-link" href="">Lavage intérieur</a>
                    <a class="btn btn-link" href="">Lavage extérieur</a>
                    <a class="btn btn-link" href="" >Lavage Complet</a>
                    <a class="btn btn-link" href="">Lavage Domicilier</a>
                    <a class="btn btn-link" href="">Nettoyage sans eaux</a>
                    <a class="btn btn-link" href="">Diagnostic Test</a>
                    <a class="btn btn-link" href="">Cirage de pneus</a>
                    <a class="btn btn-link" href="">Changement de pneus</a>
                    <a class="btn btn-link" href="">Changement d'huiles</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Bulletin</h4>
                    <p>Veillez vous inscrire.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Votre Email">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Soumettre</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copydfa-arrow-circle-down">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">LavAut</a>, Tout droit Reserver.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designer Par <a class="border-bottom" href="">Prince Reggie</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Acceuil</a>
                            <a href="">Cookies</a>
                            <a href="">Aide</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer End -->


@endsection