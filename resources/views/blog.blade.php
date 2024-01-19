@extends('layout.main')
@section('content')
    <section class="rec-article">
        <h2 class="about-title article-title">articles en vedette</h2>
        <div class="spotlight">
            <img src="assets/img/SVG/article-myope.jpg" alt="" class="article-img" />
            <h3 class="article-sub">
                Comprendre la myopie : causes, symptômes et traitements
            </h3>
            <p>
                La myopie est un problème de vision courant qui touche de nombreuses
                personnes à travers le monde. Elle affecte la capacité de l'œil à
                voir clairement les objets éloignés, tandis que la vision de près
                reste intacte. Dans cet article...
            </p>
            <a href="myop.html" class="spotlight-a">lire plus</a>
        </div>
        <div class="article-cards">
            <div class="article-card">
                <img src="assets/img/SVG/blog pics/art1.jpg" alt="" />
                <h2>Les Aliments Essentiels pour une Bonne Vue</h2>
                <a href="art.html">lire plus</a>
            </div>
            <div class="article-card">
                <img src="assets/img/svg/blog pics/art2.jpg" alt="" />
                <h2>
                    Quand consulter un ophtalmologue : Les signes qui ne trompent pas
                </h2>
                <a href="art2.html">lire plus</a>
            </div>
        </div>
    </section>
    <section class="last-articles">
      <h2 class="about-title last-title">derniers articles</h2>
      <div class="last-cards">
        <div class="article-cards">
          <div class="article-card last-card">
            <img src="assets/img/svg/blog pics/myope.jpg" alt="" />
            <h2>Comprendre la myopie : causes, symptômes et traitements</h2>
            <p>
              La myopie est un problème de vision courant qui touche de
              nombreuses personnes à travers le monde. Elle affecte la
              capacité de l'œil à voir clairement les objets éloignés...
            </p>
            <a href="myop.html">lire plus</a>
          </div>
          <div class="article-card last-card">
            <img src="assets/img/svg/blog pics/art.jpg" alt="" />
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
            <a href="art3.html">lire plus</a>
          </div>
        </div>
        <div class="article-cards">
          <div class="article-card last-card">
            <img src="assets/img/svg/blog pics/art1.jpg" alt="" />
            <h2>Les Aliments Essentiels pour une Bonne Vue</h2>
            <p>
              vision saine est un élément crucial de notre bien-être global,
              et notre alimentation joue un rôle essentiel dans le maintien de
              la santé oculaire. En incorporant certains aliments dans votre
              régime alimentaire quotidien...
            </p>
            <a href="art.html">lire plus</a>
          </div>
          <div class="article-card last-card">
            <img src="assets/img/svg/blog pics/art3.jpg" alt="" />
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
            <a href="art4.html">lire plus</a>
          </div>
        </div>
        <div class="article-cards">
          <div class="article-card last-card">
            <img src="assets/img/svg/blog pics/art2.jpg" alt="" />
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
            <a href="art2.html">lire plus</a>
          </div>
        </div>
      </div>
    </section>
@endsection
