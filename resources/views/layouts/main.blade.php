<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
<link rel='stylesheet' href="/css/main.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        
    </head>
    <body class="antialiased">

            <header>
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="collapse navbar-collpase" id="navbar">
                        <ul class="navbar-nav">
                            <li class="navbar">
                                <a href="/" class="navbar">Inicio</a>
                            </li>
                            <li class="navbar">
                                <a href="myrron" class="navbar">Myrron Run</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <main>
                @yield('contend')
            </main>

            <footer>
                Vini Dias &copy; 2025
            </footer>
    </body>
</html>
