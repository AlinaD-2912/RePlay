@extends('layouts.app')

@section('title', 'Mon compte')

@section('content')
    <div class="container">
        <h1 class="font-21 font-audiowide font-dark-red text-center">Mon compte</h1>

        <div class="row">
            <div class="col-md-8">

                <!-- Activité & historique -->
                <div class="activity-conteiner">
                    <h2 class="font-16 font-dark-red font-roboto">Activité & historique</h2>
                    <ul class="list-unstyled">
                        <li><a class="font-red font-14 font-roboto"  href="#">Historique des achats &gt;</a></li>
                        <li><a class="font-red font-14 font-roboto" href="#">Historique des ventes &gt;</a></li>
                        <li><a class="font-red font-14 font-roboto" href="#">Liste de souhaits &gt;</a></li>
                        <li><a class="font-red font-14 font-roboto" href="#">Notifications &gt;</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 text-center">

                <!-- Profil -->
                <div class="profile-conteiner">
                    <div class="profile-img mx-auto mb-2"></div>
                    <strong>Prénom Nom</strong><br>
                    <small>e-mail</small>
                </div>
                <div>
                    <a href="#" class="d-block">Modifier le profil</a>
                    <a href="#" class="d-block">Changer le mot de passe</a>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Portefeuille & paramètres -->
            <div class="col-md-4">
                <div class="section-box">
                    <h2 class="font-16 font-dark-red font-roboto">Portefeuille & paramètres</h2>
                    <ul class="list-unstyled">
                        <li><a class="font-red font-14 font-roboto" href="#">Portefeuille électronique &gt;</a></li>
                        <li><a class="font-red font-14 font-roboto" href="#">Historique des paiements &gt;</a></li>
                        <li><a class="font-red font-14 font-roboto" href="#">Méthodes de paiement &gt;</a></li>
                        <li><a class="font-red font-14 font-roboto" href="#">Mes préférences &gt;</a></li>
                    </ul>
                </div>
            </div>

            <!-- Activité récente -->
            <div class="col-md-8">
                <div class="section-box">
                    <h5>Activité récente</h5>
                    <ul class="list-unstyled">
                        <li>• Item récent 1</li>
                        <li>• Item récent 2</li>
                        <li>• Item récent 3</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Notifications récentes -->
        <div class="section-box">
            <h5>Notifications récentes</h5>
            <ul class="list-unstyled">
                <li>• Notification 1</li>
                <li>• Notification 2</li>
                <li>• Notification 3</li>
            </ul>
        </div>

        <!-- Gains ce mois-ci & Mes statistiques -->
        <div class="row">
            <div class="col-md-6">
                <h5>Gains ce mois-ci</h5>
                <div class="placeholder-img"></div>
            </div>
            <div class="col-md-6">
                <h5>Mes statistique</h5>
                <ul>
                    <li>Stat 1</li>
                    <li>Stat 2</li>
                    <li>Stat 3</li>
                </ul>
                <div class="placeholder-img mt-3"></div>
            </div>
        </div>

    </div>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Se déconnecter</button>
    </form>



@endsection
