@extends('auth.base')

@section('content')
<div class="colx100"><!--CONTENIDO-->
	<div class="wrap">
   	  <h1>Área de clientes</h1>
		<div class="login">
      <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
       	  <div class="login_cont1">
			<h2>¿Has olvidado tu contraseña?</h2>
		  	<p>Por favor indicanos tu nombre de <span class="txt-azul">usuario</span>, es el email donde te llegan nuestras notificaciones y <span class="txt-azul">te enviaremos un email</span> indicandote como reestablecer tu contraseña.</p>
           </div>
            <div class="login_cont2">
              @if (session('status'))
       		     <h2>Email enviado con éxito</h2>
                 <div class="loginform">
				            <div class="loginform-xtras">
                  	<a class="loginform_btn" href="{{url('/auth/login')}}">Volver al login</a>
                  </div>
              </div>
        	    @else
       		  <h2>He olvidado mi contraseña</h2>
              <div class="loginform">
					<div class="loginform_item">
                        <div class="loginform_campoform">
                            <input @if ($errors->get('email')) class="loginform-error" @endif type="text" placeholder="usuario (email de acceso)" name="email"  value="{{ old('email') }}"  />
                        </div>
                        @if ($errors->get('email'))
                        <div class="loginform_aviso">
														{{$errors->first('email')}}
                        </div>
												@endif
                    </div>

					<div class="loginform-separador">&nbsp;</div>
                  <div class="loginform-xtras">
                    <button class="loginform_btn">Reestablecer contraseña</button>
                  </div>
              </div>
              @endif
        	</div>
        </form>
        </div>
	</div>
</div><!--FIN CONTENIDO-->
@endsection
