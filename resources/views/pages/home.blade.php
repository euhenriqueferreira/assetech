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
        @vite(['resources/scss/pages/home.scss', 'resources/js/app.js'])
    </head>
    <body>
        <x-header :companyLinks="$companyLinks" :companySocialMedia="$companySocialMedia" />
        
        <section class="banner-top">
            <img src={{$bannerTop->image_url}} alt={{$bannerTop->image_alt}} title={{$bannerTop->image_title}}>

            <div class="banner-top__container">
                <x-svg.logo-white />
                <p>{{$bannerTop->title}}</p>
            </div>
        </section>

        <x-footer :companyLinks="$companyLinks" :companySocialMedia="$companySocialMedia" />
    </body>
</html>
