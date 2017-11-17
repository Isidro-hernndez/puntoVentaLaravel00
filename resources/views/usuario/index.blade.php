@extends('layouts.layout')

@section('content')
		<div class="container-fluid">
			<a href="{{{ route('users_create_path') }}}" class="btn btn-success">Nueva Sucursal</a>
			<div class="row">
				<div class="col-md-12">
					<table class="table">
						<thead>
							<tr>
								<th>
									Nombre
								</th>
								<th>
									Apellido Paterno
								</th>
								<th>
									Apellido Materno
								</th>
								<th>
									Tipo
								</th>
								<th>
									Email
								</th>
								<th>
									Opciones
								</th>
							</tr>
						</thead>
						<tbody>
							@foreach($users as $user)
							<tr>
								<td>
									{{$user->nombre}}
								</td>
								<td>
									{{$user->apellidoPaterno}}
								</td>
								<td>
									{{$user->apellidoMaterno}}
								</td>
								<td>
									{{$user->tipo}}
								</td>
								<td>
									{{$user->email}}
								</td>
								<td>
									<a href="{{ route('users_edit_path', ['user'=>$user->id]) }}" class="btn btn-info">Editar</a>
									<form class="" action="{{ route('users_delete_path', ['user' => $user->id]) }}" method="post">
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
@endsection
