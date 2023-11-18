@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Editar Carta</title>
</head>

<body class="bg-gray-100">
    <nav class="bg-gray-800 text-white p-4">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold text-center">Crud Laravel</h2>
        </div>
    </nav>

    <div class="container mx-auto my-8">
        <h2 class="text-2xl font-bold mb-4">Editar Carta</h2>

        @if ($errors->any())
        <div class="bg-red-200 p-3 mb-4 rounded">
            <ul class="list-disc list-inside text-sm text-red-700">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('cartas.update', $carta->id) }}" method="POST" class="bg-white p-8 rounded shadow-md max-w-md mx-auto">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nombrecarta" class="block text-sm font-semibold text-gray-600">Nombre de la Carta:</label>
                <input type="text" name="nombrecarta" id="nombrecarta" class="mt-1 p-2 border rounded w-full" value="{{ old('nombrecarta', $carta->nombrecarta) }}" required>
            </div>

            <div class="mb-4">
                <label for="descripcion" class="block text-sm font-semibold text-gray-600">Descripción:</label>
                <textarea name="descripcion" id="descripcion" class="mt-1 p-2 border rounded w-full" rows="3" required>{{ old('descripcion', $carta->descripcion) }}</textarea>
            </div>

            <div class="mb-4">
                <label for="precio" class="block text-sm font-semibold text-gray-600">Precio:</label>
                <input type="number" name="precio" id="precio" class="mt-1 p-2 border rounded w-full" value="{{ old('precio', $carta->precio) }}" step="0.01" required>
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-gray-800 hover:bg-gray-700 text-white p-2 rounded focus:outline-none focus:shadow-outline-blue">
                    Actualizar Carta
                </button>
                
                <a href="{{ route('cartas.index') }}"
                    class="bg-gray-800 hover:bg-gray-700 text-white p-2 rounded focus:outline-none focus:shadow-outline-blue">
                    Volver al índice
                </a>
            </div>
        </form>
    </div>
</body>

</html>
@endsection