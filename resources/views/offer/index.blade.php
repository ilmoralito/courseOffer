@extends('layouts.master')

@section('title', 'Oferta academica')

@section('body')
    <div class="column">
        @foreach ($offers as $offer)
            <div class="columns">
                <div class="column is-4">
                    <figure class="image">
                        <img src="{{ $offer['image'] }}" alt="{{ $offer['name'] }}">
                    </figure>
                </div>

                <div class="column">
                    <p class="title">{{ $offer['name'] }}</p>
                    <p class="subtitle">Dirigido a profesionales en las areas de {{ implode(', ' , $offer['addressed_to']) }}</p>

                    <p>Inversion: {{ $offer['price'] }}</p>
                    <p>Fecha de inicio: {{ $offer['start_date'] }}</p>

                    <br>
                    <div class="field">
                        <p class="control">
                            <a href="/offers/{{ $offer['slug'] }}" class="button">Saber mas</a>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
