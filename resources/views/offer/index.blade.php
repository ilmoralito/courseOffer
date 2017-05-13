@extends('layouts.master')

@section('title', 'Oferta academica')

@section('body')
    <div class="column">
        <div class="columns is-multiline">
            @if ($headquarter)
                @foreach ($headquarter['offers'] as $offer)
                    <div class="column is-one-third">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image">
                                    <img src="{{ $offer['image'] }}" alt="{{ $offer['name'] }}">
                                </figure>
                            </div>

                            <div class="card-content">
                                <div class="content">
                                    {{ $offer['name'] }}

                                    <p>
                                        <small>Inicio de clases: {{ $offer['start_date'] }}</small>
                                    </p>
                                </div>
                            </div>

                            <footer class="card-footer">
                                <a href="/offers/{{ $headquarter['headquarter'] }}/{{ $offer['slug'] }}" class="card-footer-item">Saber mas</a>
                            </footer>
                        </div>
                    </div>
                @endforeach
            @else
                <p>Sin datos que mostrar</p>
            @endif
        </div>
    </div>
@endsection
