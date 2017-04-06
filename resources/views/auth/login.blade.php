@extends('auth.base')

@section('content')
<div class="colx100"><!--CONTENIDO-->
	<div class="wrap">
   	  <h1>Área de clientes</h1>

			<div class="login">
				<form method="POST" action="{{ url('/auth/login') }}">
				 <input type="hidden" name="_token" value="{{ csrf_token() }}">
       	  <div class="login_cont1">
       		<h2>Conéctate y gestiona tu publicidad</h2>
              <p>Estás a punto de acceder un sistema de acceso restringido. <a href="#">Si no estás registrado</a> en nuestro sistema<a href="#"> abandona este área</a>, toda acción fraudulenta será investigada.</p>
            </div>
            <div class="login_cont2">
       		  <h2>Conéctate</h2>
              <div class="loginform">
					<div class="loginform_item">
                        <div class="loginform_campoform">
                            <input @if ($errors->get('email')) class="loginform-error" @endif name="email" type="text" placeholder="usuario (email de acceso)"  value="{{ old('email') }}"  />
                        </div>
												@if ($errors->get('email'))
                        <div class="loginform_aviso">
														{{$errors->first('email')}}
                        </div>
												@endif
                    </div>

                <div class="loginform_item">
                        <div class="loginform_campoform">
                            <input @if ($errors->get('password')) class="loginform-error" @endif type="password" placeholder="contraseña" name="password" />
                        </div>
												@if ($errors->get('password'))
                        <div class="loginform_aviso">
														{{$errors->first('password')}}
                        </div>
												@endif
                  </div>
                  <p><a href="{{ url('/password/email') }}">He olvidado mi contraseña</a></p>
                  <div class="loginform-separador">&nbsp;</div>
                  <div class="loginform-xtras">
                    <button type="submit" class="loginform_btn">Conectarse</button>
                  </div>
              </div>
        	</div>
				</form>
        </div>
	</div>
</div><!--FIN CONTENIDO-->
@endsection
