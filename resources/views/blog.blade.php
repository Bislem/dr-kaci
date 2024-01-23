@extends('layout.main')
@section('content')
    <section class="rec-article w-full flex flex-col">
        <h2 class="about-title article-title w-full text-center ">articles en vedette</h2>
        <div class="flex flex-col lg:flex-row">
            <div class="spotlight lg:w-[60%] w-full lg:mr-10">
                <img src="assets/img/SVG/article-myope.jpg" alt="" class="article-img w-full" />
                <h3 class="article-sub">
                    Comprendre la myopie : causes, symptômes et traitements
                </h3>
                <p>
                    La myopie est un problème de vision courant qui touche de nombreuses
                    personnes à travers le monde. Elle affecte la capacité de l'œil à
                    voir clairement les objets éloignés, tandis que la vision de près
                    reste intacte. Dans cet article...
                </p>
                <a href="/blog/article4" class="spotlight-a">lire plus</a>
            </div>
            <div class="article-cards flex-1 hidden lg:block">
                <div class="article-card">
                    <img src="assets/img/blog-pics/art1.jpg" alt="" />
                    <h2>Les Aliments Essentiels pour une Bonne Vue</h2>
                    <a href="/blog/article1">lire plus</a>
                </div>
                <div class="article-card">
                    <img src="assets/img/blog-pics/art2.jpg" alt="" />
                    <h2>
                        Quand consulter un ophtalmologue : Les signes qui ne trompent pas
                    </h2>
                    <a href="/blog/article2">lire plus</a>
                </div>
            </div>
        </div>
    </section>
    <section class="last-articles px-10">
        <h2 class="about-title last-title">derniers articles</h2>
        <div class="last-cards flex flex-row flex-wrap lg:*:w-[33%] *:w-[50%] *:!px-4">
            <div class="article-card">
                <img src="assets/img/blog-pics/myope.jpg" alt="" />
                <h2>Comprendre la myopie : causes, symptômes et traitements</h2>
                <p>
                    La myopie est un problème de vision courant qui touche de
                    nombreuses personnes à travers le monde. Elle affecte la
                    capacité de l'œil à voir clairement les objets éloignés...
                </p>
                <a href="/blog/article2">lire plus</a>
            </div>
            <div class="article-card">
                <img src="assets/img/blog-pics/art.jpg" alt="" />
                <h2>
                    La routine des jeunes et ses conséquences sur la vue : Protéger
                    les yeux pour une vision durable
                </h2>
                <p>
                    Avec l'évolution rapide de la technologie et des modes de vie,
                    les jeunes d'aujourd'hui sont de plus en plus exposés à des
                    écrans et à des activités qui peuvent affecter leur santé
                    visuelle...
                </p>
                <a href="/blog/article5">lire plus</a>
            </div>
            <div class="article-card">
                <img src="assets/img/blog-pics/art1.jpg" alt="" />
                <h2>Les Aliments Essentiels pour une Bonne Vue</h2>
                <p>
                    vision saine est un élément crucial de notre bien-être global,
                    et notre alimentation joue un rôle essentiel dans le maintien de
                    la santé oculaire. En incorporant certains aliments dans votre
                    régime alimentaire quotidien...
                </p>
                <a href="/blog/article1">lire plus</a>
            </div>
            <div class="article-card">
                <img src="assets/img/blog-pics/art3.jpg" alt="" />
                <h2>
                    Préserver sa vue au quotidien : Les causes de la baisse de la
                    vue et comment l'éviter
                </h2>
                <p>
                    Une vision claire et nette est essentielle pour profiter
                    pleinement de la vie quotidienne. Cependant, divers facteurs
                    peuvent entraîner une baisse de la vue au fil du temps. Dans cet
                    article...
                </p>
                <a href="/blog/article3">lire plus</a>
            </div>
            <div class="article-card">
                <img src="assets/img/blog-pics/art2.jpg" alt="" />
                <h2>
                    Quand consulter un ophtalmologue : Les signes qui ne trompent
                    pas
                </h2>
                <p>
                    La santé de nos yeux est précieuse, et consulter un
                    ophtalmologue est essentiel pour préserver notre vision et
                    détecter rapidement tout problème oculaire. Cependant, de
                    nombreuses personnes négligent de consulter un spécialiste...
                </p>
                <a href="/blog/article2">lire plus</a>
            </div>
        </div>
    </section>
@endsection
