<html style="color:#535353;background:#fff;">
<table style="max-width:600px;margin:0 auto;color:#535353;font-family:'Trebuchet MS', Verdana, sans-serif;">
  <tbody>
    <tr>
      <td>
		<table style="width:100%;padding:10px;border:solid 1px #d4d4d4;-webkit-border-radius:10px;-moz-border-radius:10px;-ms-border-radius:10px;border-radius:10px;">
          <tbody>
           <tr>
				<td style="text-align:center;">
           	    	<a href="{{$ruta_base}}"><img style="max-width:100%;" src="{{$ruta_base}}/images/emails/logo-mg-inmobiliaria.png" alt="Inmobiliaria"/></a>
                </td>
		    </tr>
            <tr>
				<td>&nbsp;

			    </td>
		    </tr>
            <tr>
              <td>
              	<table style="width:100%;font-size:13px;line-height:20px;">
                  <tbody>
                  	<tr style="text-align:center;line-height:36px;">
                      <td><h1>Acceso fallido a Inmobiliaria</h1></td>
                    </tr>
                    <tr>
                    	<td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>Estimado/a <strong>{{$nombre}}</strong></td>
                    </tr>
                    <tr>
                      <td>
                      	Hemos detectado un intento de acceso fallido a la cuenta de cliente con el usuario <strong>{{ $email }}</strong>, a continuación te facilitamos las información del usuario que ha intentado acceder:
                      </td>
                    </tr>
                    <tr>
                      <td style="background:url({{$ruta_base}}/images/emails/linea-discontinua.gif) repeat-x left center;">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>
                          <strong>IP :</strong> {{ $ip }}<BR>
                            <BR>
                          <strong>Fecha:</strong> {{ $fecha }} a las {{ $hora }}
                      </td>
                    </tr>
                    <tr>
                      <td style="background:url({{$ruta_base}}/images/emails/linea-discontinua.gif) repeat-x left center;">&nbsp;</td>
                    </tr>
                    <tr>
                   	  <td>
                       	<p>¿Eres tu? De ser así, recuerda que la contraseña que estás utilizando es la correcta e ignora este correo electrónico.</p>
                        <p>En caso de no ser tú, ten en cuenta que este aviso no implica que un tercero haya obtenido acceso a tu cuenta de cliente, puede deberse a un fallo de otro cliente al escribir su nombre de usuario.</p>
                        <p><strong>No respondas</strong> a este E-mail, en caso de tener algún tipo de duda, puedes contactar con nuestro soporte online mediante un ticket desde tu área personal.</p>
                        </td>
                    </tr>
                    <tr>
                      <td style="background:url({{$ruta_base}}/images/emails/linea-continua.gif) repeat-x left center;">&nbsp;</td>
                    </tr>
                    <tr>
                      <td style="padding:10px 0;color:#9e9e9e;font-size:11px;">
                        	Síguenos en:
                        	  <a href="{{$facebook}}"><img style="vertical-align:middle;margin-left:3px;" src="{{$ruta_base}}/images/emails/ico-redes-facebook-color.png" alt="Inmobiliaria en Facebook"/></a>
                            <a href="{{$twitter}}"><img style="vertical-align:middle;margin-left:3px;" src="{{$ruta_base}}/images/emails/ico-redes-twitter-color.png" alt="Inmobiliaria en Twitter"/></a>
                            <a href="{{$google}}"><img style="vertical-align:middle;margin-left:3px;" src="{{$ruta_base}}/images/emails/ico-redes-google-color.png" alt="Inmobiliaria en Google Plus"/></a>
                            <a href="{{$youtube}}"><img style="vertical-align:middle;margin-left:3px;" src="{{$ruta_base}}/images/emails/ico-redes-youtube-color.png" alt="Inmobiliaria en Youtube"/></a>
                            <a href="{{$vimeo}}"><img style="vertical-align:middle;margin-left:3px;" src="{{$ruta_base}}/images/emails/ico-redes-vimeo-color.png" alt="Inmobiliaria en Vimeo"/></a>
                            <a href="{{$pinterest}}"><img style="vertical-align:middle;margin-left:3px;" src="{{$ruta_base}}/images/emails/ico-redes-pinterest-color.png" alt="Inmobiliaria en Pinterest"/></a>
                      </td>
                    </tr>
                    <tr>
                    	<td style="font-size:11px;color:#9e9e9e;">
                        	© 2017 Inmobiliaria
                        </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>
</html>
