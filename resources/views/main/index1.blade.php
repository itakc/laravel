@extends('layouts.app')

@section('title', 'Acceuil')

@section('style')
@parent
{{--
<link rel="stylesheet" href="{{asset('css/app.css')}}">
--}}
@endsection

@section('script')
@parent
{{--
<link rel="script" href="{{asset('js/special-script.js')}}">
--}}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <!--1er colonne-->
            <div class="col-5">
             <!--2eme colonne-->
            <div class="col-5"> 
             <!--3eme colonne-->  
             <div class="col-2"> 
            </div>
        </div>
    </div>
<div class="exemple">
    <nav role="navigation" class="navbar navbar-default">
        <!-- Pour un affichage sur les mobiles -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Nom du site</a>
        </div>
        <!-- Collection de liens de navigatioon -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Accueil</a></li>
                <li><a href="#">Profil</a></li>
                <li><a href="#">Espace membre</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Login</a></li>
            </ul>
        </div>
    </nav>
</div>
    <h1>O'buro<h1>
        <h3> Cuisine Camerounaise<h3>
    <button onclick="window.location.href = 'https://mamasita.club/index.html';">Acceuil</button>
    <button onclick="window.location.href = 'https://mamasita.club/actualite.html';">Menu</button>
    <button onclick="window.location.href = 'https://mamasita.club/toilettespayantes.html';">Reservation</button>
    <button onclick="window.location.href = 'https://mamasita.club/contact.html';">Contact</button>

    
    
    <p>
       
    </p>
<img src ="{{asset('img/banner.jpg')}}" alt="image de banner" width="1800px" height="1800px" />
    </p>
@endsection

        

