@vite(['resources/scss/components/header.scss', 'resources/js/components/header.js'])

@props(['companyLinks', 'companySocialMedia'])


<header>
    <div class="company-infos">
        <ul>
            @foreach ($companyLinks as $link)
                <li>
                    @php $tag = $link->url ? 'a' : 'p'; @endphp
                    <{{$tag}} @if($link->url) href="{{ $link->url }}" aria-label="{{ $link->label }}" @endif >
                        @include('components.svg.'.$link->icon_name)
                        {{ $link->content }}
                    </{{$tag}}>
                </li>
            @endforeach
        </ul>
    </div>

    <nav>
        <a href="{{ route('pages.home') }}" class="logo">
            <x-svg.logo />
        </a>
        
        <ul class="navigation">
            <li>
                <a href="{{ route('pages.home') }}">
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="{{ route('pages.company') }}">
                    <span>Sobre</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span>Serviços</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span>Equipamentos</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span>Contato</span>
                </a>
            </li>
        </ul>

        <ul class="social-links">
            @foreach ($companySocialMedia as $socialMediaItem)
                <li>
                    <a href="{{ $socialMediaItem->url }}" target="_blank" rel="noreferrer nofollow noopener" aria-label="{{ $socialMediaItem->label }}">
                        @include('components.svg.'.$socialMediaItem->icon_name)
                    </a>
                </li>
            @endforeach
        </ul>

        <div class="menu-mobile-button">
            <button onclick="showMenuMobile()">
                <x-svg.menu-mobile-button />
            </button>
        </div>
    </nav>
    
    <div class="menu-mobile">
        <header>
            <button onclick="hideMenuMobile()">
                <x-svg.x-mark />
            </button>
        </header>

        <nav>
            <ul>
                <li>
                    <a href="">
                        <span>Home</span>
                        <x-svg.chevron-right />
                    </a>
                </li>
                <li>
                    <a href="">
                        <span>Sobre</span>
                        <x-svg.chevron-right />
                    </a>
                </li>
                <li>
                    <a href="">
                        <span>Serviços</span>
                        <x-svg.chevron-right />
                    </a>
                </li>
                <li>
                    <a href="">
                        <span>Equipamentos</span>
                        <x-svg.chevron-right />
                    </a>
                </li>
                <li>
                    <a href="">
                        <span>Contato</span>
                        <x-svg.chevron-right />
                    </a>
                </li>
            </ul>
        </nav>

        <ul class="social-links">
            @foreach ($companySocialMedia as $socialMediaItem)
                <li>
                    <a href="{{ $socialMediaItem->url }}" target="_blank" rel="noreferrer nofollow noopener" aria-label="{{ $socialMediaItem->label }}">
                        @include('components.svg.'.$socialMediaItem->icon_name)
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</header>