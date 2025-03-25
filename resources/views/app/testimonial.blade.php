@extends('index')
@section('contenu')
    
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Témoignages</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="index.html">Acceuil</a></li>
                    <li class="breadcrumb-item"><a href="#">Menu</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Témoignages</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Témoignages Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h6 class="text-primary text-uppercase">// Témoignages //</h6>
            <h1 class="mb-5">Nos Clients Disent!</h1>
        </div>
        <div class="owl-carousel témoiTémoignages-carousel position-relative">
            <div class="témoiTémoignages-item text-center">
                <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/témoiTémoignages-1.jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Armelle</h5>
                <p>Commerçante</p>
                <div class="témoiTémoignages-text bg-light text-center p-4">
                <p class="mb-0">Un Travail impacable! Mon véhicule n'as jamais été propre, à l'intérieur comme à
                    l'extérieur. la brillance est incroyable!</p>
                </div>
            </div>
            <div class="témoiTémoignages-item text-center">
                <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/témoiTémoignages-2.jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Albert</h5>
                <p>Enseignant</p>
                <div class="témoiTémoignages-text bg-light text-center p-4">
                <p class="mb-0">Écoute bien, j’suis pas du genre à faire de la pub gratuite, mais là... C’est
                    criminel de garder ça pour moi ! Ma voiture Plus propre que ma conscience. Les jantes
                    brillent comme si elles avaient gagné à la loterie. Franchement, Si t’aimes ta voiture, tu
                    dois absolument tester, c’est du grand art !</p>
                </div>
            </div>
            <div class="témoiTémoignages-item text-center">
                <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/témoiTémoignages-3.jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Claude</h5>
                <p>Directeur d'études</p>
                <div class="témoiTémoignages-text bg-light text-center p-4">
                <p class="mb-0">j’ai récupéré ma voiture, j’ai cru que c’était une pub pour une marque de luxe.
                    Même les sièges sentent le neuf, j’ai presque pas envie de m’asseoir dedans de peur de
                    déranger le travail d’artiste qu’ils ont fait.</p>
                </div>
            </div>
            <div class="témoiTémoignages-item text-center">
                <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/témoiTémoignages-4.jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Clarice</h5>
                <p>Caissière</p>
                <div class="témoiTémoignages-text bg-light text-center p-4">
                <p class="mb-0"> Si tu veux que ta caisse respire le luxe sans vendre un rein, tu sais où aller !
                    C’est pas un simple nettoyage, c’est une renaissance pour ta caisse !</div>
            </div>
        </div>
    </div>
</div>
<!-- Témoignages End -->

@endsection