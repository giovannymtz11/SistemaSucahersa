<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Baja;

class BajasController extends Controller
{
    public static function ctrMostrarBajas($item = null, $valor = null)
    {
        if ($item && $valor) {
            $respuesta = Baja::where($item, $valor)->get();
        } else {
            $respuesta = Baja::all();
        }

        return $respuesta;
    }

    public static function ctrRangoFechasBajas($fechaInicial = null, $fechaFinal = null)
    {
        if ($fechaInicial && $fechaFinal) {
            $respuesta = Baja::whereBetween('fecha', [$fechaInicial, $fechaFinal])->get();
        } else {
            $respuesta = Baja::all();
        }

        return $respuesta;
    }

    public function mostrarGraficoBajas(Request $request)
    {
        $fechaInicial = $request->input('fechaInicial');
        $fechaFinal = $request->input('fechaFinal');

        $respuesta = self::ctrRangoFechasBajas($fechaInicial, $fechaFinal);

        $arrayFechas = [];
        $sumaPagosMes = [];

        foreach ($respuesta as $baja) {
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

        return view('partials.graficoBajas', compact('data'));
    }
}
