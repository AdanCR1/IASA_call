<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Congreso 2025')</title>
    <link rel="stylesheet" href="{{ asset('css/convocatoria_iasa.css') }}">
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-900">
    <header class="bg-blue-800 text-white p-4">
        <div class="container mx-auto flex justify-between">
            <h1 class="font-bold text-lg">Congreso Internacional 2025</h1>
            <nav>
                <a href="#sobre" class="px-2">Sobre</a>
                <a href="#programa" class="px-2">Programa</a>
                <a href="#contacto" class="px-2">Contacto</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-gray-900 text-white p-6 text-center">
        <p>&copy; 2025 Congreso Internacional | Organizado por XYZ</p>
    </footer>

    @stack('scripts')
</body>
</html>
