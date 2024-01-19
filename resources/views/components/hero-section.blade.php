@if ($isHome)
    <section class="hero-section">
        <div class="hero-elements">
            <h1 class="hero-title">une vision experte de la santé oculaire</h1>
            <img src="/assets/img/illustration/SVG/eye-kaci.svg" alt="" class="glasses" />
            <a href="#contact-form" class="btn-cta">prenez un rendez vous</a>
            <div class="hero-experience text-xs md:text-lg lg:text-2xl xl:text-3xl 2xl:text-4xl  flex flex-row items-center justify-around lg:p-10 md:p-7 p-3">
                <div class="flex flex-row items-center justify-center">
                    <span class='mr-2 text-md md:text-xl lg:text-3xl xl:text-4xl 2xl:text-5xl'>30+</span>
                    <p>ans d'experience</p>
                </div>
                <div class="flex flex-row items-center justify-center">
                    <span class='mr-2 text-md md:text-xl lg:text-3xl xl:text-4xl 2xl:text-5xl'>+198K</span>
                    <p>patients traités</p>
                </div>
                <div class="flex flex-row items-center justify-center">
                    <span class='mr-2 text-md md:text-xl lg:text-3xl xl:text-4xl 2xl:text-5xl'>+11K</span>
                    <p>opérations réalisées</p>
                </div>
            </div>
        </div>
    </section>
@else
    <section class="hero-services">
        <div class="hero-main-title animate">
            @if ($isService)
                <h1 class="hero-services-title">
                    @if (isset($isArticle))
                        Dr Kaci Article
                    @else
                        <span>Dr Kaci</span> Service
                    @endif
                </h1>
                <h3 class="hero-services-title">{{ $title }}</h3>
            @else
                <h1 class="hero-services-title">{{ $title }}</h1>
            @endif
            <img src="/assets/img/eye_kaci.svg" alt="" class="service-glasses animate-glasses" />
        </div>
    </section>
@endif
