<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
    <link href="{{ asset('/admin/bs3/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin/css/bootstrap-reset.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('/admin/css/style.css') }}" rel="stylesheet">


    <!--[if lt IE 9]>
    <script src="{{ asset('/admin/js/ie8-responsive-file-warning.js') }}"></script><![endif]-->

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <link href="{{ asset('/admin/css/login.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/admin/css/tooltipster.css') }}" rel="stylesheet" type="text/css"  />

</head>

<body>

<div class="colx100_cabecera"><!--CABECERA-->
	<div class="cabecera">
     	<div class="cabecera_item1">
   	    	<a href="#"><img src="{{url('/admin/images/logo.png')}}" alt="Inicio" /></a>
        </div>
  </div>
</div><!--FIN CABECERA-->

@yield('content')

<div class="colx100"><!--PIE-->
    <div class="pie">
        <div class="pie_item1">
          <a class="btn-modal-info" href="#modalAviso">Aviso legal</a> | <a class="btn-modal-info" href="#modalDatos">Protección de datos</a> | <a class="btn-modal-info" href="#modalContacto">Ponte en contacto con nosotros</a>

      </div>
        <div class="pie_item2">
        © 2017 BalneariaIS - Todos los derechos reservados
      </div>
    </div>
</div><!--FIN PIE-->


<!-- inicio lightbox -->
<div id="modalAviso" style="display: none; position: fixed; opacity: 1; z-index: 11000; left: 50%; margin-left: -330px; top: 200px;">
  <div id="signup-header">
          <h2>Aviso legal</h2>
          <a href="#" class="modal_close"></a>
        </div>
        <div class="contenedor">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum libero purus, convallis nec vestibulum eget, luctus vitae purus. Vestibulum non mauris et sem vulputate pellentesque ac a turpis. Ut vel lacus vitae justo vestibulum lobortis. Nunc ipsum ipsum, laoreet id dictum nec, fermentum vel purus. Maecenas nisl felis, faucibus non rutrum eu, sollicitudin sed ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent dignissim lacinia tempus. Nulla facilisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Nulla accumsan pellentesque velit, a malesuada diam tristique a. Fusce eleifend magna erat, et imperdiet orci. Quisque sapien mauris, malesuada eu tristique pulvinar, placerat id ligula. Vivamus vitae viverra nulla. Donec eget turpis vel erat malesuada sodales.</p>
        </div>
    </div>

<div id="modalDatos" style="display: none; position: fixed; opacity: 1; z-index: 11000; left: 50%; margin-left: -330px; top: 200px;">
  <div id="signup-header">
          <h2>Protección de datos</h2>
          <a href="#" class="modal_close"></a>
        </div>
        <div class="contenedor">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum libero purus, convallis nec vestibulum eget, luctus vitae purus. Vestibulum non mauris et sem vulputate pellentesque ac a turpis. Ut vel lacus vitae justo vestibulum lobortis. Nunc ipsum ipsum, laoreet id dictum nec, fermentum vel purus. Maecenas nisl felis, faucibus non rutrum eu, sollicitudin sed ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent dignissim lacinia tempus. Nulla facilisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Nulla accumsan pellentesque velit, a malesuada diam tristique a. Fusce eleifend magna erat, et imperdiet orci. Quisque sapien mauris, malesuada eu tristique pulvinar, placerat id ligula. Vivamus vitae viverra nulla. Donec eget turpis vel erat malesuada sodales.</p>
        </div>
    </div>

<div id="modalContacto" style="display: none; position: fixed; opacity: 1; z-index: 11000; left: 50%; margin-left: -330px; top: 200px;">
  <div id="signup-header">
          <h2>Ponte en contacto con nosotros</h2>
          <a href="#" class="modal_close"></a>
        </div>
        <form id="formcontactar" action="{{url('admin/login/contactar')}}">
            <p class="modal-body">
            <textarea name="comentario"></textarea>
                <span>Gracias por contactar con nosotros.</span>
            </p>
            <p class="modal-footer">
            <a class="loginform_btn btn-contacto">Enviar</a>
                <span>Enviando...</span>
            </p>
        </form>
    </div>
<!-- fin lightbox -->
</div>








<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>



</body>

</html>
