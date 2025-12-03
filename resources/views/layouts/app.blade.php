<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Productos</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>CRUD de Productos</h1>
        <nav>
            <a href="{{ route('items.index') }}">Inicio</a>
            <a href="{{ route('items.create') }}">Agregar Producto</a>
        </nav>
    </header>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
