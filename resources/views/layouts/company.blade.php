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

        <section class="hero is-medium" style="background-image: url('https://s3-us-west-2.amazonaws.com/uccleon.peide.website/photos/startup-photos-min.jpg'); background-size: cover;">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <h1 class="title" style="color: #FFF;">Cursos de formación para empresas</h1>

                    <p class="subtitle" style="color: #FFF;">
                        Lorem ipsum dolor sit amet
                    </p>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                @yield('companies')
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="columns">
                    <div class="column is-narrow">
                        @yield('subjects')
                    </div>

                    <div class="column">
                        {{-- ;) --}}
                        <p class="subtitle" style="color: #FFF;">.</p>

                        <div class="content">
                            <div class="box">
                                <p class="subtitle">¿Como resibir los cursos?</p>
                            
                                <p>La universidad cuenta con laboratorios climatizados y acondicionados para impartir los cursos</p>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A mollitia odio aspernatur quisquam similique magni rerum cum eveniet modi ducimus eius quam blanditiis asperiores, magnam itaque at architecto amet voluptate.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section" style="background-color: #3961C5;">
            <div class="container">
                <div class="heading">
                    <p class="title" style="color: #FFF;">¿No aparece el curso de tu interes?</p>
                    <p class="subtitle" style="color: #FFF;">Contactanos</p>
                </div>

                <br>
                <div class="content" style="color: #FFF;">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Necessitatibus, ut, obcaecati. Ullam et, temporibus suscipit voluptatibus,
                        iusto commodi eligendi non necessitatibus fugit obcaecati ad,
                        esse aliquid rerum delectus. Quam, nostrum.
                    </p>

                    <a href="/contact" class="button">Ir a contactos</a>
                </div>
            </div>
        </section>

        @include('partials.footer')

        <script src="/js/app.js"></script>
    </body>
</html>
