<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carta</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        .container {
            background-color: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            text-align: left;
        }

        h1, h2, p {
            margin: 0;
        }

        h1 {
            color: #2d3748;
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        h2 {
            color: #2d3748;
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        p {
            color: #4a5568;
            font-size: 1.2em;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pedido</h1>
        <div class="container">
            <h2>Nombre del Pedido</h2>
            <p>{{ $carta->nombrecarta }}</p>
            <h2>Descripción del pedido</h2>
            <p>{{ $carta->descripcion }}</p>
            <h2>Precio del pedido</h2>
            <p>{{ $carta->precio }}</p>
        </div>
    </div>
</body>
</html>
