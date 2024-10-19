<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConversorController extends Controller
{
    public function conversion()
    {
        return view('repaso1');
    }

    public function convertir(Request $request)
    {
        $request->validate([
            'valor' => 'required|numeric|min:0',
            'conversion' => 'required|string'
        ]);

        $valor = $request->valor;
        $tipo = $request->conversion;
        $resultado = '';

        switch ($tipo) {
            case 'MB_to_GB':
                $conversion = $valor / 1024; //conversion
                $resultado = "{$valor} MB equivale a " . number_format($conversion, 2) . " GB"; // numberformat cambia el resultado y el 2 son los decimales que muestra
                break;

            case 'GB_to_MB':
                $conversion = $valor * 1024;
                $resultado = "{$valor} GB equivale a " . number_format($conversion, 2) . " MB";
                break;

            case 'GB_to_TB':
                $conversion = $valor / 1024;
                $resultado = "{$valor} GB equivale a " . number_format($conversion, 2) . " TB";
                break;

            case 'TB_to_GB':
                $conversion = $valor * 1024;
                $resultado = "{$valor} TB equivale a " . number_format($conversion, 2) . " GB";
                break;

            default:
                $resultado = "Tipo de conversión no válido";
        }

        return response()->json([ //lo muestra en json para no tener que recargar la pagina
            'resultado' => $resultado
        ]);
    }
}