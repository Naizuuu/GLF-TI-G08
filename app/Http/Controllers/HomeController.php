<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function __invoke()
    {
        Log::channel('trabajointegral')->info('Mostrando pagina de inicio', [
            'description' => 'Entrando a homepage...',
        ]);
        return view('homepage');
    }
}
