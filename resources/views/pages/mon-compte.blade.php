@extends('layouts.app')

@section('title', 'Mon compte')

@section('content')
    <div class="container">
        <h1 class="mb-4">Mon compte</h1>

        <div class="row">
            <div class="col-md-8">
                <!-- Activité & historique -->
                <div class="section-box">
                    <h5>Activité & historique</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Historique des achats &gt;</a></li>
                        <li><a href="#">Historique des ventes &gt;</a></li>
                        <li><a href="#">Liste de souhaits &gt;</a></li>
                        <li><a href="#">Notifications &gt;</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <!-- Profil -->
                <div class="mb-2">
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
                    <h5>Portefeuille & paramètres</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Portefeuille électronique &gt;</a></li>
                        <li><a href="#">Historique des paiements &gt;</a></li>
                        <li><a href="#">Méthodes de paiement &gt;</a></li>
                        <li><a href="#">Mes préférences &gt;</a></li>
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
