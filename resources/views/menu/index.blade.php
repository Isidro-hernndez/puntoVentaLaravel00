@extends('layouts.layout')

@section('content')

		<div class="container-fluid">
			<a href="{{{ route('menus_create_path') }}}" class="btn btn-success">Nueva Sucursal</a>
			<div class="row">
				<div class="col-md-12">
					<table class="table">
						<thead>
							<tr>
								<th>
									precio
								</th>
								<th>
									tipo
								</th>
							</tr>
						</thead>
						<tbody>
							@foreach($menus as $menu)
							<tr>
								<td>
									{{$menu->precio}}
								</td>
								<td>
									{{$menu->tipo}}
								</td>
								<td>
									<a href="{{ route('menus_edit_path', ['menu'=>$menu->idMenu]) }}" class="btn btn-info">Editar</a>
									<form class="" action="{{ route('menus_delete_path', ['menu' => $menu->idMenu]) }}" method="post">
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
