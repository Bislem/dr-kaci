@extends('layout.main')
@section('content')
    <section class="about-kaci blog-about flex flex-col  max-w-[1300px] mx-auto">
        <div class="flex flex-col lg:flex-row mt-10">
            <div class="about-desc blog-content ">
                <img src="/assets/img/blog-pics/art1.jpg" alt="clinique de kaci" class="blog-img h-auto w-full lg:ms-10" />
                <div class="about-desc-text p-10">
                    <p class="blog-p">
                        vision saine est un élément crucial de notre bien-être global, et
                        notre alimentation joue un rôle essentiel dans le maintien de la
                        santé oculaire. En incorporant certains aliments dans votre régime
                        alimentaire quotidien, vous pouvez favoriser une vision forte et
                        prévenir divers problèmes oculaires. Voici une liste d'aliments
                        bénéfiques pour une vue optimale :Une
                    </p>
                    <h3 class="blog-title-2">
                        Les Légumes <span> Verts à Feuilles</span>
                    </h3>
                    <p class="blog-p">
                        Les épinards, le chou kale, la laitue et autres légumes verts à
                        feuilles sont riches en lutéine et en zéaxanthine, des
                        antioxydants qui protègent les yeux contre les dommages causés par
                        la lumière ultraviolette. Ces nutriments sont associés à la
                        réduction du risque de dégénérescence maculaire liée à l'âge.
                    </p>
                    <h3 class="blog-title-2">Les <span>Poissons </span> Gras</h3>
                    <p class="blog-p">
                        Les poissons tels que le saumon, le maquereau et le thon sont
                        riches en acides gras oméga-3, particulièrement le DHA (acide
                        docosahexaénoïque). Le DHA est un composant structurel important
                        de la rétine, contribuant ainsi à maintenir la santé de la vision.
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
            <h3 class="blog-title-2">Les Œufs</h3>
            <p class="blog-p">
                Les œufs sont une excellente source de lutéine, de zinc et de
                vitamine A, tous essentiels pour une bonne vision. La vitamine A est
                particulièrement cruciale pour le maintien de la cornée, la partie
                transparente de l'œil.
            </p>
            <h3 class="blog-title-2">Les Baies</h3>
            <p class="blog-p">
                Les myrtilles, les fraises et les framboises sont riches en
                antioxydants, tels que les anthocyanes, qui sont bénéfiques pour la
                santé des yeux. Ces composés peuvent contribuer à réduire la fatigue
                oculaire et à renforcer les vaisseaux sanguins dans les yeux.Les
                myrtilles, les fraises et les framboises sont riches en
                antioxydants, tels que les anthocyanes, qui sont bénéfiques pour la
                santé des yeux. Ces composés peuvent contribuer à réduire la fatigue
                oculaire et à renforcer les vaisseaux sanguins dans les yeux.
            </p>
            <h3 class="blog-title-2">Les Carottes</h3>
            <p class="blog-p">
                Les carottes sont une source riche de bêta-carotène, qui est
                converti en vitamine A dans le corps. La vitamine A est essentielle
                pour maintenir une vision normale, la santé de la cornée et la
                protection contre les infections oculaires.
            </p>
            <p class="blog-p">
                ntégrer ces aliments dans votre alimentation quotidienne peut
                contribuer significativement à la santé de vos yeux. Cependant, il
                est également crucial de maintenir un mode de vie global sain,
                comprenant une hydratation adéquate, une protection solaire pour les
                yeux et des pauses régulières lorsque vous travaillez sur des
                écrans. Consultez également régulièrement un ophtalmologiste pour
                des examens oculaires professionnels afin de détecter et de traiter
                tout problème éventuel à ses débuts. En prenant soin de votre vue
                aujourd'hui, vous investissez dans une vision claire et nette pour
                l'avenir.
            </p>
        </div>
    </section>
@endsection
