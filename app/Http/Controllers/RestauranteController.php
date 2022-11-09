<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurante;
use App\Models\Categoria;

class RestauranteController extends Controller
{
    public function index(){
        $restaurantes = Restaurante::all();
        return view('restaurantes.index', array('restaurantes' => $restaurantes));
    }

//-------------------------//

    public function show($id)
    {
        $restaurante = Restaurante::find($id);
        return view('restaurantes.show',array('restaurante' => $restaurante));
    }

//-------------------------//

    public function edit($id)
    {
        $restaurante = Restaurante::find($id);
        $categorias = Categoria::all();
        return view('restaurantes.edit',array('restaurante' => $restaurante, 'categorias' => $categorias));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nome' => 'required',
            'categoria_id' => 'required',
            'imagem' => 'required'
        ]);
        $restaurante = Restaurante::find($id);
        $restaurante->nome = $request->input('nome');
        $restaurante->categoria_id = $request->input('categoria_id');
        $restaurante->imagem = $request->file('imagem')->getClientOriginalName();
        if($restaurante->save()) {
            if($request->hasFile('imagem')){
                $nomearquivo = $request->file('imagem')->getClientOriginalName();
                $request->file('imagem')->move(public_path('.\imagens'),$nomearquivo);
            }
            return redirect()->back();
        }
    }

//-------------------------//

    public function create()
    {
        $categorias = Categoria::all();
        return view('restaurantes.create', ['categorias' => $categorias]);
    }
    public function store(Request $request)
    {
        $restaurante = new Restaurante();
        $restaurante->nome = $request->input('nome');
        $restaurante->categoria_id = $request->input('categoria_id');
        $restaurante->imagem = $request->file('imagem')->getClientOriginalName();

        if($restaurante->save()) {
            if($request->hasFile('imagem')){
                $nomearquivo = $request->file('imagem')->getClientOriginalName();
                $request->file('imagem')->move(public_path('.\imagens'),$nomearquivo);
            }
            return redirect('restaurantes');
        }
    }

//-------------------------//

    public function destroy($id)
    {
        $restaurante = Restaurante::find($id);
        $restaurante->delete();
        return redirect(url('restaurantes/'));
    }
}
