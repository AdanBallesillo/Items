@extends('layouts.app')

@section('content')
<h2>Lista de Productos</h2>

@if(session('success'))
    <p style="color:green;">{{ session('success') }}</p>
@endif

<table class="tabla">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @forelse($items as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->nombre }}</td>
            <td>{{ $item->descripcion }}</td>
            <td>${{ $item->precio }}</td>

            <td>
                <a href="{{ route('items.edit', $item) }}" class="btn btn-edit">Editar</a>

                <form action="{{ route('items.destroy', $item) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Eliminar este producto?')">
                        Eliminar
                    </button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" style="text-align:center;">No hay Productos aún.</td>
        </tr>
        @endforelse
    </tbody>
</table>


<div class="mobile-cards">
    @forelse($items as $item)
    <div class="card">
        <h3>{{ $item->nombre }}</h3>

        <p><strong>ID:</strong> {{ $item->id }}</p>
        <p><strong>Descripción:</strong> {{ $item->descripcion }}</p>
        <p><strong>Precio:</strong> ${{ $item->precio }}</p>

        <div class="acciones">
            <a href="{{ route('items.edit', $item) }}" class="btn btn-edit">Editar</a>

            <form action="{{ route('items.destroy', $item) }}" method="POST" style="flex:1;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">
                    Eliminar
                </button>
            </form>
        </div>
    </div>
    @empty
        <p style="text-align:center;">No hay Productos aún.</p>
    @endforelse
</div>

@endsection
