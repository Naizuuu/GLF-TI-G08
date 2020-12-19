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

class HomeController extends Controller
{
    public function __invoke()
    {
        Log::channel('trabajointegral')->info('Mostrando pagina de inicio', [
            'description' => 'homepage funcionando',
        ]);
        return view('homepage');
    }
}
