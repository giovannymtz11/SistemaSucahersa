<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;

class SesionController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $usuario = $request->input('usuario');
            $contrasena = $request->input('contrasena');

            $usuario = DB::table('usuarios')
                ->where('usuario', $usuario)
                ->first();

            if ($usuario) {
                // Verificar si la contraseña proporcionada coincide con la almacenada en la base de datos
                if (Hash::check($contrasena, $usuario->password)) {
                    session(['user_id' => $usuario->id, 'nombre' => $usuario->nombre]);
                        return redirect()->route('inicio');
                } else {
                    return redirect()->back()->withInput()->with('error', 'Usuario o contraseña incorrectos.');
                }
            } else {
                return redirect()->back()->withInput()->with('error', 'Usuario o contraseña incorrectos.');
            }
        }
        return view('Session/login');
    }

    public function signin(Request $request)
    {
        return view('Session/signin');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'usuario' => 'required|string|max:255|unique:usuarios',
            'password' => 'required|string|min:8|confirmed', 
        ]);        

        $user = new Usuario([
            'nombre' => $request->nombre,
            'usuario' => $request->usuario,
            'password' => Hash::make($request->password),
        ]);

        $user->save();
        
        return redirect()->route('login')->with('success', '¡Registro exitoso! Por favor, inicia sesión.');
    }

    public function forgotPassword(Request $request)
    {
        return view('Session/forgotPass');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'usuario' => 'required',
            'password' => 'required|string|min:5|confirmed',
        ]);

        $usuario = Usuario::where('usuario', $request->usuario)->first();

        if ($usuario) {
            $usuario->password = Hash::make($request->password);
            $usuario->save();

            return redirect()->route('login')->with('success', 'Contraseña actualizada correctamente.');
        } else {
            return redirect()->route('login')->with('error', 'No se encontró al usuario.');
        }
    }
}
