@extends('layout.main')
@section('content')
    <section class="about-kaci blog-about flex flex-col  max-w-[1300px] mx-auto">
        <div class="flex flex-col lg:flex-row mt-10">
            <div class="about-desc blog-content ">
                <img src="/assets/img/blog-pics/art3.jpg" alt="clinique de kaci" class="blog-img h-auto w-full lg:ms-10" />
                <div class="about-desc-text p-10">
                    <h3 class="blog-title-2">
                        Les causes de <span>la baisse de la vue au quotidien : </span>
                    </h3>
                    <p class="blog-p">
                        Une vision claire et nette est essentielle pour profiter pleinement de la vie quotidienne.
                        Cependant, divers facteurs peuvent entraîner une baisse de la vue au fil du temps. Dans cet article,
                        nous explorerons les principales causes de la diminution de la vue et partagerons des conseils
                        pratiques pour préserver votre santé oculaire et éviter les problèmes visuels.
                    </p>
                 
                    <p class="blog-p">
                        a) L'exposition prolongée aux écrans : Le temps passé devant les écrans d'ordinateurs, de
                        smartphones et de tablettes peut entraîner une fatigue oculaire excessive et contribuer à la
                        sécheresse oculaire, ce qui peut affecter votre vision à long terme.
                        <br>
                        b) Le vieillissement naturel : Avec l'âge, les structures de l'œil peuvent subir des changements,
                        tels que la perte de flexibilité du cristallin, ce qui peut entraîner une presbytie (difficulté à
                        voir de près) ou une diminution de la vision générale.
                        <br>
                        c) Le manque de protection contre les UV : Une exposition excessive aux rayons ultraviolets du
                        soleil peut endommager les cellules de l'œil, augmentant ainsi le risque de développer des problèmes
                        oculaires, tels que la cataracte et la dégénérescence maculaire liée à l'âge (DMLA).
                        <br>
                        d) Une mauvaise alimentation : Une alimentation déséquilibrée, pauvre en nutriments essentiels pour
                        les yeux tels que les vitamines C et E, le zinc et les oméga-3, peut contribuer à des problèmes
                        visuels.
                        <br>
                        e) Les habitudes tabagiques : Le tabagisme peut nuire à la santé oculaire en augmentant le risque de
                        développer des maladies oculaires graves, comme la DMLA et le glaucome.
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
                Comment éviter <span>la baisse de la vue :</span>
            </h3>
            <p class="blog-p">
                <span class="mx-1">1.</span> Prendre des pauses visuelles : Si vous travaillez devant un écran, essayez de faire des pauses régulières
                pour reposer vos yeux. La règle 20-20-20 est utile : toutes les 20 minutes, regardez quelque chose à 20
                pieds (environ 6 mètres) pendant 20 secondes.
                <br>
                <span class="mx-1">2.</span> Porter des lunettes de soleil : Choisissez des lunettes de soleil qui offrent une protection à 100 %
                contre
                les rayons UV. Cela protégera vos yeux des dommages causés par l'exposition prolongée au soleil.
                <br>
                <span class="mx-1">3.</span> Consulter régulièrement un ophtalmologue : Des examens de la vue réguliers permettent de détecter et de
                traiter rapidement tout problème oculaire éventuel. Pour les adultes, un examen tous les deux ans est
                généralement recommandé.
                <br>
                <span class="mx-1">4.</span> Adopter une alimentation équilibrée : Intégrez des aliments riches en antioxydants, en vitamines et en
                minéraux bénéfiques pour les yeux, tels que les légumes à feuilles vertes, les agrumes, les noix, les
                graines et les poissons gras.
                <br>
                <span class="mx-1">5.</span> Arrêter de fumer : Si vous fumez, essayez de vous débarrasser de cette habitude. Cela contribuera non
                seulement à améliorer votre santé globale, mais aussi à protéger vos yeux.

                La baisse de la vue peut être causée par divers facteurs, mais en adoptant de bonnes pratiques et en prenant
                soin de vos yeux, vous pouvez préserver votre vision au quotidien. Prenez le temps de protéger vos yeux des
                écrans, du soleil et d'autres facteurs de risque, et consultez régulièrement un ophtalmologue pour des
                examens de la vue. Avec des habitudes saines et des soins appropriés, vous pouvez maintenir une vision
                claire et profiter pleinement de la beauté du monde qui vous entoure.

            </p>
        </div>
    </section>
@endsection
