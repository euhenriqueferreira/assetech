@vite(['resources/scss/components/footer.scss'])

@props(['companyLinks', 'companySocialMedia'])

<footer>
    <div class="logo">
        <x-svg.logo-white />
    </div>

    <nav>
        <ul class="navigation">
            <li>
                <a href="{{ route('pages.home') }}">
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="">
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
</footer>