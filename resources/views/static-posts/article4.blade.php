@extends('layout.main')
@section('content')
    <section class="about-kaci blog-about flex flex-col  max-w-[1300px] mx-auto">
        <div class="flex flex-col lg:flex-row mt-10">
            <div class="about-desc blog-content ">
                <img src="/assets/img/blog-pics/myope.jpg" alt="clinique de kaci" class="blog-img h-auto w-full lg:ms-10" />
                <div class="about-desc-text p-10">

                    <p class="blog-p">
                        La myopie est un problème de vision courant qui touche de nombreuses personnes à travers le monde.
                        Elle affecte la capacité de l'œil à voir clairement les objets éloignés, tandis que la vision de
                        près reste intacte. Dans cet article, nous allons plonger dans les causes, les symptômes et les
                        options de traitement disponibles pour ceux qui souffrent de myopie
                    </p>
                    <h3 class="blog-title-2">
                        C’est quoi <span>Une Myopie ? </span>
                    </h3>
                    <p class="blog-p">
                        La myopie, également connue sous le nom de "courte vue", est un trouble de la vision qui se produit
                        lorsque l'œil est trop long ou que la cornée a une courbure excessive. En conséquence, la lumière
                        qui pénètre dans l'œil se focalise devant la rétine plutôt que directement sur celle-ci, rendant la
                        vision des objets éloignés floue.
                    </p>

                    <h3 class="blog-title-2">
                        Les symptômes <span>de la myopie : </span>
                    </h3>

                    <p class="blog-p">
                    <ol class="*:p-1 ms-5" style="list-style-type: circle;">
                        <li>
                            Difficulté à voir clairement les objets éloignés, tels que les panneaux de signalisation ou les
                            tableaux dans une salle de classe.
                        </li>
                        <li>
                            Tendance à plisser les yeux pour tenter de mieux voir de loin.
                        </li>
                        <li>
                            Fatigue oculaire après des activités nécessitant une concentration visuelle prolongée, comme la
                            lecture ou l'utilisation d'un écran.
                        </li>
                    </ol>
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
                Comment éviter <span>la myopie :</span>
            </h3>
            <p class="blog-p">
                La myopie peut avoir des causes génétiques, environnementales ou être liée à des habitudes de vie. Des
                antécédents familiaux de myopie peuvent augmenter les risques de développer ce trouble de la vision. De
                plus, une exposition excessive aux écrans, un manque d'exposition à la lumière naturelle et une utilisation
                prolongée de la vision de près sont des facteurs de risque.
            </p>

            <h3 class="blog-title-2">
                Comment prévenir la progression de <span>la myopie :</span>
            </h3>
            <p class="blog-p">
                Bien que la myopie ne puisse pas être complètement évitée, certaines mesures peuvent être prises pour en
                réduire la progression, en particulier chez les enfants. Encourager les activités en extérieur, limiter le
                temps d'écran et s'assurer que les distances de lecture sont adéquates sont des stratégies préventives
                efficaces.
            </p>

            <h3 class="blog-title-2">
                Options de traitement de <span>la myopie :</span>
            </h3>
            <p class="blog-p">
                Heureusement, plusieurs options de traitement sont disponibles pour corriger la myopie et améliorer la
                vision :
            <ol class="*:p-1 ms-5" style="list-style-type: circle;">
                <li>
                    Lunettes : Les lunettes de prescription aident à corriger la vision floue en redirigeant la lumière vers
                    la rétine.
                </li>
                <li>
                    Lentilles de contact : Les lentilles de contact offrent une alternative pratique aux lunettes pour
                    corriger la myopie. </li>
                <li>
                    Chirurgie réfractive : Des procédures chirurgicales telles que la LASIK peuvent remodeler la cornée pour
                    améliorer la vision.
                </li>
            </ol>
            </p>
        </div>
    </section>
@endsection
