<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Baja;
use App\Models\Sucursal;

class ProductosController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        $categorias = Categoria::all();
        $bajas = Baja::all();
        $totalBajas = Baja::sum('total');
        $sucursales = Sucursal::all();
        return view('inicio', compact('productos','categorias','bajas', 'totalBajas', 'sucursales'));
    }
}
