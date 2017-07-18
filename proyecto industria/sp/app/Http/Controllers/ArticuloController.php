<?php

namespace sistema_pedidos\Http\Controllers;

use Illuminate\Http\Request;
//hacer referencia al modelo



class ArticuloController extends Controller
{
    //constructor
    public function __construct(){}
    
    
    
    public function index(){
    	return view ("articulos.index");
    }

    public function create(){
    	return view ("articulos.create");
    }
    
    
    
}
