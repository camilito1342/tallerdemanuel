<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CuadraticaController extends Controller
{
    public function index()
    {
        return view('cuadratica'); // Vista para el formulario
    }

    public function resolverCuadratica(Request $request)
    {
        $request->validate([
            'a' => 'required|numeric',
            'b' => 'required|numeric',
            'c' => 'required|numeric',
        ]);

        $a = $request->input('a');
        $b = $request->input('b');
        $c = $request->input('c');

        $discriminante = ($b * $b) - (4 * $a * $c);

        if ($discriminante < 0) {
            return redirect()->back()->with('error', 'No hay soluciones reales.');
        }

        $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
        $x2 = (-$b - sqrt($discriminante)) / (2 * $a);

        return redirect()->back()->with('success', "Soluciones: x1 = $x1, x2 = $x2");
    }
}