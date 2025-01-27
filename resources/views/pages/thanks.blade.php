<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @include('../includes/assets-header')

        <title>Assetech - Obrigado</title>

        <!-- Styles / Scripts -->
        @vite(['resources/scss/pages/thanks.scss', 'resources/js/pages/thanks.js'])
    </head>
    <body>
        <x-header :companyLinks="$companyLinks" :companySocialMedia="$companySocialMedia" />
        
       <section class="thanks">
            <div class="check">
                <i class="fa-solid fa-check"></i>
            </div>
            <h1>Obrigado!</h1>
            <p>Agradecemos seu contato. Retornaremos assim que possível.</p>
            <a href="{{ route('pages.home') }}">Voltar para a página inicial</a>
       </section>

        <x-footer :companyLinks="$companyLinks" :companySocialMedia="$companySocialMedia" />
    </body>
</html>
