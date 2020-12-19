<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

/* 
Log::emergency($message);
Log::alert($message);
Log::critical($message);
Log::error($message);
Log::warning($message);
Log::notice($message);
Log::info($message);
Log::debug($message);
*/

class IntegralController extends Controller
{
    function index()
    {
        Log::channel('trabajointegral')->info('Mostrando pagina de hoja de ruta', [
            'description' => 'integral.home funcionando',
        ]);
        return view('integral.home');
    }
/*     function automata_afd()
    {
        return view('automatas.proceso.automata_afd');
    }

    function automata_ap()
    {
        return view('automatas.proceso.automata_ap');
    } */
}