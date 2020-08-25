<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentarios;
class ComentarioController extends Controller
{
    public function show(){
    	$comentarios= Comentarios::all();
    	return response()->json(['comentario'=>$comentarios]);
    }
}
