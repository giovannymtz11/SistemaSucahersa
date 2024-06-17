<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $usuarios = Usuario::when($search, function ($query, $search) {
            return $query->where('nombre', 'like', "%{$search}%")
                ->orWhere('usuario', 'like', "%{$search}%");
        })->get();

        return view('usuarios', compact('usuarios'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'usuario' => 'required|string|max:255|unique:usuarios',
            'password' => 'required|string|min:8|confirmed',
            'perfil' => 'required|string',
            'foto' => 'nullable|image|max:2048'

        ]);

        $usuario = new Usuario();
        $usuario->nombre = $validatedData['nombre'];
        $usuario->usuario = $validatedData['usuario'];
        $usuario->password = bcrypt($validatedData['password']);
        $usuario->perfil = $validatedData['perfil'];
        $usuario->estado = 1;
        $usuario->ultimo_login = '1970-01-01 00:00:00';

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('public/fotos');
            $usuario->foto = Storage::url($path);
        } else {
            $usuario->foto = 'public/default.svg'; // Foto por defecto
        }

        $usuario->save();

        return redirect()->back()->with('success', 'Usuario creado con éxito');
    }

    public function update(Request $request, $id)
    {
        $usuario = User::findOrFail($id);
        $usuario->nombre = $request->input('nombre');
        $usuario->usuario = $request->input('usuario');
        $usuario->perfil = $request->input('perfil');

        if ($request->filled('password')) {
            $usuario->password = bcrypt($request->input('password'));
        }

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('public/usuarios');
            $usuario->foto = $path;
        }

        $usuario->save();

        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado correctamente');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'Usuario eliminado con éxito');
    }

    public function updateEstado(Request $request, Usuario $usuario)
    {
        $usuario->estado = $request->estado;
        $usuario->save();

        return response()->json(['success' => true]);
    }
}
