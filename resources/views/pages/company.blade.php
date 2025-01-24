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
    
        <section class="our-resume">
            <p>Somos uma empresa comprometida com a excelência, dedicada a fornecer serviços e equipamentos de alta qualidade para atender às necessidades específicas dos nossos clientes. Fundada em [ano de fundação], nossa jornada tem sido marcada por inovação, integridade e compromisso com a satisfação do cliente.</p>
            <p>No cerne da nossa filosofia está o compromisso com a qualidade. Desde a concepção até a entrega, cada aspecto do nosso trabalho reflete padrões rigorosos e atenção aos detalhes. Nossa equipe talentosa e dedicada, composta por profissionais apaixonados e experientes, é o alicerce do nosso sucesso.</p>
            <p>Na Assetech, acreditamos na inovação contínua. Estamos constantemente explorando novas maneiras de melhorar nossos serviços e oferecer soluções inovadoras aos nossos clientes. Essa mentalidade orientada para o futuro nos permite permanecer na vanguarda da indústria de serviços e equipamentos.</p>
            <p>Além disso, valorizamos profundamente a relação com nossos clientes. Estamos comprometidos em construir parcerias duradouras, baseadas na confiança mútua e comunicação transparente. A satisfação do cliente é a medida definitiva do nosso sucesso. Como uma empresa socialmente responsável, também nos dedicamos a causas que impactam positivamente nossa comunidade e o meio ambiente. Estamos empenhados em fazer a diferença e contribuir para um futuro sustentável.</p>
            <p>Agradecemos por escolher a Assetech como seu parceiro em serviços e equipamentos. Estamos entusiasmados em compartilhar nossa história, nossos valores e nosso compromisso com você. Juntos, estamos construindo um caminho de sucesso e crescimento.
            Seja parte da nossa jornada. Seja parte da Assetech.</p>
        </section>

        
        {{-- Info Icons --}}
        <x-info-icons />

        {{-- Testimonials --}}
        @if($testimonials)
            <x-testimonials :testimonials="$testimonials" />
        @endif

        <x-footer :companyLinks="$companyLinks" :companySocialMedia="$companySocialMedia" />
    </body>
</html>
