@extends('layouts.master')

@section('title', 'Contacto')

@section('body')
    <div class="column">
        <p class="title">Programa de especializaciones</p>

        @foreach ($staff as $member => $value)
            <div class="field">
                <p>{{ $value['name'] }}</p>
                <p>{{ $value['position'] }}</p>
                <p>
                    <a href="tel:{{ $value['telephone'] }}">
                        {{ $value['telephone'] }}
                    </a>
                </p>
                <p>
                    <a href="tel:{{ $value['email'] }}">
                        {{ $value['email'] }}
                    </a>
                </p>
            </div>
        @endforeach
    </div>

    <div class="column is-6">
        <figure class="image">
            <img src="https://cdn.dribbble.com/users/7793/screenshots/2118024/campuscrop.png" alt="Campus Leon">
        </figure>

        <p>{{ $contact['name'] }}</p>
        <p>{{ $contact['address'] }}</p>
        <p>(505) <a href="tel:{{ $contact['telephone'] }}">{{ $contact['telephone'] }}</a> {{ $contact['extension'] }}</p>
        <p>
            <a href="mailto:{{ $contact['email'] }}">{{ $contact['email'] }}</a>
        </p>
    </div>
@endsection
