<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @include('../includes/assets-header')

        <title>Assetech</title>

        <!-- Styles / Scripts -->
        @vite(['resources/scss/pages/home.scss', 'resources/js/pages/home.js'])
    </head>
    <body>
        <x-header :companyLinks="$companyLinks" :companySocialMedia="$companySocialMedia" />
        
        {{-- Banner Top --}}
        @if($bannerTop)
            <section class="banner-top">
                <img src={{$bannerTop->image_url}} alt={{$bannerTop->image_alt}} title={{$bannerTop->image_title}}>

                <div class="banner-top__container">
                    <x-svg.logo-white />
                    <p>{{$bannerTop->title}}</p>
                </div>
            </section>
        @endif

        {{-- Our Services --}}
        @if($bannersServices)
            <section class="our-services ">
                <p class="default_subtitle">Nossos serviços</p>
                <h2 class="default_title">Transformando projetos em realidade</h2>

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
        @endif

        {{-- Info Icons --}}
        <x-info-icons />

        {{-- Testimonials --}}
        @if($testimonials)
            <x-testimonials :testimonials="$testimonials" />
        @endif

        {{-- Our History --}}
        @if($articleOurHistory)
            <section class="our-history">
                <ul class="swiper">
                    <div class="swiper-wrapper">
                        <li class="swiper-slide">
                            <img src="{{ $articleOurHistory->image_url }}" alt="{{ $articleOurHistory->image_alt }}" title="{{ $articleOurHistory->image_title }}" loading="lazy" >
                        </li>
                    </div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </ul>
                <div class="caption">
                    <span class="default_subtitle">{{ $articleOurHistory->subtitle }}</span>
                    <h2 class="default_title">{{ $articleOurHistory->title }}</h2>
                    <p>{{ $articleOurHistory->content }}</p>
                    <a href="{{ route('pages.company') }}">Ver mais sobre nós</a>
                </div>
            </section>
        @endif

        <x-footer :companyLinks="$companyLinks" :companySocialMedia="$companySocialMedia" />
    </body>
</html>
