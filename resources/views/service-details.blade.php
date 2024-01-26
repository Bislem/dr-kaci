@extends('layout.main')
@section('content')
    <section class="illness-details">
        <div class="detailed-sick lg:flex hidden md:flex-row flex-col max-w-[1300px] mx-auto">
            <div class="sick-illustration p-20">
                <div class="image-cropper">
                    <img src="{{ $data->image }}" alt="" class="sick-img" />
                </div>
                <a href="contact.html" class="sick-cta">prenez rendez-vous</a>
            </div>
            <div class="info-sick p-20">
                {!! $data->content !!}
            </div>
        </div>

        <div class="lg:hidden flex flex-col max-w-[1300px] mx-auto">
            <h2 class="text-[16px] text-center m-5 text-[#01224F]">Qu'est-ce que {{ $data->title }}</h2>
            <div class="h-[35vh] bg-cover w-screen border-2 bg-red border-black"
                style="background-image: url('{{ $data->image }}')"></div>
            <div class="info-sick info-sick-mobile lg:p-20 p-4">
                {!! $data->content !!}
            </div>
        </div>
        </div>
        <div class="faq-sick flex flex-col max-w-screen lg:max-w-[1200px] lg:mx-auto">
            <h3 class="faq-title text-center w-full">
                Questions Fréquentes sur {{ $data->title }}
            </h3>
            <div class="flex flex-row flex-wrap">
                @foreach ($data->faq as $f)
                    <div class="faq-card lg:w-[46%] w-[95%] mx-auto items-center my-5 py-5">
                        <div class="faq-card-img items-center">
                            <button type="button" class="faq-btn w-full flex flex-row items-center">
                                <img src="/assets/img/qst-mark-icon.png" alt="" class="self-start"/>
                                <span class="text-left">
                                    {{ $f['question'] }}
                                </span>
                            </button>
                            @php
                                echo html_entity_decode($f['answer']);
                            @endphp
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>


    <div class="section-breaker w-full h-fit flex flex-col lg:hidden justify-start items-start py-12 px-10">
        <img src="/assets/img/SVG/Layer 3.svg" class="mb-4" alt="" />
        <h2 class="mb-4">le choix clair pour votre vue</h2>
        <p class="mb-8 text-[12px]">
            Notre expertise est là pour vous, n'hesitez pas à nous contacter
            si besoin
        </p>
        <div class="cta-breaker flex flex-row items-center justify-evenly w-full *:text-xl">
            <a href="/contact.html" class="cta-aside flex-1 px-2 py-4 text-center">contactez-nous</a>
            <a href="/about.html" class="cta-aside cta-mobile flex-1 px-2 py-4 text-center">à propos de
                nous</a>
        </div>
    </div>

    @include('components.team-section')
    @include('components.common-eye-diseases')

    <div class="section-breaker hidden lg:flex">
        <h2>le choix clair pour votre vue</h2>
        <p>
            Notre expertise est là pour vous, n'hesitez pas à nous contacter si
            besoin
        </p>
        <div class="cta-breaker">
            <a href="/contact.html" class="cta-aside">contactez-nous</a>
        </div>
    </div>

    <section class="patients-review lg:mt-16 flex lg:flex-row flex-col w-full items-center justify-center">
        <div class="mobile-text">
            <p>
                Nous comprenons que votre vision est essentielle à votre qualité de
                vie. C'est pourquoi nous nous engageons à vous offrir les meilleurs
                soins oculaires possibles. Notre équipe médicale, formée et
                attentive, s'efforce de répondre à vos besoins, qu'il s'agisse de
                simples corrections visuelles ou de traitements complexes des
                affections oculaires.
            </p>
            <p>
                Dans notre cabinet, vous bénéficierez des dernières avancées
                technologiques, garantissant ainsi des diagnostics précis et des
                traitements adaptés. Que ce soit pour des problèmes de vision
                courants ou des traitements de pointe, le Dr. Kaci et son équipe
                vous accompagnent tout au long du processus.
            </p>
        </div>
        <div
            class="clinic-infos-side px-0 lg:ps-12 lg:w-2/5 lg:max-w-[460px] self-center pt-0 flex lg:flex-col flex-col-reverse">
            <div class="w-full p-6">
                <h2 class="patients-title lg:text-start text-center w-full md:text-2xl lg:text-7xl">
                    ce que nos <span class="patients">patients</span> disent sur nous
                </h2>
                <p class="patients-text lg:text-start text-center w-full text-[12px]">
                    Chez DR KACI, nous nous engageons à fournir les meilleurs soins
                    possibles à nos patients. Nous sommes fiers des commentaires
                    positifs que nous recevons de nos patients et nous nous efforçons
                    constamment d'améliorer nos services sur la base de leurs
                    commentaires. Voici quelques-unes des choses que nos patients ont
                    dites à notre sujet :
                </p>
            </div>
            <div class="working-hours flex flex-col w-full lg:w-[400px]">
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
        </div>
        <div class="reviews-section lg:self-start lg:w-3/5 lg:pe-12 lg:py-10">
            <div class="review">
                <span>"</span>
                <div class="review-content">
                    <blockquote>
                        J'ai été impressionné par l'accueil élégant du personnel,
                        ils m'ont fait sentir à l'aise tout au long de ma visite
                    </blockquote>
                    <img src="/assets/img/illustration/SVG/avatr-man.svg" alt="man" />
                </div>
                <p>B. Asalas</p>
            </div>
            <div class="review">
                <span>"</span>
                <div class="review-content">
                    <blockquote>
                        Je remercie dieu et le Dr Kaci de m'avoir soigné et de
                        m'avoir permis de retrouver la vue
                    </blockquote>
                    <img src="/assets/img/illustration/SVG/avatr-old.svg" alt="" />
                </div>
                <p>I. Arezki</p>
            </div>
            <div class="review mb-9">
                <span>"</span>
                <div class="review-content">
                    <blockquote>
                        Le Dr Kaci est une excellente chirurgienne je me suis sentie
                        à l'aise et confiante dans le fait qu'elle gardait mon
                        intérêt à coeur et qu'elle metraitait comme s'il s'agissait
                        d'un proche parent
                    </blockquote>
                    <img src="/assets/img/illustration/SVG/avatar-woman.svg" alt="#" />
                </div>
                <p>T. Tassadit</p>
            </div>
        </div>
    </section>
@endsection
