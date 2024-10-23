<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="https://bullmarketing.com.co/wp-content/uploads/2022/04/cropped-favicon-bull-192x192.png"
        sizes="192x192" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}?v={{ time() }}">
    <title>Bull Marketing | #ExperienciaBull</title>
</head>

<body>
    <div class="main-form-container">
        <a href="https://bullmarketing.com.co/" target="_blank">
            <img class="bull-logo" src="{{ asset('assets/bull-logov2.png') }}" alt="Bull Marketing Logo">
            <img class="ctg-logo" src="{{ asset('assets/logo_ctg.png') }}" alt="Más Cartagena Logo">
        </a>
        <h1>¡Usa el #ExperienciaBull y acumula puntos para ganar!</h1>
        <p>Inscríbete aquí</p>

        <form action="{{ route('registro') }}" method="POST">
            @csrf
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" placeholder="Ingresa tu nombre" required>

            <label for="phone">Teléfono</label>
            <input type="tel" id="phone" name="phone" placeholder="Ingresa tu teléfono"
                pattern="[0-9]{10,}" required>

            <label for="company">Empresa</label>
            <input type="text" id="company" name="company" placeholder="Ingresa el nombre de tu empresa" required>

            <label for="position">Cargo</label>
            <input type="text" id="position" name="position" placeholder="Ingresa tu cargo" required>

            <label for="email">Correo</label>
            <input type="email" id="email" name="email" placeholder="Ingresa tu correo" required>
            @if ($errors->has('email'))
                <div class="error-message">{{ $errors->first('email') }}</div>
            @endif

            <button type="submit">Enviar</button>
        </form>
    </div>
</body>

</html>