<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @include('../includes/assets-header')

        <title>Assetech - Serviços</title>

        <!-- Styles / Scripts -->
        @vite(['resources/scss/pages/services.scss', 'resources/js/pages/services.js'])
    </head>
    <body>
        <x-header :companyLinks="$companyLinks" :companySocialMedia="$companySocialMedia" />

        @if($services)
            <section class="grid-services">
                <p class="default_subtitle">O que a Assetech te proporciona?</p>
                <h1 class="default_title">Nossos serviços</h1>

                <ul class="services-list">
                    @foreach($services as $service)
                        <li>
                            <h2>{{ $service->title }}</h2>
                            <p>{{ $service->content }}</p>
                        </li>
                    @endforeach
                </ul>
            </section>
        @endif

        {{-- Testimonials --}}
        @if($testimonials)
            <x-testimonials :testimonials="$testimonials" />
        @endif

        <x-footer :companyLinks="$companyLinks" :companySocialMedia="$companySocialMedia" />
    </body>
</html>
