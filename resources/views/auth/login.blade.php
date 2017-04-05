@extends('auth.base')

@section('content')
	<div class="colx100"><!--CONTENIDO-->
		<div class="wrap">
	   	  <h1>Área de administración</h1>

				@if (count($errors) > 0)
					<div class="alert alert-danger">
							<span class="alert-icon" style="min-height: 65px;"><i class="fa  fa-exclamation-circle"></i></span>
							<div class="notification-info">
								<ul>
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
					</div>
				@endif



	           <div class="login">

							 <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
		 						<input type="hidden" name="_token" value="{{ csrf_token() }}">

	       	  <div class="login_cont1">
	       		<h2>Conéctate y gestiona tu publicidad</h2>
	              <p>Estás a punto de acceder un sistema de acceso restringido. <span class="txt-azul">Si no estás registrado</span> en nuestro sistema<span class="txt-azul"> abandona este área</span>, toda acción fraudulenta será investigada.</p>

	            </div>
	            <div class="login_cont2">
	              <h2>Conéctate</h2>
	              <div class="loginform">
	                <div class="loginform_item">
	                    <div class="loginform_campoform">
													<input type="email" class="form-control" name="email" value=""  placeholder="Usuario (email de acceso)" />
	                    </div>

	                </div>

	                <div class="loginform_item">
	                        <div class="loginform_campoform">
	                            <input type="password" class="form-control" name="password" placeholder="Contraseña" />
	                        </div>
	                        <div class="loginform_aviso">
	                            <p>&nbsp;</p>
	                        </div>
	                        <p>&nbsp;</p>
	                        <p><a href="{{ url('/password/email') }}">He olvidado mi contraseña</a></p>
	                  </div>

	                  <div class="loginform-separador">&nbsp;</div>

	                  <div class="loginform-xtras">
											<button type="submit" class="loginform_btn">Conectarse</button>
	                  </div>
	              </div>
	              <div style="clear:both"></div>
	        	</div>
	            </form>
	            </div>
		</div>
	</div>
@endsection
