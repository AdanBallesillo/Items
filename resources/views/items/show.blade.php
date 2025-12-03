@extends('layouts.app')

@section('content')
<h2>Detalle del Producto</h2>

<p><strong>ID:</strong> {{ $item->id }}</p>
<p><strong>Nombre:</strong> {{ $item->nombre }}</p>
<p><strong>Descripción:</strong> {{ $item->descripcion }}</p>
<p><strong>Precio:</strong> {{ $item->precio }}</p>

<div class="button-center">
    <a href="{{ route('items.index') }}" class="btn btn-primary">Volver a la lista</a>
    <a href="{{ route('items.edit', $item) }}" class="btn btn-edit">Editar</a>
</div>
@endsection
