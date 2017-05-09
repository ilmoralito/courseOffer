@extends('layouts.hero')

@section('title', 'Oferta academica')

@section('hero')
    <h1 class="title">{{ $offer['name'] }}</h1>
    <h2 class="subtitle">Dirigo a profesionales de {{ implode( ', ', $offer['addressed_to']) }}</h2>
@endsection

@section('body')
    <div class="columns">
        <div class="column">
            @foreach ($offer['faqs'] as $faq)
                <div class="field">
                    <p>{{ $faq['question'] }}</p>

                    <p>{{ $faq['answer'] }}</p>

                    <small>Actualizado hace {{ $faq['updated_at']->diffForHumans() }}</small>
                </div>
            @endforeach
        </div>

        <div class="column is-3">
            <div class="box">
                <div class="content">
                    <p>No se encuentra tu pregunta?</p>
                
                    <p class="field">
                        <a href="mailto:info@ucc.edu.ni" class="button is-small">
                            <span class="icon is-small">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            </span>
                
                            <span>Escribenos</span>
                        </a>
                
                        <a href="tel:50582407695" class="button is-small">
                            <span class="icon is-small">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </span>
                
                            <span>Llamanos</span>
                        </a>
                    </p>
                
                    <p>
                        <a href="/contact">Mas informacion de contacto</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
