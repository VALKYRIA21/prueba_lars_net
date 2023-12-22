@extends('layout')
@section('content')
    <div class="container">
        <br>
        <h1 class="text-center text-xl py-2">Crear reservación</h1>
        <h3 class="text-center text-xl py-0">Complete el formulario para crear la  reservación</h3>
        <center>
            @if(Session::has('reservacion_create'))
                <div class="col-lg-12 alert alert-success bg-green-500 text-white alert-dismissable text-center font-bold">
                    {{ Session::get('reservacion_create') }}
                </div>
            @endif
            @if(Session::has('error'))
                <div class="col-lg-12 alert alert-danger bg-red-500 text-white alert-dismissable text-center font-bold">
                    {{ Session::get('error') }}
                </div>
            @endif
        </center>
        <div class="container mx-auto mt-8 flex justify-center">
            <div style="text-center">
            </div>
            <form class="w-full max-w-md" action="{{ route('create_reservations') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                    <input type="text" name="name" id="name" class="border rounded w-full py-2 px-3">
                </div>
                <div class="mb-4">
                    <label for="documento" class="block text-gray-700 text-sm font-bold mb-2">Documento:</label>
                    <input type="text" name="documento" id="documento" class="border rounded w-full py-2 px-3">
                </div>
                <div class="mb-4">
                    <label for="date" class="block text-gray-700 text-sm font-bold mb-2">Fecha:</label>
                    <input type="date" name="date" id="date" class="border rounded w-full py-2 px-3">
                </div>

                <div class="mb-4">
                    <label for="cuarto" class="block text-gray-700 text-sm font-bold mb-2">Cuarto:</label>
                    <select name="cuarto" id="cuarto" class="border rounded w-full py-2 px-3">
                        @for ($i = 1; $i <= 10; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md">Crear Reservación</button>
                </div>
            </form>
        </div>
    </div>
@endsection
