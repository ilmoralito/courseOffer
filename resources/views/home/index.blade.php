@extends('layouts.home')

@section('title', 'cursos')

@section('body')
    <div class="column">
        <div class="content">
            <p>Mirada general</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nihil, amet adipisci quae soluta corporis sequi at, tempore quasi nobis quo sed, molestias laboriosam! Recusandae dolorum quam in repellat nihil!</p>

            <table class="table is-bordered">
                <colgroup>
                    <col span="1" style="width: 25%;">
                    <col span="1" style="width: 75%;">
                </colgroup>

                <caption>Listado de cursos</caption>

                <thead>
                    <tr>
                        <th>Tema</th>
                        <th>Cursos</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($helper->subjects() as $subject)
                        <tr>
                            <td rowspan="{{ count($subject['courses']) + 1 }}">
                                {{ $subject['name'] }}
                            </td>
                        </tr>

                        @foreach ($subject['courses'] as $course)
                            <tr>
                                <td>
                                    <a href="">{{ $course }}</a>
                                </td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>

            <p>Proximos cursos</p>

            @foreach ($helper->headquarters() as $headquarter)
                <p>
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

            <div class="notification">
                <div class="columns">
                    <div class="column">
                        <p style="margin-top: 8px;">
                            Suscribete a nuestra hoja informativa y mantente al tanto de nuevos cursos, promociones y actividades
                        </p>
                    </div>

                    <div class="column is-narrow">
                        <a href="/subscribe" class="button is-primary is-outlined has-text">Suscribete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
