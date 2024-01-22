@extends('layout.main')
@section('content')
    <section class="services flex flex-col px-6 max-w-screen-2xl mx-auto">
        <div class="title-container mb-10">
            <h2 class="services-title">service ophtalmologie</h2>
            <p class="services-text">
                Notre équipe dévouée de professionnels expérimentés est là pour
                répondre à tous vos besoins en matière de santé oculaire
                <br />
                Découvrez ci-dessous les différents services que nous proposons :
            </p>
        </div>
        <div
            class="*:min-w-96 flex flex-row min-w-screen mx-2 md:flex-wrap md:*:w-[45%] md:*:mx-auto overflow-auto small-scrollbar">
            <div class="service-item">
                <img src="assets/img/SVG/angio.svg" alt="" />
                <a href="angiographie.html" class="item-text">angiographie</a>
            </div>
            <div class="service-item">
                <img src="assets/img/SVG/angio-ultra.svg" alt="" />
                <a href="angio-ultra.html" class="item-text">angiographie ultra grand champ</a>
            </div>
            <div class="service-item">
                <img src="assets/img/SVG/fov.svg" alt="" />
                <a href="fov.html" class="item-text">champ visuel</a>
            </div>
            <div class="service-item">
                <img src="assets/img/SVG/cat.svg" alt="" />
                <a href="cat.html" class="item-text">chirurgie de la cataracte</a>
            </div>
            <div class="service-item">
                <img src="assets/img/SVG/strab.svg" alt="" />
                <a href="strab.html" class="item-text">chirurgie des strabismes</a>
            </div>
            <div class="service-item">
                <img src="assets/img/SVG/lacry.svg" alt="" />
                <a href="lacry.html" class="item-text">chirurgie des voies lacrymales</a>
            </div>
            <div class="service-item">
                <img src="assets/img/SVG/echoes-a.svg" alt="" />
                <a href="echoesA.html" class="item-text">echogaphie a</a>
            </div>
            <div class="service-item">
                <img src="assets/img/SVG/echoes-b.svg" alt="" />
                <a href="echoesB.html" class="item-text">echogaphie b</a>
            </div>
            <div class="service-item">
                <img src="assets/img/SVG/argon.svg" alt="" />
                <a href="argon.html" class="item-text">laser argon</a>
            </div>
            <div class="service-item">
                <img src="assets/img/SVG/slt.svg" alt="" />
                <a href="slt.html" class="item-text">laser slt</a>
            </div>
            <div class="service-item">
                <img src="assets/img/SVG/yag.svg" alt="" />
                <a href="yag.html" class="item-text">laser yag</a>
            </div>
            <div class="service-item">
                <img src="assets/img/SVG/oct-angio.svg" alt="" />
                <a href="octang.html" class="item-text">oct angiographie</a>
            </div>
            <div class="service-item">
                <img src="assets/img/SVG/retina.svg" alt="" />
                <a href="retina.html" class="item-text">retinographie ultra grand champ</a>
            </div>
            <div class="service-item">
                <img src="assets/img/SVG/tomooct.svg" alt="" />
                <a href="octang.html" class="item-text">tomographie (oct)</a>
            </div>
        </div>
    </section>
    <section class="about-kaci flex flex-col max-w-[1400px] mx-auto px-10 mb-16">
        {{-- title  --}}
        <div class="mb-14 px-7">
            <h2 class="about-title w-full text-center mb-10">
                A propos du cabinet <span class="kaci-title">dr kaci</span>
            </h2>
            <p class="about-text text-center">Une experience riche et une histoire de confiance</p>
        </div>
        {{-- content  --}}
        <div class="flex flex-row">
            {{-- mobile  --}}
            <div class="flex flex-col w-full md:hidden">
                <div class="w-full px-7">
                    <div
                        class="w-full h-[400px] rounded-2xl relative bg-[url('/assets/img/SVG/unsplash_b3LF7JHQmms.jpg')] bg-cover bg-no-repeat bg-center overflow-hidden">
                        <div
                            class="mobile-contact-info *:flex *:flex-row *:items-center *:px-3 flex flex-col overflow-hidden w-full absolute bottom-0">
                            <div class="mobile-detail">
                                <img class="h-11" src="/assets/img/SVG/wmark icon.svg" alt="" />
                                <p class="mx-6 my-4">
                                    immeuble Djamma, Bloc A, Route de l’université - Targa
                                    Ouzemour - Béjaia
                                </p>
                            </div>
                            <div class="mobile-detail">
                                <img class="h-11" src="/assets/img/SVG/wIcon-phone.svg" alt="" />
                                <p class="mx-6 my-4">+213 34 12 41 77</p>
                            </div>
                            <div class="mobile-detail">
                                <img class="h-11" src="/assets/img/SVG/wIcon-phone.svg" alt="" />
                                <p class="mx-6 my-4">+213 558 769 974 /+213 798 64 18 42</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mobile-text-about px-7">
                    <p>
                        Bienvenue au Cabinet Ophtalmologique du Dr. Kaci, où
                        professionnalisme et expérience se conjuguent pour votre santé
                        visuelle.
                    </p>
                    <p>
                        Le Dr. Kaci, médecin ophtalmologiste chevronné, met à votre
                        disposition son expertise forgée par de nombreuses années de
                        pratique. Son dévouement envers l'excellence et son souci
                        constant d'actualisation dans le domaine de l'ophtalmologie en
                        font un praticien reconnu.
                    </p>
                </div>

                <div class="section-breaker w-full h-fit flex flex-col justify-start items-start py-12 px-10">
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
                <div class="mobile-text-about mt-5 px-5">
                    <p>
                        Nous comprenons que votre vision est essentielle à votre qualité
                        de vie. C'est pourquoi nous nous engageons à vous offrir les
                        meilleurs soins oculaires possibles. Notre équipe médicale,
                        formée et attentive, s'efforce de répondre à vos besoins, qu'il
                        s'agisse de simples corrections visuelles ou de traitements
                        complexes des affections oculaires.
                    </p>
                    <p>
                        Dans notre cabinet, vous bénéficierez des dernières avancées
                        technologiques, garantissant ainsi des diagnostics précis et des
                        traitements adaptés. Que ce soit pour des problèmes de vision
                        courants ou des traitements de pointe, le Dr. Kaci et son équipe
                        vous accompagnent tout au long du processus.
                    </p>
                </div>
            </div>
            {{-- desktop --}}
            <div class="about-desc me-10 hidden ps-7 md:block">
                <img src="/assets/img/SVG/unsplash_b3LF7JHQmms.jpg" alt="clinique de kaci" class="clinique-img" />
                <div class="about-desc-text">
                    <p>
                        Bienvenue au Cabinet Ophtalmologique du Dr. Kaci, où
                        professionnalisme et expérience se conjuguent pour votre santé
                        visuelle.
                    </p>
                    <p>
                        Le Dr. Kaci, médecin ophtalmologiste chevronné, met à votre
                        disposition son expertise forgée par de nombreuses années de
                        pratique. Son dévouement envers l'excellence et son souci
                        constant d'actualisation dans le domaine de l'ophtalmologie en
                        font un praticien reconnu.
                    </p>
                    <p>
                        Nous comprenons que votre vision est essentielle à votre qualité
                        de vie. C'est pourquoi nous nous engageons à vous offrir les
                        meilleurs soins oculaires possibles. Notre équipe médicale,
                        formée et attentive, s'efforce de répondre à vos besoins, qu'il
                        s'agisse de simples corrections visuelles ou de traitements
                        complexes des affections oculaires.
                    </p>
                    <p>
                        Dans notre cabinet, vous bénéficierez des dernières avancées
                        technologiques, garantissant ainsi des diagnostics précis et des
                        traitements adaptés. Que ce soit pour des problèmes de vision
                        courants ou des traitements de pointe, le Dr. Kaci et son équipe
                        vous accompagnent tout au long du processus.
                    </p>
                </div>
            </div>
            <aside class="about-contact hidden pe-7 md:block">
                <div class="about-container">
                    <img src="/assets/img/SVG/newAsset 4 1.svg" alt="dr-kaci-logo"
                        class="logo-img aside-logo h-40 lg:h-60" />
                    <a href="/about.html" class="cta-aside">a propos de nous</a>
                </div>
                <div class="find-us">
                    <h3>retrouvez nous</h3>
                    <div>
                        <img src="assets/img/SVG/Icon-phone.svg" alt="" /><a href="#"
                            class="find-us-a">+213
                            34 12 41 77</a>
                    </div>
                    <div>
                        <img src="assets/img/SVG/Icon-phone.svg" alt="" /><a href="#"
                            class="find-us-a">+213
                            558 769 974 /+213 798 64 18 42</a>
                    </div>
                    <div>
                        <img src="assets/img/SVG/envelope.svg" alt="" /><a href="#"
                            class="find-us-a">drkaci@drkaci.com</a>
                    </div>
                    <div>
                        <img src="assets/img/SVG/mark icon.svg" alt="" />
                        <a href="#" class="find-us-a">immeuble Djamma, Bloc A, Route de l’université - Targa
                            Ouzemour - Béjaia</a>
                    </div>
                </div>
            </aside>
        </div>
    </section>
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
    <section id="contact-form" class="contact-form flex flex-row items-center justify-center lg:px-20 p-0">
        <div class="contact-info px-10 hidden lg:block">
            <div class="contact-form-title p-0">
                <h2 class="info-title">
                    <span>contactez</span> le cabinet ophtalmologique Dr.KACI
                </h2>
                <p class="form-title-desc">
                    Nous apprécions vos commentaires - Laissez-nous un avis et
                    aidez-nous à nous améliorer!
                </p>
                <div class="find-us-form">
                    <div class="white-contact">
                        <img src="assets/img/SVG/wIcon-phone.svg" alt="" />
                        <a href="#">+213 34 12 41 77</a>
                    </div>
                    <div class="white-contact">
                        <img src="assets/img/SVG/wIcon-phone.svg" alt="" />
                        <a href="#">+213 558 769 974</a>
                    </div>
                    <div class="white-contact">
                        <img src="assets/img/SVG/wenvelope.svg" alt="" /><a href="#">drkaci@drkaci.com</a>
                    </div>
                    <div class="white-contact">
                        <img src="assets/img/SVG/wmark icon.svg" alt="" /><a href="#">immeuble Djamma, Bloc
                            A, Route de l’université - Targa
                            Ouzemour - Béjaia</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-container w-full lg:max-w-[47%] py-24">
            <div class="form lg:bg-white bg-[#00529A] *:!text-white lg:*:text-[#021B50] lg:p-20 p-10 flex flex-col">
                <h2 id="cont-title" class="form-title text-center mb-10">Laissez un commentaire</h2>
                <div class="lg:block hidden">
                    @include('components.contact-form-white')
                </div>

                <div class="block lg:hidden">
                    @include('components.contact-form-blue')
                </div>

            </div>
        </div>
    </section>
    @include('components.common-eye-diseases')
@endsection
