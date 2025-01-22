<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @include('../includes/assets-header')

        <title>Assetech</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/scss/pages/home.scss', 'resources/js/pages/home.js'])
    </head>
    <body>
        <x-header :companyLinks="$companyLinks" :companySocialMedia="$companySocialMedia" />
        
        {{-- Banner Top --}}
        <section class="banner-top">
            <img src={{$bannerTop->image_url}} alt={{$bannerTop->image_alt}} title={{$bannerTop->image_title}}>

            <div class="banner-top__container">
                <x-svg.logo-white />
                <p>{{$bannerTop->title}}</p>
            </div>
        </section>

        {{-- Our Services --}}
        <section class="our-services ">
            <p class="subtitle">Nossos serviços</p>
            <h2 class="title">Transformando projetos em realidade</h2>

            <ul class="swiper">
                <div class="swiper-wrapper">
                    @foreach ($bannersServices as $banner)
                        <li class="swiper-slide">
                            <img src={{ $banner->image_url }} alt={{ $banner->image_alt }} title={{ $banner->image_title }} >
                            <div class="caption">
                                <h3>{{ $banner->title }}</h3>
                                <a href="#">Ver mais</a>{{-- TODO: colocar link para a página de serviços --}}
                            </div>
                        </li>
                    @endforeach
                </div>
            
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </ul>
        </section>

        <x-footer :companyLinks="$companyLinks" :companySocialMedia="$companySocialMedia" />
    </body>
</html>
