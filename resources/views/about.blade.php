@extends('layout.main')
@section('content')
    <section class="about-experience">
        <div class="mobile-exp">
            <h1 class="about-mobile-title">l'experience compte</h1>
            <p class="about-title-text">
                Notre équipe dévouée de professionnels expérimentés est là pour
                répondre à tous vos besoins en matière de santé oculaire. Découvrez
                ci-dessous les différents services que nous proposons :
            </p>
            <div class="about-exp-img">
                <img src="/assets/img/patient-with-doctor.png" alt="" />
                <img src="/assets/img/patient-with-doctor2.png" alt="" />
            </div>
            <div class="exp-num-mobile">
                <div>
                    <img src="/assets/img/SVG/Icon2.svg" alt="" />
                    <p>30 Ans Expérience</p>
                </div>
                <div>
                    <img src="/assets/img/SVG/healthIcon.png" alt="" />
                    <p>+198 000 Patients traités</p>
                </div>
            </div>
            <p class="exp-text-mob">
                Nous comprenons l'importance de votre vision et nous sommes là pour
                vous accompagner tout au long de votre parcours visuel.
            </p>
            <p class="exp-text-mob">
                Prenez soin de vos yeux et ils prendront soin de vous ! Il est
                essentiel de comprendre l'importance d'une routine régulière chez
                votre ophtalmologue pour préserver une vision claire et éclatante
                tout au long de votre vie.
            </p>
            <div class="exp-num-mobile">
                <div>
                    <img src="/assets/img/SVG/healIcon.png" alt="" />
                    <p>soins occulaires de haute qualité</p>
                </div>
                <div>
                    <img src="/assets/img/SVG/eqpIcon.png" alt="" />
                    <p>equipements et technologies avancées</p>
                </div>
            </div>
        </div>
        <div class="exp">
            <div class="exp-detail">
                <h1>l'experience compte</h1>
                <p>
                    Dr KACI, fort d'une expertise solide et d'une expérience
                    enrichissante, est votre partenaire de confiance pour prendre soin
                    de votre vision.
                </p>
                <div class="exp-num">
                    <img class="me-10" src="/assets/img/SVG/Icon2.svg" alt="" />
                    <p class="me-10">30 Ans Expérience</p>
                    <img class="me-10" src="/assets/img/SVG/healtj.svg" alt="" />
                    <p>+198 000 Patients traités</p>
                </div>
                <img src="/assets/img/patient-with-doctor.png" alt="" class="exp-img" />
            </div>
            <div class="exp-text">
                <img src="/assets/img/patient-with-doctor2.png" alt="" class="exp-img" />
                <p>
                    Nous comprenons l'importance de votre vision et nous sommes là
                    pour vous accompagner tout au long de votre parcours visuel.
                </p>
                <p>
                    Prenez soin de vos yeux et ils prendront soin de vous ! Il est
                    essentiel de comprendre l'importance d'une routine régulière chez
                    votre ophtalmologue pour préserver une vision claire et éclatante
                    tout au long de votre vie.
                </p>
            </div>
        </div>
        <div class="mobile-vid">
            <div class="video-iris">
                <video src="assets/img/opht.mp4" autoplay playsinline loop class="opht-vid"></video>
            </div>
            <div class="kaci-mobile-info">
                <div class="mobile-info">
                    <p>
                        Bienvenue à notre cabinet du Dr. KACI expert en santé oculaire.
                        Notre cabinet moderne offre des examens précis, des traitements
                        avancés et une équipe dévouée. Réservez dès maintenant pour une
                        vision optimale et un service personnalisé. Votre bien-être
                        visuel est notre priorité.
                    </p>
                </div>
            </div>
            <div class="why-us-text">
                <h1>pourquoi choisir <span>dr kaci</span> ?</h1>
                <div class="service-item why-us-item w-full">
                    <img src="/assets/img/SVG/cat.svg" alt="" />
                    <p class="item-text">chirurgie occulaire avancées</p>
                </div>
                <div class="service-item why-us-item w-full">
                    <img src="/assets/img/SVG/expertIcon.png" alt="" />
                    <p class="item-text">expertise spécialisée en ophtalmologie</p>
                </div>
            </div>
        </div>
        <div class="mobile-ops">
            <img src="/assets/img/eye-surgery.png" alt="" class="op-mobile" />
            <div class="ops-number">
                <p>+11000</p>
                <p>opérations oculaires réussies</p>
            </div>
        </div>
    </section>
    <section class="video-opht">
        <div class="video-part">
            <video src="assets/img/opht.mp4" id="video" class="opht-vid"></video>
            <div class="overlay-elm click">
                <button class="play">
                    <img src="/assets/img/play-button.png" alt="" class="play-btn" />
                </button>
                <h2 class="play-text">Aperçu de l'ophtalmologie:</h2>
                <p class="play-text par">
                    Découvrez les merveilles des soins oculaires
                </p>
            </div>
            <div class="overlay-pause">
                <button class="pause-btn">
                    <img src="/assets/img/SVG/pause.svg" alt="" />
                </button>
            </div>
        </div>
        <div class="welcome-text">
            <div class="about-welcome">
                <img src="/assets/img/SVG/healIcon.png" alt="" />
                <p>soins occulaires de haute qualité</p>
                <img src="/assets/img/SVG/eqpIcon.png" alt="" />
                <p>equipements et technologies avancées</p>
            </div>
            <div class="welcome">
                <p class="welcome-title">
                    Bienvenue à notre cabinet du Dr. KACI expert en santé oculaire.
                    Notre cabinet moderne offre des examens précis, des traitements
                    avancés et une équipe dévouée. Réservez dès maintenant pour une
                    vision optimale et un service personnalisé. Votre bien-être visuel
                    est notre priorité.
                </p>
                <div class="contact-welcome"></div>
            </div>
        </div>
        <div class="why-us">
            <img src="/assets/img/eye-surgery.png" alt="" />
            <div class="why-us-text">
                <h1>pourquoi choisir <span>dr kaci</span> ?</h1>
                <div class="service-item why-us-item">
                    <img src="/assets/img/SVG/lacry.svg" alt="" class="why-us-img" />
                    <p class="item-text">chirurgie occulaire avancées</p>
                </div>
                <div class="service-item why-us-item">
                    <img class="" src="/assets/img/SVG/expertIcon.png" alt="" class="why-us-img" />
                    <p class="item-text">expertise spécialisée en ophtalmologie</p>
                </div>
            </div>
            <div class="circle-about">
                <p class="patients-num">+ 11000</p>
                <p class="op-done">opérations occulaires réussies</p>
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
            <a href="#contact" class="cta-aside flex-1 px-2 py-4 text-center">contactez-nous</a>
            <a href="/about.html" class="cta-aside cta-mobile flex-1 px-2 py-4 text-center">à propos de
                nous</a>
        </div>
    </div>

    <div class="section-breaker hidden lg:flex">
        <h2>le choix clair pour votre vue</h2>
        <p>
            Notre expertise est là pour vous, n'hesitez pas à nous contacter si
            besoin
        </p>
        <div class="cta-breaker">
            <a href="/about#contact" class="cta-aside">contactez-nous</a>
        </div>
    </div>
    <div class="expertise">
        <img src="/assets/img/doctor-desktop.png" alt="" />
        <p>
            Une expertise en laquelle vous pouvez avoir confiance : Soins
            oculaires complets dispensés par un ophtalmologiste qualifié
        </p>
    </div>


    <section id="contact" class="flex flex-col w-screen p-5 lg:p-4 my-16">
        <h3 class="text-[#021B50] text-center font-semibold text-4xl mb-14">Nous Contacter</h3>
        <div class="max-w-[800px] mx-auto w-full">
            @include('components.contact-form-white')
        </div>
    </section>
@endsection
