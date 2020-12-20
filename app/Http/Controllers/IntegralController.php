<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

class IntegralController extends Controller
{
    function index()
    {
        Log::channel('integralGeneral')->info('Mostrando pagina de hoja de ruta', [
            'description' => 'Entrando a view::integral.home...',
        ]);
        return view('integral.home');
    }
    function proceso()
    {
        Log::channel('integralGeneral')->info('Mostrando pagina de proceso', [
            'description' => 'Entrando a view::integral.proceso...',
        ]);
        return view('integral.proceso');
    }
}