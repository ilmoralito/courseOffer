@extends('layouts.hero')

@section('title', 'Oferta academica')

@section('hero')
    <h1 class="title">{{ $offer['name'] }}</h1>
    <h2 class="subtitle">Dirigo a profesionales de {{ implode( ', ', $offer['addressed_to']) }}</h2>
@endsection

@section('body')
    <div class="columns">
        <div class="column is-three-quarters">
            <div class="content">
                <p>Sobre el curso</p>

                <p>{{ $offer['description'] }}</p>

                <p>Modulos</p>

                <ul>
                    @foreach ($offer['modules'] as $module)
                        <li>{{ $module }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="column">
            <div class="box">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Modalidad</td>
                            <td>Dominical</td>
                        </tr>

                        <tr>
                            <td>Inicio</td>
                            <td>{{ $offer['start_date'] }}</td>
                        </tr>

                        <tr>
                            <td>Duracion</td>
                            <td>{{ count($offer['schedules']) }} encuentros</td>
                        </tr>

                        <tr>
                            <td>Horario</td>
                            <td>8:00 - 5:00</td>
                        </tr>

                        <tr>
                            <td>Inversion</td>
                            <td>USD ${{ $offer['price'] }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
