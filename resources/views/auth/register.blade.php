@extends('layouts.app')

@section('Contenido')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro<br/>
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
                         <div class="form-group{{ $errors->has('protecciondatos') ? ' has-error' : '' }}">
                            <label for="protecciondatos" class="col-md-4 control-label">Acepto los terminos </label>

                            <div class="col-md-1">
                                <input id="protecciondatos" type="checkbox" class="form-control" name="protecciondatos" value="1" required autofocus>
                                @if ($errors->has('protecciondatos'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('protecciondatos') }}</strong>
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
<div id="myModal2" class="modal fade" role="dialog">
                        <div class="modal-dialog">                                      
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="alert alert-danger" style="font-size:large;font-weight:bold;color:#FD0101" align="center"><i class="fa fa-warning"></i> ATENCION</h4>
                                </div>
                                <div style="text-align: center; font-size: 10pt; margin: 16px;"><span style="color: #2e77bc;"><i class="fa fa-info-circle"></i></span> Para vigorizar el servicio, el programa de Administración de Empresas extensión Facatativá brindara la más completa protección a todos los datos personales que se van a suministrar en la plataforma como lo rige la ley 1581 de 2012 <a target="_blank" href="http://www.sisben.gov.co/Documents/Informaci%C3%B3n/Leyes/LEY%20TRATAMIENTO%20DE%20DATOS%20-%20LEY%201581%20DE%202012.pdf"> Leer mas. >></a></div>
                                <div style="color: #acacac; font-size: 9pt; text-align: center; padding: 0px; margin-bottom: 6px;">TRATAMINETO Y FINALIDADES</div>
                                <div style="color: #acacac; font-size: 9pt; text-align: center; padding: 0px; margin-bottom: 6px;"></div>
                                <div class="well">
                                <ul class="list-unstyled" style="line-height: 2;text-align:justify">
                                  <li><span class="text-success"><i class="fa fa-check-square"></i></span><span style="font-size: 11pt; text-align: left;"> El tratamiento de los datos lo realizará el programa Administración de Empresas extensión Facatativá y tendrá como finalidad la recolección, almacenamiento, procesamiento y transmitir o ceder (empresas) información, con un alto grado de rigurosidad en niveles de seguridad y confidencialidad.  </span></li>
                                   <li><span class="text-success"><i class="fa fa-check-square"></i></span><span style="font-size: 11pt; text-align: left;"> Como titular de la información usted tiene derecho a validar, actualizar y acceder a sus datos.</span></li>
                                 <li><span class="text-success"><i class="fa fa-check-square"></i></span><span style="font-size: 11pt; text-align: left;"> Recuerde que no será registrado si no acepta estos términos en el siguiente formulario.</span></li>
                                
                              </ul>


                             </div>
                            </div>
                        </div>
                    </div>

@endsection
