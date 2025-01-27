<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @include('../includes/assets-header')

        <title>Assetech - Contato</title>

        <!-- Styles / Scripts -->
        @vite(['resources/scss/pages/contact.scss', 'resources/js/pages/contact.js'])
    </head>
    <body>
        <x-header :companyLinks="$companyLinks" :companySocialMedia="$companySocialMedia" />
        
       <section class="contact-form">
            <p class="default_subtitle">Formulário</p>
            <h1 class="default_title">Envie-nos uma mensagem</h1>

            <form action="{{ route('pages.contact') }}" method="POST">
                @csrf

                <div class="input-line w-50">
                    <label for="name">Nome</label>
                    <input type="text" name="name" id="name" placeholder="Digite seu nome..." value="{{ old('name') }}">
                    @error('name')
                        <span class="form-error-span">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-line w-50">
                    <label for="phone">Telefone</label>
                    <input type="text" name="phone" id="phone" placeholder="Digite seu telefone..." value="{{ old('phone') }}">
                    @error('phone')
                        <span class="form-error-span">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-line w-100">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" id="email" placeholder="Digite seu e-mail..." value="{{ old('email') }}">
                    @error('email')
                        <span class="form-error-span">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-line w-50">
                    <label for="uf">Estado</label>
                    <select name="uf" id="uf" onchange="renderCitiesFromSelectedState()">
                        <option value="0" selected disabled>Selecione seu estado...</option>
                    </select>
                    @error('uf')
                        <span class="form-error-span">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-line w-50">
                    <label for="city">Cidade</label>
                    <select name="city" id="city">
                        <option value="0" selected disabled>Selecione sua cidade...</option>
                    </select>
                    @error('city')
                        <span class="form-error-span">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-line w-100">
                    <label for="message">Mensagem</label>
                    <textarea name="message" id="message" placeholder="Digite sua mensagem...">{{ old('message') }}</textarea>
                    @error('message')
                        <span class="form-error-span">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit"><span>Enviar mensagem</span></button>
            </form>
       </section>

        <div class="container-google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d732.4593804961601!2d-51.20959471620781!3d-29.15926063515222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951ea30a6c9e5e1f%3A0xc38e8c050a7829bb!2sASSETECH!5e0!3m2!1spt-BR!2sbr!4v1723558300382!5m2!1spt-BR!2sbr" width="100%" height="360" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Google Maps"></iframe>
        </div><!-- Google Maps -->

        <x-footer :companyLinks="$companyLinks" :companySocialMedia="$companySocialMedia" />
    </body>
</html>
