@extends('layout.main')
@section('content')
    <section class="about-kaci blog-about flex flex-col  max-w-[1300px] mx-auto">
        <div class="flex flex-col lg:flex-row mt-10">
            <div class="about-desc blog-content ">
                <img src="/assets/img/blog-pics/art.jpg" alt="clinique de kaci" class="blog-img h-auto w-full lg:ms-10" />
                <div class="about-desc-text p-10">

                    <p class="blog-p">
                        Avec l'évolution rapide de la technologie et des modes de vie, les jeunes d'aujourd'hui sont de plus
                        en plus exposés à des écrans et à des activités qui peuvent affecter leur santé visuelle. La routine
                        quotidienne des jeunes, marquée par l'utilisation prolongée des smartphones, tablettes, ordinateurs
                        et autres appareils électroniques, peut avoir des conséquences sur leur vue. Dans cet article, nous
                        examinerons comment la routine moderne des jeunes peut influencer leur santé oculaire et comment
                        prendre des mesures pour protéger leurs yeux.
                    </p>
                    <h3 class="blog-title-2">
                        Utilisation excessive des écrans :
                    </h3>
                    <p class="blog-p">
                        Les jeunes d'aujourd'hui passent souvent de longues heures devant des écrans, que ce soit pour
                        étudier, travailler, jouer ou se divertir. Cette exposition prolongée aux écrans peut entraîner une
                        fatigue oculaire numérique, caractérisée par des symptômes tels que des yeux secs, des maux de tête,
                        une vision floue et des douleurs oculaires.
                    </p>

                    <h3 class="blog-title-2">
                        Baisse de l'activité en extérieur :
                    </h3>

                    <p class="blog-p">
                        Les jeunes passent également moins de temps à l'extérieur, préférant souvent les activités
                        intérieures liées à la technologie. Le manque d'exposition à la lumière naturelle peut affecter la
                        santé des yeux, car la lumière du jour joue un rôle crucial dans le développement et le maintien
                        d'une vision saine.
                    </p>

                </div>
            </div>
            <aside class="about-contact hidden lg:flex blog-aside px-10">
                <div class="about-container">
                    <img src="/assets/img/SVG/newAsset 4 1.svg" alt="dr-kaci-logo" class="logo-img aside-logo" />
                    <a href="/about.html" class="cta-aside">a propos de nous</a>
                </div>
                <div class="find-us">
                    <h3>retrouvez nous</h3>
                    <div>
                        <img src="assets/img/SVG/Icon-phone.png" alt="" /><a href="#" class="find-us-a">+213
                            34 12 41 77</a>
                    </div>
                    <div>
                        <img src="assets/img/SVG/Icon-phone.png" alt="" /><a href="#" class="find-us-a">+213
                            558 769 974 /+213 798 64 18 42</a>
                    </div>
                    <div>
                        <img src="assets/img/SVG/envelope.png" alt="" /><a href="#"
                            class="find-us-a">drkaci@drkaci.com</a>
                    </div>
                    <div>
                        <img src="assets/img/SVG/mark icon.png" alt="" />
                        <a href="#" class="find-us-a">immeuble Djamma, Bloc A, Route de l’université - Targa Ouzemour
                            - Béjaia</a>
                    </div>
                </div>
            </aside>
            <div class="section-breaker lg:hidden w-full h-fit mb-10 flex flex-col justify-start items-start py-12 px-10">
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
        </div>
        <div class="about-desc-text blog-text-big m-0 px-10">
            <h3 class="blog-title-2">
                Mauvaises habitudes de lecture :
            </h3>
            <p class="blog-p">
                La lecture prolongée sur des appareils électroniques peut entraîner une diminution de la fréquence des
                clignements des yeux, ce qui peut entraîner une sécheresse oculaire et une fatigue visuelle accrue.
            </p>

            <h3 class="blog-title-2">
                Trouble du sommeil :
            </h3>
            <p class="blog-p">
                L'utilisation d'appareils électroniques avant le coucher peut perturber le sommeil des jeunes, car la
                lumière bleue émise par les écrans peut supprimer la production de mélatonine, une hormone essentielle pour
                le sommeil. Un sommeil de mauvaise qualité peut également affecter la santé oculaire.
            </p>

            <h3 class="blog-title-2">
                Comment protéger la vue des jeunes :
            </h3>
            <p class="blog-p">
            <ol class="*:p-1 ms-5" style="list-style-type: circle;">
                <li>
                    Limiter le temps d'écran : Encouragez les jeunes à limiter leur temps d'écran et à prendre régulièrement
                    des pauses pour reposer leurs yeux.
                </li>
                <li>
                    Faire des pauses visuelles : Incitez-les à suivre la règle 20-20-20 : toutes les 20 minutes, regardez
                    quelque chose à 20 pieds (environ 6 mètres) pendant 20 secondes pour détendre les yeux.
                </li>
                <li>
                    Passer du temps à l'extérieur : Encouragez les jeunes à passer du temps à l'extérieur pour profiter de
                    la lumière naturelle, ce qui peut aider à prévenir la myopie et favoriser une vision saine.
                </li>

                <li>
                    Encourager de bonnes habitudes de lecture : Encouragez-les à maintenir une distance appropriée
                    lorsqu'ils lisent sur des écrans et à ajuster la luminosité pour éviter la fatigue oculaire.
                </li>
                <li>
                    Établir une routine de sommeil saine : Encouragez un sommeil de qualité en limitant l'utilisation des
                    appareils électroniques avant le coucher et en favorisant une atmosphère de sommeil calme et apaisante.
                </li>
            </ol>
            <p>
                La routine moderne des jeunes, caractérisée par une utilisation excessive des écrans et une diminution de
                l'activité en extérieur, peut avoir des conséquences sur leur santé oculaire. Il est essentiel de
                sensibiliser les jeunes et leurs parents à l'importance de protéger leurs yeux en adoptant de bonnes
                pratiques, en limitant le temps d'écran et en passant du temps à l'extérieur. En prenant des mesures pour
                préserver leur vision, les jeunes peuvent profiter d'une vue saine et durable tout au long de leur vie.
            </p>

            </p>
        </div>
    </section>
@endsection
