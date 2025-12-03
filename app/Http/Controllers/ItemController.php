<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    // Mostrar todos los items
    public function index()
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    // Mostrar formulario para crear un item
    public function create()
    {
        return view('items.create');
    }

    // Guardar nuevo item
    public function store(Request $request)
    {
        // Validación
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'nullable|numeric'
        ]);

        // Crear item
        Item::create($request->all());

        // Redirigir con mensaje de éxito
        return redirect()->route('items.index')->with('success', 'Producto creado correctamente.');
    }

    // Mostrar un item individual (opcional)
    public function show(Item $item)
    {
        return view('items.show', compact('item'));
    }

    // Mostrar formulario para editar item
    public function edit(Item $item)
    {
        return view('items.edit', compact('item'));
    }

    // Actualizar item
    public function update(Request $request, Item $item)
    {
        // Validación
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'nullable|numeric'
        ]);

        // Actualizar
        $item->update($request->all());

        // Redirigir con mensaje
        return redirect()->route('items.index')->with('success', 'Producto actualizado correctamente.');
    }

    // Eliminar item
    public function destroy(Item $item)
    {
        $item->delete();

        // Redirigir con mensaje
        return redirect()->route('items.index')->with('success', 'Producto eliminado correctamente.');
    }
}
