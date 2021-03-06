@extends('layouts.hero')

@section('title', 'Oferta academica')

@section('body')
    <div class="columns">
        <div class="column is-three-quarters">
            @foreach ($offer['faqs'] as $faq)
                <div class="content">
                    <p>
                        <strong>{{ $faq['question'] }}</strong>
                    </p>

                    <p>{{ $faq['answer'] }}</p>

                    <small>Actualizado hace {{ $faq['updated_at']->diffForHumans() }}</small>
                </div>
            @endforeach
        </div>

        <div class="column">
            <div class="box">
                <div class="content">
                    <p>No vez la respuesta a tu pregunta?</p>
                    <p>Preguntanos directamente.</p>

                    <a href="mailto:info@ucc.edu.ni" class="button is-info is-outlined is-fullwidth" style="margin-bottom: 5px;">
                        <span class="icon">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        </span>

                        <span>Escribenos</span>
                    </a>

                    <a href="tel:50582407695" class="button is-info is-outlined is-fullwidth">
                        <span class="icon">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </span>

                        <span>Llamanos</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
