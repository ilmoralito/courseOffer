@extends('layouts.hero')

@section('title', 'Oferta academica')

@section('hero')
    <h1 class="title">{{ $offer['name'] }}</h1>
    <h2 class="subtitle">Dirigo a profesionales de {{ implode( ', ', $offer['addressed_to']) }}</h2>
@endsection

@section('body')
    <div class="columns">
        <div class="column">
            <table class="table">
                <thead>
                    <tr>
                        <th>Modulos</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($offer['modules'] as $module)
                        <tr>
                            <td>{{ $module }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
