<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

class IntegralController extends Controller
{
    function index()
    {
        Log::channel('trabajointegral')->info('Mostrando pagina de hoja de ruta', [
            'description' => 'integral.home funcionando',
        ]);
        return view('integral.home');
    }
}