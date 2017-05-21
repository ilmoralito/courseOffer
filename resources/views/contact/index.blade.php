@extends('layouts.master')

@section('title', 'Contactanos')

@section('body')
    <h1 class="title">Programas de especializacion</h1>

    @foreach ($headquarters as $hq)
        <div class="field" style="margin-top: 25px;">
            <div class="field">
                <p class="subtitle">{{ $hq['headquarter'] }}</p>
                <p>{{ $hq['address'] }}</p>

                @foreach ($hq['telephones'] as $telephone)
                    <p>
                        {{ $telephone['provider'] }} <a href="tel:{{ str_replace(' ', '', $telephone['number']) }}">{{ $telephone['number'] }}</a>

                        @if (isset($telephone['extension']))
                            - {{ $telephone['extension'] }}
                        @endif
                    </p>
                @endforeach
            </div>

            @foreach ($hq['staff'] as $member)
                <div>
                    <p>{{ $member['name'] }}</p>
                    <p>{{ $member['position'] }}</p>
                    <p>
                        <a href="mailto:{{ $member['email'] }}">
                            {{ $member['email'] }}
                        </a>
                    </p>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection
