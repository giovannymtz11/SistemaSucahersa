<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Baja;
use App\Models\Sucursal;

class ProductosController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        $totalCategorias = $categorias->count();

        // Obtener la sumatoria de las bajas en términos de dinero
        $totalBajas = Baja::sum('total');

        // Obtener datos para el gráfico de bajas
        $bajas = BajasController::ctrRangoFechasBajas();
        $arrayFechas = [];
        $sumaPagosMes = [];

        foreach ($bajas as $baja) {
            $fecha = substr($baja->fecha, 0, 7);
            if (!isset($sumaPagosMes[$fecha])) {
                $sumaPagosMes[$fecha] = 0;
            }
            $sumaPagosMes[$fecha] += $baja->total;
        }

        $noRepetirFechas = array_keys($sumaPagosMes);
        $data = [];

        foreach ($noRepetirFechas as $fecha) {
            $data[] = [
                'fecha' => $fecha,
                'bajas' => $sumaPagosMes[$fecha]
            ];
        }

        $sumaProductos = Producto::orderBy('bajas', 'desc')->take(10)->get();
        $totalBajasProductos = Producto::sum('bajas');
        $colores = ["#ff6384", "#36a2eb", "#cc65fe", "#ffce56", "#ff9f40", "#4bc0c0", "#9966ff", "#c9cbcf", "#ff0000", "#00ff00"];

        $recientes = Producto::orderBy('fecha', 'desc')-> take(10)->get();

        $usuario  = Auth::user();
        $productos = Producto::all();
        $categorias = Categoria::all();
        $bajas = Baja::all();
        $totalBajas = Baja::sum('total');
        $sucursales = Sucursal::all();
        return view('inicio', compact('usuario', 'productos', 'sumaProductos','categorias','bajas', 'totalBajas', 'totalBajasProductos', 'sucursales', 'totalCategorias', 'data', 'colores', 'recientes'));
    }
}
