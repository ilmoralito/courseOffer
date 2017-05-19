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

        <section class="hero is-medium" style="background-image: url('https://s3-us-west-2.amazonaws.com/uccleon.peide.website/photos/StockSnap_NYW89JV2DL-min.jpg'); background-size: cover;">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <h1 class="title" style="color: #FFF;">Los mejores cursos para instituciones y particulares</h1>
                    <h2 class="subtitle" style="color: #FFF;">Enseñanza cerca de ti</h2>

                    <a href="/offers" class="button is-danger">Visita cursos a aperturar</a>
                </div>
            </div>
        </section>

        <section class="section" style="background-color: #DCDDD9;">
            <div class="container">
                <div class="heading">
                    <h3 class="title">Cursos de formación para empresas</h3>
                    <h4 class="subtitle">¿Representas una empresa?</h4>
                </div>

                <br>
                <div class="content">
                    <p>
                        Nos enorgullece trabajar con instituciones que destacan en distintas área de la economía del país.
                        Entre ellas minería, telecomunicaciones, educación, etc.
                        Visita nuestra sección de instituciones.
                    </p>

                    <a href="/companies" class="button is-white">Saber mas</a>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="heading">
                    <p class="subtitle">Mirada general</p>
                </div>

                @yield('overview')
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="heading">
                    <p class="subtitle">Cursos</p>
                </div>

                <br>
                <div class="content">
                    @yield('subjects')
                </div>
            </div>
        </section>

        <section class="section" style="background-color: #173749;">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        @yield('courses')
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                @yield('body')
            </div>
        </section>

        @include('partials.footer')

        <script src="/js/app.js"></script>
    </body>
</html>