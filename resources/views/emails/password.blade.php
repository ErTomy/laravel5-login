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
                      <td><h1>Restablecer contraseña en Inmobiliaria</h1></td>
                    </tr>
                    <tr>
                    	<td>&nbsp;</td>
                    </tr>
                     <td>Estimado/a <strong>{{$nombre}}</strong></td>
                    </tr>
                    <tr>
                      <td>
                      	A continuación te facilitamos un enlace para restablecer tu contraseña de acceso a tu área de clientes.
                      </td>
                    </tr>
                    <tr>
                      <td style="background:url({{$ruta_base}}/images/emails/linea-discontinua.gif) repeat-x left center;">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>
                         <p style="padding:20px 0;text-align:center;"><a style="padding:8px 15px;color:#2c93d1;text-decoration:none;border:solid 1px #bbd3ec;background:#e4f0f8;-webkit-border-radius:3px;-moz-border-radius:3px;-ms-border-radius:3px;border-radius:3px;" href="{{ url('password/reset/'.$token) }}">Restablecer tu contraseña</a></p>
                          <p>O usa este enlace para restablecer tu contraseña:<br>
							<a style="color:#2c93d1;text-decoration:none;" href="{{ url('password/reset/'.$token) }}">{{ url('password/reset/'.$token) }}</a></p>
                      </td>
                    </tr>
                    <tr>
                      <td style="background:url({{$ruta_base}}/images/emails/linea-continua.gif) repeat-x left center;">&nbsp;</td>
                    </tr>
                    <tr>
						<td>
                       		<p>Si no has solicitado restablecer tu contraseña ignora este E-mail.</p>
						</td>
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
