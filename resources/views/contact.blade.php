@extends('layout.main')
@section('content')
    <section class="about-us-contact px-0 flex flex-col max-w-[1250px] mx-auto lg:flex-row">
        <div class="contact-info flex-1">
            <div class="contact-form-title p-10 w-full">
                <h2 class="info-title about-info w-full">
                    <span>où</span> trouver la clinique Dr kaci
                </h2>
                <p class="form-title-desc about-info-text w-full">
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
        <section class="mobile-map w-full mb-14">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d237.60400904294303!2d5.049477737309913!3d36.75123339951588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sdz!4v1698120812960!5m2!1sfr!2sdz"
                 classs="w-full" width="100%" height="200" style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
        <div class="form-container flex-1 flex flex-col w-full px-10">
            <h2 id="cont-title" class="form-title">Laissez un commentaire</h2>
            @include('components.contact-form-blue')
        </div>
    </section>
    <section class="desk-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d237.60400904294303!2d5.049477737309913!3d36.75123339951588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sdz!4v1698120812960!5m2!1sfr!2sdz"
            width="100%" height="600" style="border: 0" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
@endsection
