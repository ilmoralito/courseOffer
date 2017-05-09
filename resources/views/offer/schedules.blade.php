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
                <colgroup>
                    <col span="1" style="width: 1%;">
                    <col span="1" style="width: 35%;">
                    <col span="1" style="width: 64%;">
                </colgroup>

                <thead>
                    <tr>
                        <th>#</th>
                        <th>Horario de entrada</th>
                        <th>Horario de salida</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($offer['schedules'] as $schedule)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $schedule['start_time'] }}</td>
                            <td>{{ $schedule['ending_time'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
