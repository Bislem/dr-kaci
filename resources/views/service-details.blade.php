@extends('layout.main')
@section('content')
    <section class="illness-details">
        <div class="detailed-sick">
            <div class="sick-illustration">
                <div class="image-cropper">
                    <img src="{{ $data->image }}" alt="" class="sick-img" />
                </div>
                <a href="contact.html" class="sick-cta">prenez rendez-vous</a>
            </div>
            <div class="info-sick">
                {!! $data->content !!}
            </div>
        </div>
        <div class="faq-sick">
            <h3 class="faq-title">
                Questions Fréquentes sur {{ $data->title }}
            </h3>
            @foreach ($data->faq as $f)
                <div class="faq-card">
                    <div class="faq-card-img">
                        <button type="button" class="faq-btn">
                            <img src="/assets/img/SVG/e.svg" alt="" />
                            {{ $f['question'] }}
                        </button>
                        @php
                            echo html_entity_decode($f['answer']);
                        @endphp
                    </div>
                </div>
            @endforeach

        </div>
    </section>
    @include('components.team-section')
    @include('components.common-eye-diseases')
@endsection
