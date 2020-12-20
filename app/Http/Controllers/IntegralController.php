<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

class IntegralController extends Controller
{
    function index()
    {
        Log::channel('trabajointegral')->info('Mostrando pagina de hoja de ruta', [
            'description' => 'Entrando a integral.home...',
        ]);
        return view('integral.home');
    }
    function proceso()
    {
        Log::channel('trabajointegral')->info('Mostrando pagina de proceso', [
            'description' => 'Entrando a integral.proceso...',
        ]);
        return view('integral.proceso');
    }
}