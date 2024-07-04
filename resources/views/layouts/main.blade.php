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
    @yield('style')
</head>
<body>
    {{-- Navbar --}}
    @include('pages.navbar')
    <main class="font-sans">
        @yield('content')
    </main>
    <footer class="border-t border-opacity-70 border-slate-300">
        <p class="py-8 text-center bg-pre-dark-green">
            &copy;Copyright 2024, by zeembi.
        </p>
    </footer>

    {{-- @yield('script') --}}

    {{-- Jquery  --}}
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
</body>
</html>