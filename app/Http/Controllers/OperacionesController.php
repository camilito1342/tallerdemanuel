<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionesController extends Controller
{
    public function suma($num1,$num2){

        $resultado=$num1+$num2;

        return view('suma',compact('resultado'));

    }

    public function resta($num1,$num2){

        $resultado=$num1-$num2;

        return view('suma',compact('resultado'));
    }

    public function division($num1,$num2){

        $resultado=$num1/$num2;

        return view('suma',compact('resultado'));
    }

    public function multiplicacion($num1,$num2){

        $resultado=$num1*$num2;

        return view('suma',compact('resultado'));
    }
}
