@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Artículo</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

      {!!Form::model($articulo,['method'=>'PATCH','route'=>['articulos.update',$articulo->referencia]])!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="nombre">Descripción</label>
            	<input type="text" name="descripcion" class="form-control" value="{{$articulo->descripcion}}" placeholder="Nombre...">
            </div>
            <div class="form-group">
            	<label for="descripcion">Precio</label>
            	<input type="text" name="precio" class="form-control" value="{{$articulo->precio}}" placeholder="Descripción...">
            </div>
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
			{!!Form::close()!!}

		</div>
	</div>
@endsection
