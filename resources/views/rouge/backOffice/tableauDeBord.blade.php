@extends('layouts.backOffice')
@section('content')
@vite(['resources/css/styleTableauDeBord.css', 'resources/js/app.js'])

    <div class="titre">
        <h1>Bonjour, ((admin))</h1>
    </div>

    <div class="parent">


        <div class="card" style="width: 18rem ; background-color: #C96868;">
            @isset($image)
            <img src="{{ $image }}" class="card-img-top" alt="Card Image">
            @endisset
            <div class="card-body">
                <h5 class="card-title">{{ $title ?? "Groupe Rouge" }}</h5>
                <h6 class="card-text">Mathieu, Rafik, Salah, Jossuah </h6>
                <a class="btn btn-outline-dark" href="{{ route('actu.admin.index') }}" style="width: 80%">Actualité</a>
                <a href="" class="btn btn-outline-dark" style="width: 80%">Autre</a>
                <a href="" class="btn btn-outline-dark" style="width: 80%">Autre</a>
                @isset($button)
                @endisset
            </div>
        </div>

        <div class="card" style="width: 18rem ; background-color: #E8B86D;">
            @isset($image)
            <img src="{{ $image }}" class="card-img-top" alt="Card Image">
            @endisset
            <div class="card-body">
                <h5 class="card-title">{{ $title ?? 'Groupe Orange' }}</h5>
                <h6 class="card-text">Yanis, Cécile, Sophie, Kévin, Hadrien</h6>
                <a href="" class="btn btn-outline-dark mb-20" style="width: 80%">Quizz</a>
                <a href="" class="btn btn-outline-dark" style="width: 80%">Autre</a>
                <a href="" class="btn btn-outline-dark" style="width: 80%">Autre</a>
            </div>
        </div>

        <div class="card" style="width: 18rem ; background-color: #86AB89;">
            @isset($image)
            <img src="{{ $image }}" class="card-img-top" alt="Card Image">
            @endisset
            <div class="card-body">
                <h5 class="card-title">{{ $title ?? 'Groupe Vert' }}</h5>
                <h6 class="card-text">Jordan, David-Antoine, Fabien, Florian </h6>
                <a href="" class="btn btn-outline-dark" style="width: 80%">Inscription</a>
                <a href="" class="btn btn-outline-dark" style="width: 80%">Messagerie</a>
                <a href="" class="btn btn-outline-dark" style="width: 80%">Autre</a>
            </div>
        </div>

        <div class="card" style="width: 18rem ; background-color: #8EACCD;">
            @isset($image)
            <img src="{{ $image }}" class="card-img-top" alt="Card Image">
            @endisset
            <div class="card-body">
                <h5 class="card-title">{{ $title ?? 'Groupe Bleu' }}</h5>
                <h6 class="card-text">Chloé, Alexandre, Dylan </h6>
                <a href="" class="btn btn-outline-dark" style="width: 80%">Quiz</a>
                <a href="" class="btn btn-outline-dark" style="width: 80%">Autre</a>
                <a href="" class="btn btn-outline-dark" style="width: 80%">Autre</a>
            </div>
        </div>
    </div>
@endsection