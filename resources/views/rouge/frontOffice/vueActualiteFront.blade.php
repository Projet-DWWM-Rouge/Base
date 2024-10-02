@extends('layouts.backOffice')
@section('content')
<style>
    .card-img-left {
        height: auto;
        max-width: 300px;
        object-fit: cover;
    }

    .image-container {
        flex: 0 0 auto;
        width: 300px;
    }

    @media (max-width: 576px) {
        .image-container {
            width: 100px;
        }
    }
</style>

<div class="container" style="margin: 2% ; display: flex; align-items: center; justify-content: center;">

    <div class="row" >

        <div class="col-3" style="border-right: solid black 1px">
            <h2 style="font-size: 200%">Catégorie d'actualité</h2>
            @foreach($lesFlux as $categorie)
            <a href="/actu/{{$categorie['nom_flux']}}">{{$categorie['nom_flux']}}</a></br>
            @endforeach

        </div>

        <div class="col-9" style="padding-left: 5%;">

            <h1 style="margin-bottom:5%"><?= $flux->channel->title; ?></h1>

            @foreach($flux->channel->item as $flu)

            @php
            $description = (string) $flu->description;
            $cleandescription = strip_tags($description);

            if ($flu->mediaContent) {
                $image = $flu->mediaContent['url'];
            } elseif ($flu->enclosure) {
                $image = $flu->enclosure['url'];
            } else {
                $image = false;
            }
            @endphp

            <div class="card text-center mb-3" style="margin-bottom:15px; width:100%;">
                <div class="d-flex flex-row">
                    <div class="p-2"> <img class="card-img-left" src="{{ $image }}" alt="Card image cap"> </div>
                    <div class="p-2 flex-fill">
                        <div class="card-body text-start">
                            <h5 class="card-title" style="margin-bottom: 2%" ;>"{{$flu->title}}"</h5>
                            <p class="card-text">"{{ $cleandescription }}"</p>
                            <a href="{{$flu->link}}" class="btn btn-primary">Voir l'article</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


@endsection