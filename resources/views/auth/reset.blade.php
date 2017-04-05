@extends('auth.base')

@section('content')
	<div class="colx100"><!--CONTENIDO-->
		<div class="wrap">
	   	  <h1>Área de administración</h1>
				@if (count($errors) > 0)
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif


	       <div class="login">
					 <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
	 					<input type="hidden" name="_token" value="{{ csrf_token() }}">
	 					<input type="hidden" name="token" value="{{ $token }}">
	          <div class="login_cont1">
	       		<h2>Acceder al área de administración</h2>
	              <p>Estás a punto de acceder un sistema de acceso restringido. <span class="txt-azul">Si no estás registrado</span> en nuestro sistema<span class="txt-azul"> abandona este área</span>, toda acción fraudulenta será investigada.</p>

	            </div>
	            <div class="login_cont2">
	              <h2></h2>
	              <div class="loginform">
									<div class="loginform_item">
	                    <div class="loginform_campoform">
	                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Usuario (email de acceso)">
	                    </div>
	                </div>




	                <div class="loginform_item">
	                    <div class="loginform_campoform">
	                        <input  type="password" placeholder="Contraseña" name="password" autofocus value=""  />
	                    </div>

	                </div>

	                <div class="loginform_item">
	                        <div class="loginform_campoform">
	                            <input type="password" placeholder="Repetir contraseña" name="password_confirmation"  />
	                        </div>
	                        <div class="loginform_aviso">
	                            <p>&nbsp;</p>
	                        </div>
	                        <p>&nbsp;</p>
	                  </div>

	                  <div class="loginform-separador">&nbsp;</div>

	                  <div class="loginform-xtras">
	                  	<button class="loginform_btn" >Cambiar contraseña</button>
	                  </div>
	              </div>
	              <div style="clear:both"></div>
	        	</div>
					</form>
	            </div>
		</div>
	</div><!--FIN CONTENIDO-->
@endsection
