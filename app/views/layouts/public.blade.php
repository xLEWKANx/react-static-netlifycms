<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            @section('title')@show
        </title>
        <link rel="stylesheet" href="/dist/public.css" type="text/css" media="screen" charset="utf-8">
    </head>
    <body>
        <section class="header-block">
            @include('includes.header')
        </section>

        @yield('content')

        <footer class="footer">
            <div class="container">
                @include('includes.footer')
            </div>
        </footer>

        <script src="/dist/public.js"></script>
    </body>
</html>