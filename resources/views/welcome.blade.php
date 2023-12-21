<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Prueba, Lars.net</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        {{-- Tailwindcss --}}
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    </head>
    <body class="antialiased">
        <div>
            <h1 class="text-center text-xl py-20">Reservartions Hotel, Beta</h1>
            <div class="container">
                <center>
                    <div class="row">
                        <div class="col-md-6 py-5">
                            {{-- Formulario para crear la reservacion --}}
                            <a href="{{ route('reservation') }}" class="d-block bg-blue-500 text-white px-8 py-4 rounded-lg">Crear reservación</a>
                        </div>
                        <div class="col-md-6 py-5">
                            {{-- Formulario para confirmar la reservacion --}}
                            <a href="#" class="d-block bg-blue-500 text-white px-8 py-4 rounded-lg">Verificar reservación</a>
                        </div>
                    </div>
                </center>
            </div>
        </div>
    </body>
</html>
