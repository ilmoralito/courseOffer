@extends('layouts.hero')

@section('title', 'Oferta academica')

@section('hero')
    <h1 class="title">{{ $offer['name'] }}</h1>
    <h2 class="subtitle">Dirigo a profesionales de {{ implode( ', ', $offer['addressed_to']) }}</h2>
@endsection

@section('body')
    <div class="columns">
        <div class="column">
            <div class="content">
                <p>Sobre el curso</p>

                <p>{{ $offer['description'] }}</p>

                <p>Modalidad: Domincal</p>

                <p>Inversion: {{ $offer['price'] }}</p>

                <p>Fecha de inicio: {{ $offer['start_date'] }}</p>
            </div>
        </div>
    </div>
@endsection
