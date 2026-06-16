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


    <header class='flex-none grid grid-cols-2 display-box text-gray-600 border border-lg bg-blue-950'>
        @yield('header')
        <div>
        <nav class="flex justify-between items-center p-4 bg-gray-800 text-white">
            <ul class="flex items-center gap-6">
                <li> Home </li>
                <li> Meeting Room </li>
                <li> Booking </li>
            </ul>
            <span class='item-right'> Log out </span>
        </nav>
    </div>
    </header>

    <main>
        @yield('main_content')
    </main>

    <footer>
        @yield('footer')
    </footer>

</body>
</html>