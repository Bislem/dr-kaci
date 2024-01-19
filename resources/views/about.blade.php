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
                    <img src="/assets/img/SVG/Icon2.svg" alt="" />
                    <p>30 Ans Expérience</p>
                    <img src="/assets/img/SVG/healtj.svg" alt="" />
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
                <div class="service-item why-us-item">
                    <img src="/assets/img/SVG/cat.svg" alt="" />
                    <p class="item-text">chirurgie occulaire avancées</p>
                </div>
                <div class="service-item why-us-item">
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
                    <img src="/assets/img/SVG/expertIcon.png" alt="" class="why-us-img" />
                    <p class="item-text">expertise spécialisée en ophtalmologie</p>
                </div>
            </div>
            <div class="circle-about">
                <p class="patients-num">+ 11000</p>
                <p class="op-done">opérations occulaires réussies</p>
            </div>
        </div>
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
    <div class="expertise">
        <img src="/assets/img/doctor-desktop.png" alt="" />
        <p>
            Une expertise en laquelle vous pouvez avoir confiance : Soins
            oculaires complets dispensés par un ophtalmologiste qualifié
        </p>
    </div>
    <div class="form-container">
        <div class="form">
            <h2 id="cont-title" class="form-title">Laissez un commentaire</h2>
            <form action="https://formsubmit.co/salim.loubar@hotmail.com" method="POST" class="form-item"
                id="form-cont" target="_blank">
                <div class="name">
                    <label for="name">nom & prénom</label>
                    <input type="text" name="name" id="name" placeholder="Entrez votre nom et prénom"
                        required />
                </div>
                <div class="tel">
                    <label for="tel">n° téléphone</label>
                    <input type="text" name="tel" id="tel" placeholder="Entrez votre N°téléphone"
                        required />
                </div>
                <div class="mail">
                    <label for="mail">Email</label>
                    <input type="text" name="mail" id="mail" placeholder="Entrez votre adresse e-mail"
                        required />
                </div>
                <div class="service-select">
                    <label for="services">service</label>
                    <select name="services" id="services" required>
                        <option class="choice" value="" disabled selected hidden>
                            Choisissez un service...
                        </option>
                        <option value="angiographie">angiographie</option>
                        <option value="champ visuel">champ visuel</option>
                        <option value="chirurgie des strabismes">
                            chirurgie des strabismes
                        </option>
                        <option value="chirurgie de la cataracte">
                            chirurgie de la cataracte
                        </option>
                        <option value="chirurgie des voies lacrymales">
                            chirurgie des voies lacrymales
                        </option>
                        <option value="echogaphie A">echogaphie A</option>
                        <option value="echographie B">echographie B</option>
                        <option value="laser argon">laser argon</option>
                        <option value="laser slt">laser slt</option>
                        <option value="laser yag">laser yag</option>
                        <option value="oct angiographie">oct angiographie</option>
                        <option value="tomographie (oct)">tomographie (oct)</option>
                    </select>
                </div>
                <div class="message">
                    <label for="message">message</label>
                    <textarea name="message" id="message" cols="70" rows="8" placeholder="Inserez votre message" required></textarea>
                </div>
                <input type="button" name="" id="btnSubmit" value="Confirmer le rendez-vous"
                    class="form-cta" />
            </form>
        </div>
    </div>
@endsection
