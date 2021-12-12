<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('tittle') / blog</title>
    </head>

    <body>
        <header class="container">

        </header>

        <main>
            <div class="container">
	            @yield('content')
            </div>
        </main>

        <footer>

        </footer>
    </body>
</html>
