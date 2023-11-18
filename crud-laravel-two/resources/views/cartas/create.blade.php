@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Crear Carta</title>
</head>

<body class="bg-gray-100 overflow-x-hidden">
    <nav class="bg-gray-800 text-white p-4 text-center">
        <h2 class="text-2xl font-bold">Crud Laravel</h2>
    </nav>
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded shadow-md w-full sm:w-96 overflow-y-auto">
            <h2 class="text-2xl font-bold mb-4">Crear Carta</h2>

            @if ($errors->any())
            <div class="bg-red-200 p-3 mb-4 rounded">
                <ul class="list-disc list-inside text-sm text-red-700">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('cartas.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="nombrecarta" class="block text-sm font-semibold text-gray-700">Nombre de la Carta:</label>
                    <input type="text" name="nombrecarta" id="nombrecarta"
                        class="mt-1 p-2 border rounded w-full" value="{{ old('nombrecarta') }}" required>
                </div>
                <div class="mb-4">
                    <label for="descripcion" class="block text-sm font-semibold text-gray-700">Descripción:</label>
                    <textarea name="descripcion" id="descripcion"
                        class="mt-1 p-2 border rounded w-full resize-none" rows="3"
                        required>{{ old('descripcion') }}</textarea>
                </div>
                <div class="mb-4">
                    <label for="precio" class="block text-sm font-semibold text-gray-700">Precio:</label>
                    <input type="number" name="precio" id="precio" class="mt-1 p-2 border rounded w-full"
                        value="{{ old('precio') }}" step="0.01" required>
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="bg-gray-800 hover:bg-gray-800 text-white p-2 rounded focus:outline-none focus:shadow-outline-blue">
                        Crear Carta
                    </button>
                    <a href="{{ route('cartas.index') }}"
                        class="bg-gray-800 hover:bg-gray-800 text-white p-2 rounded focus:outline-none focus:shadow-outline-blue">Volver al índice</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
@endsection
