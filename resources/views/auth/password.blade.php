@extends('auth.base')

@section('content')

	<div class="colx100"><!--CONTENIDO-->
		<div class="wrap">
	   	  <h1>Área de administración</h1>

				@if (session('status'))
					<div class="alert alert-success">
						{{ session('status') }}
					</div>
				@endif

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

					<div class="login_cont1">
					<h2>¿Has olvidado tu contraseña?</h2>
							<p>Por favor indicanos tu nombre de <span class="txt-azul">usuario</span>, es el email donde te llegan nuestras notificaciones y <span class="txt-azul">te enviaremos un email</span> indicandote como reestablecer tu contraseña.</p>
					</div>
							<form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="login_cont2">
							<h2>He olvidado mi contraseña</h2>
							<div class="loginform">
								<div class="loginform_item">
										<div class="loginform_campoform">
												<input type="text" placeholder="Usuario (email de acceso)" name="email" value="{{ old('email') }}" />
										</div>
								</div>
									<div class="loginform-separador">&nbsp;</div>

									<div class="loginform-xtras">
										<button class="loginform_btn btn-restablecer">Reestablecer contraseña</button>
									</div>
							</div>
							<div style="clear:both"></div>
					</div>
				</form>
				</div>
		</div>
	</div><!--FIN CONTENIDO-->
@endsection
