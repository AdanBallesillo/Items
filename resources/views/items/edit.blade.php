@extends('layouts.app')

@section('content')
<h2>Editar Producto</h2>

@if ($errors->any())
    <div class="error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('items.update', $item) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nombre:</label>
    <input type="text" name="nombre" value="{{ old('nombre', $item->nombre) }}">

    <label>Descripción:</label>
    <textarea name="descripcion">{{ old('descripcion', $item->descripcion) }}</textarea>

    <label>Precio:</label>
    <input type="text" name="precio" value="{{ old('precio', $item->precio) }}">

    <div class="button-center">
        <input type="submit" value="Actualizar" class="btn btn-primary">
    </div>
</form>
@endsection
