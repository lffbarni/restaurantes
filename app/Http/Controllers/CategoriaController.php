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

//-------------------------//

    public function show($id)
    {
        $categoria = Categoria::find($id);
        return view('categorias.show',array('categoria' => $categoria));
    }

//-------------------------//

    public function edit($id)
    {
        $categoria = Categoria::find($id);
        return view('categorias.edit',array('categoria' => $categoria));
    }
    public function update(Request $request, $id)
    {
    $this->validate($request,[
        'nome' => 'required' 
    ]);
        $categoria = Categoria::find($id);
        $categoria->nome = $request->input('nome');
        if($categoria->save()) {
            return redirect()->back();
        }
    }

//-------------------------//

    public function create()
    {
        return view('categorias.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'nome' => 'required' 
        ]);
        $categoria = new Categoria();
        $categoria->nome = $request->input('nome');
        if($categoria->save()) {
            return redirect('categorias');
        }
    }

//-------------------------//
    
    public function destroy($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();
        return redirect(url('categorias/'));
    }
}
