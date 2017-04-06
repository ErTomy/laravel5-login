<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title>Acceso administración</title>
<link href="{{ asset('/admin/login/css/login.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="colx100_cabecera"><!--CABECERA-->
	<div class="cabecera">
     	<div class="cabecera_item1">
   	    	<a href="#"><img src="{{url('/admin/login/imagenes/logo.png')}}" alt="Inicio" /></a>
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
          © 2017 BalneariaIS - Todos los derechos reservados      </div>
        </div>
</div>
</body>
</html>
