@extends('layouts.company')

@section('title', 'Cursos para empresas e instituciones')

@section('companies')
    <div class="has-text-centered">
        @foreach ($companies as $company)
            <a href="{{ $company['site'] }}" style="margin: 10px;">{{ $company['name'] }}</a>
        @endforeach
    </div>
@endsection

@section('subjects')
    <p class="subtitle">Oferta de cursos</p>

    @include('partials.subjects', [ 'subjects' => $subjects ])
@endsection
