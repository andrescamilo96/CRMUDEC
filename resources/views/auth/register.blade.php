@extends('layouts.app')

@section('Contenido')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register<br/>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group" align="center">
                        <h2>Seleccione Tipo de Usuario</h2>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                            &nbsp;&nbsp;&nbsp;<label class="radio-inline">
                            <input type="radio" class="role_id" name="role_id" id="3" value="3"> Graduado </label>
                            &nbsp;&nbsp;&nbsp;
                            <label class="radio-inline">
                            <input type="radio" class="role_id" name="role_id" id="2" value="2"> Empresa Externa </label>
                            @if ($errors->has('role_id'))
                                <span class="help-block">
                                    <strong>Seleccione su rol</strong>
                                </span>
                            @endif
                        
                    </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('cedulausuario') ? ' has-error' : '' }}">
                            <label for="cedulausuario" class="col-md-4 control-label">N. Identificación</label>

                            <div class="col-md-6">
                                <input id="cedulausuario" type="text" class="form-control" name="cedulausuario" value="{{ old('cedulausuario') }}" required autofocus>

                                @if ($errors->has('cedulausuario'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cedulausuario') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                 <!-- <input id="role_id" type="hidden" class="form-control" name="role_id" value="3" required> -->

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

                        <div class="form-group{{ $errors->has('aceptaleydatos') ? ' has-error' : '' }}">                                   
                            <div class="form-group" align="center">
                        
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                                &nbsp;&nbsp;&nbsp;<strong><label >
                                <input id="aceptaleydatos" type="checkbox" class="form-control" name="aceptaleydatos" value="1" >Acepto las disposiciones de manejo de datos acorde a la ley 1581 de protección de datos personales</label></strong>
                                @if ($errors->has('aceptaleydatos'))
                                    <span class="help-block">
                                        <strong>Para registrarse exitosamente debe aceptar el tratamiento de datos acorde a ley 1581<br/> para protección de datos personales</strong>
                                    </span>
                                @endif
                        
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrarse
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
