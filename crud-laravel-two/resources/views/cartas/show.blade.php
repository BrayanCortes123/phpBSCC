@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Detalles de Carta</title>
</head>

<body class="bg-gray-100">
    <nav class="bg-gray-800 text-white p-4">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold text-center">Mi Aplicación</h2>
        </div>
    </nav>

    <div class="container mx-auto my-8">
        <h2 class="text-3xl font-bold mb-8 text-center">Detalles de Carta</h2>

        <div class="bg-white p-6 rounded-md shadow-md mb-8">
            <div class="mb-4">
                <strong class="text-gray-700">Nombre de la Carta:</strong> {{ $carta->nombrecarta }}
            </div>
            <div class="mb-4">
                <strong class="text-gray-700">Descripción:</strong> {{ $carta->descripcion }}
            </div>
            <div class="mb-4">
                <strong class="text-gray-700">Precio:</strong> ${{ $carta->precio }}
            </div>
        </div>

        <div class="flex justify-between">
            <a href="{{ route('cartas.index') }}"
                class="bg-gray-800 hover:bg-gray-800 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue">
                Volver al Listado
            </a>
            <a href="{{ route('cartas.index') }}"
                class="bg-gray-800 hover:bg-gray-800 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue">
                Exportar PDF
            </a>
        </div>
    </div>
</body>
</html>
@endsection