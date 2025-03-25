@extends('index')

@section('contenu')
    
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-2.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">228 Event</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
                    <li class="breadcrumb-item"><a href="#">A Propos</a></li>
                    <li class="breadcrumb-item"><a href="#">Services</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Partenaire</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- 404 Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                <h1 class="display-1">404</h1>
                <h1 class="mb-4">228 Event/h1>
                <p class="mb-4">We’re sorry, the page you have looked for does not exist in our website! Maybe go to our home page or try to use a search?</p>
                <a class="btn btn-primary rounded-pill py-3 px-5" href="">Retourner à l'Acceuil</a>
            </div>
        </div>
    </div>
</div>
<!-- 404 End -->
    

<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Address</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Kara-TOGO/p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+228 91268640</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>lavaut7@gmail.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="https://www.facebook.com/profile.php?id=61574345795208"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="https://x.com/lavaut7"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="http://www.linkedin.com/in/lav-aut-70a999357"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href="https://www.instagram.com/lavaut1/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4"></h4>
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
                <a class="btn btn-link" href="">Cirage de pneu</a>
                <a class="btn btn-link" href="">Changement de pneus</a>
                <a class="btn btn-link" href="">Changement d'huiles</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Bulletin</h4>
                <p>Veillez vous inscrire</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="votre Email">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Soumettre</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Lavaut</a>, Tout Droit Réserver

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designe Par Prince Reggie
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="">Acceuil</a>
                        <a href="">Cookies</a>
                        <a href="">Aides</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

@endsection
