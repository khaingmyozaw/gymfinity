<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gymfinity</title>
    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
        ])
        {{-- <style>
            main {
                background-image: url('../../public/images/hero.jpeg');
            }
        </style> --}}
    @yield('style')
</head>
<body>
    <main class="font-sans">
        @yield('content')
    </main>
    <footer>
        {{-- @yield('footer') --}}
    </footer>

    {{-- @yield('script') --}}

    {{-- Jquery  --}}
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
</body>
</html>