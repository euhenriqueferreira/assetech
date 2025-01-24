<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @include('../includes/assets-header')

        <title>Assetech</title>

        <!-- Styles / Scripts -->
        @vite(['resources/scss/pages/company.scss', 'resources/js/pages/company.js'])
    </head>
    <body>
        <x-header :companyLinks="$companyLinks" :companySocialMedia="$companySocialMedia" />
        
        {{-- Top Title --}}
        <section class="top-title">
            <h1 class="default_title">Sobre a Assetech</h1>
        </section>

        {{-- Parallax --}}
        <section class="parallax"></section>
    
        @if($ourResume)
            <section class="our-resume">
                @foreach($ourResume as $resume)
                    {!! $resume !!}
                @endforeach
            </section>
        @endif

        
        {{-- Info Icons --}}
        <x-info-icons />

        {{-- Testimonials --}}
        @if($testimonials)
            <x-testimonials :testimonials="$testimonials" />
        @endif

        {{-- Our Mission --}}
        @if($ourMission)
            <section class="our-mission">
                <div class="our-mission__wrapper">
                    <p class="default_subtitle">{{ $ourMission->subtitle }}</p>
                    <h2 class="default_title">{{ $ourMission->title }}</h2>
                    <div class="paragraph">
                        <p>{{ $ourMission->content }}</p>
                    </div>
                </div>
            </section>
        @endif

        <x-footer :companyLinks="$companyLinks" :companySocialMedia="$companySocialMedia" />
    </body>
</html>
