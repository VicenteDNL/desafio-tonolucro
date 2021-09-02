<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Models\Restaurante;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $restaurante = Restaurante::all();
        return view('index',['restaurantes'=>$restaurante]);
    }
}
