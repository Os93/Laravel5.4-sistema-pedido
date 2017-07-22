<?php

namespace sistema_pedidos;

use Illuminate\Database\Eloquent\Model;

class Tbl_articulo extends Model
{
    //se hace referencia a los campos de la tabla
    protected $table='tbl_articulo';
    protected $primaryKey='referencia';

    public $timestamps=false;
   
    //determinamos que campos resiviran un valor
    protected $fillable =
    [
        'descripcion',
        'precio'
    ];
    //estos se especifican cuando no se quieren que se asignen en el modelo
    protected $guarded=[];
}
