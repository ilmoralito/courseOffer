@extends('layouts.master')

@section('title', 'Tendencias en cursos')

@section('body')
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi libero illo odio quod saepe mollitia est rerum alias quisquam non minima, vitae aperiam dicta numquam aliquam itaque. Tenetur debitis, esse.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi libero illo odio quod saepe mollitia est rerum alias quisquam non minima, vitae aperiam dicta numquam aliquam itaque. Tenetur debitis, esse.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi libero illo odio quod saepe mollitia est rerum alias quisquam non minima, vitae aperiam dicta numquam aliquam itaque. Tenetur debitis, esse.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi libero illo odio quod saepe mollitia est rerum alias quisquam non minima, vitae aperiam dicta numquam aliquam itaque. Tenetur debitis, esse.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi libero illo odio quod saepe mollitia est rerum alias quisquam non minima, vitae aperiam dicta numquam aliquam itaque. Tenetur debitis, esse.

    <div>@foreach ($subjects as $subject)
            <p class="subtitle">{{ $subject['name'] }}</p>
        @endforeach</div>
@endsection
