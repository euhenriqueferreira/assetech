@props([
    'testimonials',
])

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