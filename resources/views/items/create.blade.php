@extends('layouts.app')

@section('content')
<h2>Agregar Nuevo Producto</h2>

@if ($errors->any())
    <div class="error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('items.store') }}" method="POST">
    @csrf
    <label>Nombre:</label>
    <input type="text" name="nombre" value="{{ old('nombre') }}">

    <label>Descripción:</label>
    <textarea name="descripcion">{{ old('descripcion') }}</textarea>

    <label>Precio:</label>
    <input type="text" name="precio" value="{{ old('precio') }}">

    <div class="button-center">
        <input type="submit" value="Guardar" class="btn btn-primary">
    </div>
</form>
@endsection
