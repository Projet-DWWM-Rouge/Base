<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

    <link rel="stylesheet" href="{{ asset('css/styleTableauDeBord.css') }} ">

</head>

<body>

    <!-- resources/views/components/card.blade.php -->

    <div class="card" style="width: 18rem;">
        @isset($image)
        <img src="{{ $image }}" class="card-img-top" alt="Card Image">
        @endisset
        <div class="card-body">
            <h5 class="card-title">{{ $title ?? 'Default Title' }}</h5>
            <p class="card-text">{{ $content ?? 'Default Content' }}</p>
            @isset($button)
            <a href="{{ $button['url'] }}" class="btn btn-primary">{{ $button['text'] }}</a>
            @endisset
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        @isset($image)
        <img src="{{ $image }}" class="card-img-top" alt="Card Image">
        @endisset
        <div class="card-body">
            <h5 class="card-title">{{ $title ?? 'Default Title' }}</h5>
            <p class="card-text">{{ $content ?? 'Default Content' }}</p>
            @isset($button)
            <a href="{{ $button['url'] }}" class="btn btn-primary">{{ $button['text'] }}</a>
            @endisset
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        @isset($image)
        <img src="{{ $image }}" class="card-img-top" alt="Card Image">
        @endisset
        <div class="card-body">
            <h5 class="card-title">{{ $title ?? 'Default Title' }}</h5>
            <p class="card-text">{{ $content ?? 'Default Content' }}</p>
            @isset($button)
            <a href="{{ $button['url'] }}" class="btn btn-primary">{{ $button['text'] }}</a>
            @endisset
        </div>
    </div>
</body>