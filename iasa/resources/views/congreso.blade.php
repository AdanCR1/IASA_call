<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congreso Internacional 2025</title>
    <link rel="stylesheet" href="{{ asset('css/congreso_iasa.css') }}">
</head>
<body>

    {{-- HERO --}}
    <section class="hero">
        <div class="overlay">
            <h1>Congreso Internacional 2025</h1>
            <p>Del 10 al 12 de octubre · La Paz, Bolivia</p>
            <a href="#inscripcion" class="btn">Inscribirse</a>
        </div>
    </section>

    {{-- SOBRE --}}
    <section id="sobre" class="section">
        <h2>Sobre el Congreso</h2>
        <p>
            Este congreso reúne a investigadores, ingenieros y profesionales para discutir los últimos avances en
            ciencia y tecnología. Será un espacio de intercambio académico y de colaboración internacional.
        </p>
    </section>

    {{-- PROGRAMA --}}
    <section id="programa" class="section bg-light">
        <h2>Programa</h2>
        <ul>
            <li>10 de octubre – Inauguración y conferencias magistrales</li>
            <li>11 de octubre – Mesas temáticas y talleres</li>
            <li>12 de octubre – Clausura y networking</li>
        </ul>
    </section>

    {{-- INSCRIPCIÓN --}}
    <section id="inscripcion" class="section">
        <h2>Inscripción</h2>
        <p>
            Regístrate completando el siguiente formulario:
            <a href="https://forms.gle/tuejemplo" target="_blank">Formulario de inscripción</a>
        </p>
    </section>

    {{-- CONTACTO --}}
    <section id="contacto" class="section bg-light">
        <h2>Contacto</h2>
        <p>Email: contacto@congreso2025.org</p>
        <p>WhatsApp: +591 70000000</p>
    </section>

    <footer>
        <p>&copy; 2025 Congreso Internacional | Organizado por XYZ</p>
    </footer>

    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
