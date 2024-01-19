@extends('layout.main')
@section('content')
    <section class="about-us-contact">
        <div class="contact-info">
            <div class="contact-form-title">
                <h2 class="info-title about-info">
                    <span>où</span> trouver la clinique Dr kaci
                </h2>
                <p class="form-title-desc about-info-text">
                    Pour toute demande d’information ou prise de rendez-vous,
                    contactez-nous via les coordonnées ci-dessous.
                </p>
                <div class="find-us-form">
                    <div class="white-contact about-contact-info">
                        <img src="/assets/img/SVG/Icon-phone-1.svg" alt="" />
                        <a href="#">+213 34 12 41 77</a>
                    </div>
                    <div class="white-contact about-contact-info">
                        <img src="/assets/img/SVG/Icon-phone-1.svg" alt="" />
                        <a href="#">+213 558 769 974</a>
                    </div>
                    <div class="white-contact about-contact-info">
                        <img src="/assets/img/SVG/envelope.svg" alt="" />
                        <a href="#">drkaci@drkaci.com</a>
                    </div>
                    <div class="white-contact about-contact-info">
                        <img src="/assets/img/SVG/mark icon.svg" alt="" />
                        <a href="#">immeuble Djamma, Bloc A, Route de l’université - Targa
                            Ouzemour - Béjaia</a>
                    </div>
                </div>
            </div>
        </div>
        <section class="mobile-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d237.60400904294303!2d5.049477737309913!3d36.75123339951588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sdz!4v1698120812960!5m2!1sfr!2sdz"
                width="500" height="200" style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
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
                    <input type="button" name="" id="btnSubmit" value="Confirmer le rendez-vous" class="form-cta" />
                </form>
            </div>
        </div>
    </section>
    <section class="desk-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d237.60400904294303!2d5.049477737309913!3d36.75123339951588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sdz!4v1698120812960!5m2!1sfr!2sdz"
            width="1920" height="600" style="border: 0" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
@endsection
