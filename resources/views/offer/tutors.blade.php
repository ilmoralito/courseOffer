@extends('layouts.hero')

@section('title', 'Oferta academica')

@section('body')
    <div class="columns">
        <div class="column">
            <table class="table">
                <thead>
                    <tr>
                        <th>Instructores</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($offer['tutors'] as $tutor)
                        <tr>
                            <td>{{ $tutor['name'] }}, {{ $tutor['title'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
