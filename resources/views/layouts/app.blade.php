<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agromind</title>
    @yield('head')
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <a href="{{ route('profile.view') }}">{{ Auth::user()->name }}</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>