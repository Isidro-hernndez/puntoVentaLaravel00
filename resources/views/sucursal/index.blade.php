<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>sucursales</title>
		<link rel="stylesheet" href="/css/bootstrap.css">
	</head>
	<body>
		<div class="container-fluid">
			<a href="{{{ route('sucursales_create_path') }}}" class="btn btn-success">Nueva Sucursal</a>
			<div class="row">
				<div class="col-md-12">
					<table class="table">
						<thead>
							<tr>
								<th>
									Nombre
								</th>
								<th>
									Direcciòn
								</th>
								<th>
									Telefono
								</th>
								<th>
									Opcion
								</th>
							</tr>
						</thead>
						<tbody>
							@foreach($sucursales as $sucursal)
							<tr>
								<td>
									{{$sucursal->nombre}}
								</td>
								<td>
									{{$sucursal->direccion}}
								</td>
								<td>
									{{$sucursal->telefono}}
								</td>
								<td>
									<a href="{{ route('sucursales_edit_path', ['sucursal'=>$sucursal->idSucursal]) }}" class="btn btn-info">Editar</a>
									<form class="" action="{{ route('sucursales_delete_path', ['sucursal' => $sucursal->idSucursal]) }}" method="post">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}

										<div class="form-group">
											<button type="submit" class="btn btn-danger" name="button">Eliminar</button>
										</div>

									</form>

								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>
