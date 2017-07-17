<?php

namespace sistema_pedidos\Http\Controllers;

use Illuminate\Http\Request;
//hacer referencia al modelo
use sistema_pedido\Tbl_articulo;
use Illuminate\Support\Facades\Redirect;
use sistema_pedido\Http\Requests\ArticuloFormRequest;
use DB;

class ArticuloController extends Controller
{
    //constructor
    public function __construct(){}
    
    public function retornar(){
        return "prueba de ruta";
    }
}
