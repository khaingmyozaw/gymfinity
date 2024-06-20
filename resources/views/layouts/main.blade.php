<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gymfinity</title>
    @vite('resources/css/app.css')

    @yield('style')
</head>
<body>
    <nav>
        @yield('nav')
    </nav>
    <main>
        @yield('content')
    </main>
    <footer>
        @yield('footer')
    </footer>

    @yield('script')
</body>
</html>