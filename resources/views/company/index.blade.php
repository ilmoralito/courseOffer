@extends('layouts.company')

@section('title', 'Cursos para empresas e instituciones')

@section('companies')
    <p class="subtitle">Empresas con las que hemos colaborado</p>

    <table class="table">
        <thead>
            <tr>
                <th>Nombre de la empresa</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($companies as $company)
                <tr>
                    <td>
                        <a href="{{ $company['site'] }}">{{ $company['name'] }}</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('subjects')
    <p class="subtitle">Oferta de cursos</p>

    @include('partials.subjects', [ 'subjects' => $subjects ])
@endsection
