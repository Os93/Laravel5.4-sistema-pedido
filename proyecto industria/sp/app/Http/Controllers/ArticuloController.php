<?php

namespace sistema_pedidos\Http\Controllers;

use Illuminate\Http\Request;
//hacer referencia al modelo

//Hacemos referencia al modelo
use sistema_pedidos\Tbl_articulo;

//Hacemos referencia a redirect para redireccionar
use Illuminate\Support\Facades\Redirect;

//Hacemos referencia a request de validacion
use sistema_pedidos\Http\Requests\ArticuloFormRequest;

//Usar la clase DB de Laravel
use DB;


class ArticuloController extends Controller
{
    //constructor
    public function __construct(){}



    public function index(Request $request){
      if($request){
        $query = trim($request->get('searchText'));
        $articulos = DB::table('tbl_articulo')->where('descripcion','LIKE','%'.
          $query.'%')
          ->orderBy('referencia','asc')
          ->paginate(10);
        return view('articulos.index', ["articulos"=>$articulos, "searchText"=>
          $query]);
      }//return view ("articulos.index");
    }

    public function create(){
    	return view ("articulos.create");
    }

    public function show($id){
      return view("articulos.show",["articulo"=>Tbl_articulo::findOrFail($id)]);
    }

    public function edit($id){
        return view("articulos.edit",["articulo"=>Tbl_articulo::findOrFail($id)]);
    }

    public function update(ArticuloFormRequest $request,$id)
    {
        $articulo=Tbl_articulo::findOrFail($id);
        $articulo->descripcion=$request->get('descripcion');
        $articulo->precio=$request->get('precio');
        $articulo->update();
        return Redirect::to('/articulos');
    }

    public function destroy($id)
    {
        $articulo=Tbl_articulo::findOrFail($id);
        $articulo->delete();
        return Redirect::to('articulos');
    }
  }
