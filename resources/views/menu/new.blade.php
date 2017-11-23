@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">

  @include('layouts._errors')

        <form role="form" action="{{route('menus_store_path')}}" method="POST">
           {{ csrf_field() }}
          <div class="form-group">

            <label for="precio">
              Precio
            </label>
            <input class="form-control" id="precio" type="text" name="nombre"/>
          </div>

          <form role="form">
    				<div class="form-group">

    					<label for="tipo">
    						Tipo
    					</label>
    					<input class="form-control" id="direccion" type="text" name="direccion" />
    				</div>


            <form role="form">

				<button type="submit" class="btn btn-success">
					Crear
				</button>
			</form>
		</div>
	</div>
</div>
@endsection
