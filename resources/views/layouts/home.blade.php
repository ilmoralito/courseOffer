<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <title>UCC @yield('title')</title>

        <link rel="stylesheet" href="/css/app.css">
    </head>

    <body>
        @include('partials.nav')

        <section class="hero is-primary is-bold is-medium">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <h1 class="title">Los mejores cursos para instituciones y particulares</h1>
                    <h2 class="subtitle">Enseñanza cerca de ti</h2>

                    <a href="/offers" class="button is-white is-outlined">Visita los cursos proximos</a>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="columns">
                    @yield('body')
                </div>
            </div>
        </section>

        @include('partials.footer')

        <script src="/js/app.js"></script>
    </body>
</html>