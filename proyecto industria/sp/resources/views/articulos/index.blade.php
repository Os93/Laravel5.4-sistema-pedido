@extends('layouts.admin')
@section('contenido')
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de artículos
          <a href="articulos/create">
            <button class="btn btn-success" type="button" name="button">
              Nuevo
            </button>
          </a>
        </h3>
        @include('articulos.search')
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
          <table class="table table-striped table bordered table-condensed
          table-hover">
            <thead>
              <th>Referencia</th>
              <th>Descripcion</th>
              <th>Precio</th>
            </thead>
            @foreach ($articulos as $articulo)
              <tr>
                <td>{{$articulo->referencia}}</td>
                <td>{{$articulo->descripcion}}</td>
                <td>{{$articulo->precio}}</td>
                <td>
                  <a href="{{URL::action('ArticuloController@edit', $articulo->referencia)}}"><button class="btn btn-info">Editar</button></a>
                  <a href="" data-target="#modal-delete-{{$articulo->referencia}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                </td>
              </tr>
              @include('articulos.modal')
            @endforeach
          </table>
        </div>
        {{$articulos->render()}}
      </div>
    </div>

@endsection
