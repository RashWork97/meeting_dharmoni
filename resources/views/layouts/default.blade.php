<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D'harmoni App</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>

    <header>
        @yield('header')
        @auth
        <nav class='bg-amber-950 grid grid-cols-2 flex-none'>
            <ul class='text-amber-50 '>
                <li><a href="/main"> Welcome Home, {{auth()->user()->name}} </a></li>
                <li><a href="/meetingRoom"> Meeting Room </a></li>
                <li><a href="/application"> Booking </a></li>
                <form action="{{ route('logout') }}" method='POST'>
                     @csrf
                    <button type="submit" class="logout-btn">Logout</button>
                </form>
            </ul>
        </nav>
        @endauth
    </header>

    <main>
        @yield('main_content')
    </main>

    <footer>
        @yield('footer')
    </footer>

</body>
</html>