<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'EPL Website')</title>

    {{-- Tailwind CSS lewat CDN dulu, biar simpel, nanti bisa upgrade ke Vite --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-900">

    {{-- NAVBAR --}}
    <nav class="flex items-center px-8 py-4 border-b gap-10">
    <div class="font-bold text-xl">EPL</div>
    <div class="flex gap-6 text-sm">
        <a href="#">Liga Lainnya</a>
        <a href="#">Riwayat Juara</a>
    </div>
    <div class="ml-auto">
        <input type="text" placeholder="Search for products..." class="border rounded-full px-4 py-2 text-sm w-64">
        </div>
    </nav>

    {{-- KONTEN HALAMAN --}}
    <main>
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="text-center text-sm text-gray-500 py-8 border-t mt-16">
        &copy; {{ date('Y') }} Riyyadu
    </footer>

</body>
</html>