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

        @include('partials.headquarters-nav')

        <section class="section">
            <div class="container">
                @yield('body')
            </div>
        </section>

        @include('partials.footer')

        <script src="/js/app.js"></script>
    </body>
</html>
