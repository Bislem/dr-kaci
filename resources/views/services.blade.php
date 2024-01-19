@extends('layout.main')
@section('content')
    <section class="services-cards">
        @foreach ($services as $service)
            <div class="service-card">
                <div class="card-title">
                    <h2>{{ $service->title }}</h2>
                    <span>01</span>
                </div>
                <img src="{{ $service->poster ? $service->poster : ''}}" alt="Dr Kaci {{ $service->title }}" />
                <p>
                    {{$service->shortDescription ? $service->shortDescription : ''}}
                </p>
                <a href="/services/{{$service->id}}">voir plus</a>
            </div>
        @endforeach
    </section>
    <div class="section-breaker mob-breaker">
        <img src="/assets/img/SVG/Layer 3.svg" alt="" />
        <h2>le choix clair pour votre vue</h2>
        <p>
            Notre expertise est là pour vous, n'hesitez pas à nous contacter si
            besoin
        </p>
        <div class="cta-breaker">
            <a href="/contact.html" class="cta-aside">contactez-nous</a>
            <a href="/about.html" class="cta-aside cta-mobile">à propos de nous</a>
        </div>
    </div>
    <section class="patients-review service-review">
        <div class="clinic-infos-side">
            <h2 class="patients-title">
                ce que nos <span class="patients">patients</span> disent sur nous
            </h2>
            <p class="patients-text">
                Chez DR KACI, nous nous engageons à fournin les meilleurs soins
                possibles à nos patients. Nous sommes fiers des commentaires
                positifs que nous recevons de nos patients et nous nous efforçons
                constamment d'améliorer nos services sur la base de leurs
                commentaires. Voici quelques-unes des choses que nos patients ont
                dites à notre sujet:
            </p>
        </div>
        <div class="reviews-section">
            <div class="review">
                <span>"</span>
                <div class="review-content">
                    <blockquote>
                        J'ai été impressionné par l'accueil élégant du personnel, ils
                        m'ont fait sentir à l'aise tout au long de ma visite
                    </blockquote>
                    <img src="/assets/img/illustration/SVG/avatr-man.svg" alt="man" />
                </div>
                <p>B. Asalas</p>
            </div>
            <div class="review">
                <span>"</span>
                <div class="review-content">
                    <blockquote>
                        Je remercie dieu et le Dr Kaci de m'avoir soigné et de m'avoir
                        permis de retrouver la vue
                    </blockquote>
                    <img src="/assets/img/illustration/SVG/avatr-old.svg" alt="" />
                </div>
                <p>I. Arezki</p>
            </div>
            <div class="review">
                <span>"</span>
                <div class="review-content">
                    <blockquote>
                        Le Dr Kaci est une excellente chirurgienne je me suis sentie à
                        l'aise et confiante dans le fait qu'elle gardait mon intérêt à
                        coeur et qu'elle metraitait comme s'il s'agissait d'un proche
                        parent
                    </blockquote>
                    <img src="/assets/img/illustration/SVG/avatar-woman.svg" alt="#" />
                </div>
                <p>T. Tassadit</p>
            </div>
        </div>
        <div class="working-hours service-hours">
            <h4>Heures de travail</h4>
            <div class="hours">
                <p>Sam - Jeu</p>
                <p>08:00 - 17:00</p>
            </div>
            <div class="hours">
                <p>Lundi</p>
                <p>09:00 - 19:00</p>
            </div>
            <div class="hours">
                <p>Vendredi</p>
                <p>14h30 - 21h00</p>
            </div>
        </div>
    </section>


    @include('components.common-eye-diseases')
@endsection
