@extends('layout')
@section('content')
    <div class="container">
        <br>
        <h1 class="text-center text-xl py-2">Crear reservación</h1>
        <h3 class="text-center text-xl py-0">Complete el formulario para crear la  reservación</h3>
        <div class="container mx-auto mt-8 flex justify-center">
            <form class="w-full max-w-md" action="{{ route('create_reservations') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                    <input type="text" name="name" id="name" class="border rounded w-full py-2 px-3">
                </div>
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Documento:</label>
                    <input type="text" name="name" id="name" class="border rounded w-full py-2 px-3">
                </div>
                <div class="mb-4">
                    <label for="date" class="block text-gray-700 text-sm font-bold mb-2">Fecha:</label>
                    <input type="date" name="date" id="date" class="border rounded w-full py-2 px-3">
                </div>

                <div class="mb-4">
                    <label for="details" class="block text-gray-700 text-sm font-bold mb-2">Detalles:</label>
                    <textarea name="details" id="details" class="border rounded w-full py-2 px-3"></textarea>
                </div>

                <div class="flex justify-end"> <!-- Agregada la clase flex justify-end para alinear a la derecha -->
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md">Crear Reservación</button>
                </div>
            </form>
        </div>
    </div>
@endsection
