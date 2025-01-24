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

        {{-- Testimonials --}}
        <section class="testimonials">
            <p class="default_subtitle">Nossos clientes</p>
            <h2 class="default_title"> O que Nossos Clientes Dizem sobre Nós</h2>

            <ul class="swiper">
                <div class="swiper-wrapper">
                    @foreach ($testimonials as $testimonial)
                        <li class="swiper-slide">
                            <div class="content">
                                <div><x-svg.quote-left /></div>
                                <p>{{ $testimonial->content }}</p>
                                <div><x-svg.quote-right /></div>
                            </div>
                           <footer>
                                <img src={{$testimonial->author_photo}} alt={{ $testimonial->author_name}} title={{ $testimonial->author_name}} />
                                <div>
                                    <p>{{ $testimonial->author_name }}</p>
                                    <span>{{ $testimonial->author_title }}</span>
                                </div>
                           </footer>
                        </li>
                    @endforeach
                </div>
            
                <div class="swiper-pagination"></div>
            </ul>
        </section>

        {{-- Our History --}}
        @if($articleOurHistory)
            <section class="our-history">
                <ul class="swiper">
                    <div class="swiper-wrapper">
                        <li class="swiper-slide">
                            <img src="{{ $articleOurHistory->image_url }}" alt="{{ $articleOurHistory->image_alt }}" title="{{ $articleOurHistory->image_title }}" loading="lazy" >
                        </li>
                        <li class="swiper-slide">
                            <img src="{{ $articleOurHistory->image_url }}" alt="{{ $articleOurHistory->image_alt }}" title="{{ $articleOurHistory->image_title }}" loading="lazy" >
                        </li>
                        <li class="swiper-slide">
                            <img src="{{ $articleOurHistory->image_url }}" alt="{{ $articleOurHistory->image_alt }}" title="{{ $articleOurHistory->image_title }}" loading="lazy" >
                        </li>
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
                    <a href="">Ver mais sobre nós</a>
                </div>
            </section>
        @endif

        <x-footer :companyLinks="$companyLinks" :companySocialMedia="$companySocialMedia" />
    </body>
</html>
