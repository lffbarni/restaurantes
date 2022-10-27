<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index(){

        $categorias = Categoria::all();
        return view('categorias.index', array('categorias' => $categorias));
    }

    public function show($id)
    {
        $categoria = Categoria::find($id);
        return view('categorias.show',array('categoria' => $categoria));
    }
}
