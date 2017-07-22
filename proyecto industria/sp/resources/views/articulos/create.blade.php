@extends('layouts.admin')
@section('contenido')


<p>Nuevo Articulo</p>

<div style= "width: 500px"align="right" >
    <form action="ArticuloController.php" method="POST">
         <input type="text" class="form-control" placeholder="Descripcion">
      
         <input type="number" class="form-control" placeholder="Precio">
        <br><br>
        <button type="submit" class="btn btn-primary  btn-flat">Guardar</button>
    </div>    
        
</form>
    
@endsection