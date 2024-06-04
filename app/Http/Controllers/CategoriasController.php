<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class CategoriasController extends Controller
{
    // Crear Categoría
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nuevaCategoria' => 'required|string|max:255|regex:/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $categoria = new Categoria();
        $categoria->nombre = $request->input('nuevaCategoria');
        $categoria->save();

        return redirect()->route('categorias.index')->with('success', 'La categoría ha sido guardada correctamente');
    }

    // Mostrar Categorías
    public function mostrarCategorias()
    {
        $categorias = Categoria::all();
        return view('inicio', compact('categorias'));
    }

    // Editar Categoría
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'editarCategoria' => 'required|string|max:255|regex:/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $categoria = Categoria::findOrFail($id);
        $categoria->nombre = $request->input('editarCategoria');
        $categoria->save();

        return redirect()->route('categorias.index')->with('success', 'La categoría ha sido cambiada correctamente');
    }

    // Borrar Categoría
    public function destroy($id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();

        return redirect()->route('categorias.index')->with('success', 'La categoría ha sido borrada correctamente');
    }
}
