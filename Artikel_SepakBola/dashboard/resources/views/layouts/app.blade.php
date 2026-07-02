<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'EPL Website')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-900">

    {{-- NAVBAR --}}
    <nav class="flex items-center px-8 py-4 border-b gap-10">
        <a href="{{ route('home') }}" class="font-bold text-xl">EPL</a>
        <div class="flex gap-6 text-sm">
            <a href="{{ route('articles.index') }}">Artikel</a>
            <a href="#">Liga Lainnya</a>
            <a href="#">Riwayat Juara</a>
        </div>
        <div class="ml-auto flex items-center gap-6">
            <input type="text" placeholder="Search for products..." class="border rounded-full px-4 py-2 text-sm w-64">

            @auth
                <a href="{{ route('dashboard') }}" class="text-sm">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm">Login</a>
                <a href="{{ route('register') }}" class="text-sm">Register</a>
            @endauth
        </div>
    </nav>

    {{-- KONTEN HALAMAN --}}
    <main>
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="text-center text-sm text-gray-500 py-8 border-t mt-16">
        &copy; {{ date('Y') }} EPL Website
    </footer>

</body>
</html>