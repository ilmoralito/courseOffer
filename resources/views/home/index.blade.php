@extends('layouts.home')

@section('title', 'cursos')

@section('overview')
    <br>
    <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nihil, amet adipisci quae soluta corporis sequi at, tempore quasi nobis quo sed, molestias laboriosam! Recusandae dolorum quam in repellat nihil!</p>
    </div>
@endsection

@section('subjects')
    @include('partials.subjects', [ 'subjects' => $helper->subjects() ])
@endsection

@section('courses')
    <p class="subtitle" style="color: #FFF;">Proximos cursos</p>

    @foreach ($helper->headquarters() as $headquarter)
        <p class="subtitle field">
            <a href="/offers/{{ $headquarter['headquarter'] }}">
                {{ $headquarter['headquarter'] }}
            </a>
        </p>

        <div class="columns is-multiline">
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
                                <p>{{ $offer['name'] }}</p>

                                <p>
                                    <small>{{ $offer['start_date'] }}</small>
                                </p>
                            </div>
                        </div>

                        <footer class="card-footer">
                            <div class="card-footer-item">
                                <a href="/offers/{{ $headquarter['headquarter'] }}/{{ $offer['slug'] }}">Saber mas</a>
                            </div>
                        </footer>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection

@section('body')
    <div class="notification">
        <div class="columns">
            <div class="column">
                <p style="margin-top: 8px;">
                    Suscribete a nuestra hoja informativa y mantente al tanto de nuevos cursos, promociones y actividades
                </p>
            </div>

            <div class="column is-narrow">
                <a href="/subscribe" class="button is-info is-fullwidth">Suscribete</a>
            </div>
        </div>
    </div>
@endsection
