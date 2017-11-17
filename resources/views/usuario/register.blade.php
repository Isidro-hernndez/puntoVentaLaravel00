@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('users_store_path') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('apellidoPaterno') ? ' has-error' : '' }}">
                            <label for="apellidoPaterno" class="col-md-4 control-label">Apellido Paterno</label>

                            <div class="col-md-6">
                                <input id="apellidoPaterno" type="text" class="form-control" name="apellidoPaterno" value="{{ old('apellidoPaterno') }}" required autofocus>

                                @if ($errors->has('apellidoPaterno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apellidoPaterno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('apellidoMaterno') ? ' has-error' : '' }}">
                            <label for="apellidoMaterno" class="col-md-4 control-label">Apellido Materno</label>

                            <div class="col-md-6">
                                <input id="apellidoMaterno" type="text" class="form-control" name="apellidoMaterno" value="{{ old('apellidoMaterno') }}" required autofocus>

                                @if ($errors->has('apellidoMaterno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apellidoMaterno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                          <label for="tipo" class="col-md-4 control-label">Sucursal</label>
                          <div class="col-md-6">
                            <select class="form-control" id="sucursal" name="nombreSucursal">
                              @foreach($sucursales as $sucursal)
                                <option value="{{$sucursal->idSucursal}}">{{$sucursal->nombre}}</option>
                              @endforeach
                            </select>
                          </div>

                      </div>


                        <div class="form-group">
                          <label for="tipo" class="col-md-4 control-label">Tipo</label>
                          <div class="col-md-6">
                            <select class="form-control" id="tipo" name="tipo">
                                <option value="Cajero">Cajero</option>
                                <option value="Administrador">Administrador</option>
                            </select>
                          </div>

                      </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
