@extends('auth.base')

@section('content')

<div class="colx100"><!--CONTENIDO-->
	<div class="wrap">
   	  <h1>Área de clientes</h1>
		<div class="login">
      <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
       <input type="hidden" name="_token" value="{{ csrf_token() }}">
       <input type="hidden" name="token" value="{{ $token }}">
       	  <div class="login_cont1">
       		<h2>Restablecer contraseña</h2>
			  <p>Por favor, <span class="txt-azul">escribe tu nueva contraseña</span> para poder acceder a tu area privada.</p>
            </div>
            <div class="login_cont2">

       		  <h2>Nueva contraseña</h2>
              <div class="loginform">

                <div class="loginform_item">
                   <div class="loginform_campoform">
                       <input @if ($errors->get('email')) class="loginform-error" @endif name="email" type="text" placeholder="Usuario (email de acceso)"  value="{{ old('email') }}"  />
                   </div>
                   @if ($errors->get('email'))
                   <div class="loginform_aviso">
                       {{$errors->first('email')}}
                   </div>
                   @endif
                </div>

                <div class="loginform_item">
                        <div class="loginform_campoform">
                            <input @if ($errors->get('password')) class="loginform-error" @endif type="password" placeholder="Contraseña" name="password" />
                        </div>
                       @if ($errors->get('password'))
                        <div class="loginform_aviso">
                           {{$errors->first('password')}}
                        </div>
                       @endif
                  </div>

                  <div class="loginform_item">
                          <div class="loginform_campoform">
                              <input @if ($errors->get('password_confirmation')) class="loginform-error" @endif type="password" placeholder="Repita contraseña" name="password_confirmation" />
                          </div>
                          @if ($errors->get('password_confirmation'))
                          <div class="loginform_aviso">
                              {{$errors->first('password_confirmation')}}
                          </div>
                          @endif
                    </div>

				                <div class="loginform-separador">&nbsp;</div>

                  <div class="loginform-xtras">
                    <button type="submit" class="loginform_btn">Reestablecer contraseña</button>
                  </div>
              </div>
              
        	</div>
</form>
        </div>
	</div>
</div><!--FIN CONTENIDO-->
@endsection
