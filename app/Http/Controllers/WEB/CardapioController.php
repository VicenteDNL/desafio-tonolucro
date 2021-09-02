<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Models\Restaurante;
use Illuminate\Http\Request;

class CardapioController extends Controller
{

    public function index(Restaurante $restaurante)
    {

        $cardapios = $restaurante->cardapios()->with('produtos')->get();
        return view('cardapios',compact('cardapios','restaurante'));
    }



    public function show( $id)
    {
        //
    }



}
