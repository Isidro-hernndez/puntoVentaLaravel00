<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/bootstrap.css">
  </head>
  <body>
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">

      @include('layouts._errors')

        <form role="form" action="{{ route('sucursales_update_path', ['sucursal' => $sucursal->idSucursal]) }}"  method="POST">
           {{ csrf_field() }}
           {{ method_field('PUT') }}
          <div class="form-group">

            <label for="nombre">
              Nombre
            </label>
            <input class="form-control" id="nombre" type="text" name="nombre" value="{{$sucursal->nombre}}"/>
          </div>

          <form role="form">
    				<div class="form-group">

    					<label for="direccion">
    						Direcciòn
    					</label>
    					<input class="form-control" id="direccion" type="text" name="direccion" value="{{ $sucursal->direccion }}" />
    				</div>


            <form role="form">
      				<div class="form-group">

      					<label for="telefono">
      						Telefono
      					</label>
      					<input class="form-control" id="telefono" type="tel" name="telefono" value="{{ $sucursal->telefono }}"/>
      				</div>

				<button type="submit" class="btn btn-success">
					Editar
				</button>
			</form>
		</div>
	</div>
</div>
  </body>
</html>
