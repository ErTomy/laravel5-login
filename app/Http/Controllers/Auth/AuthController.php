<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Illuminate\Http\Request;
use App\Login;
use Mail;


class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('guest', ['except' => 'getLogout']);
	}


	// ruta donde redirecciona una vez logado
	protected $redirectPath = '/administrador';


	// sobreescribimos función de login para que guarde un log de las solicitudes, bloquee usuario en caso de multiples peticiones fallidas y mande emails
	public function postLogin(Request $request)
	{
			$this->validate($request, [
				'email' => 'required|email', 'password' => 'required',
			]);
			$credentials = $request->only('email', 'password');

			$login = new Login($request->input('email'));
			if($login->user)
			{	// el usuario existe
				if($login->user->active == 0)
				{		// el usuario no esta activo
						$error = trans('login.locked');
						$this->emailLockedUser($request, $login);
				}
				elseif($login->check() === false)
				{		// el usuario ha intentado logarse más de X veces en el tiempo establecido, bloqueamos la cuenta y mandamos email de aviso para reactivar
						$login->user->active = 0;
						$login->user->save();
						$error = trans('login.lock_user', ['attemps'=>$login->max_attempts]);
						$this->emailFailLogin($request, $login);
				}
				else if ($this->auth->attempt($credentials, $request->has('remember')))
				{  // usuario logado correctamente
						$login->user_id = $login->user->id;
						$login->valid = 1;
						$login->ip = $request->getClientIp();
						$login->save();
						return redirect()->intended($this->redirectPath());
				}
				else
				{		// contraseña no valida para el usuario, marcamos el intento fallido y mandamos email al usuario avisando
						$login->user_id = $login->user->id;
						$login->valid = 0;
						$login->ip = $request->getClientIp();
						$login->save();
						$error = trans('login.wrong_password', ['attemps'=>$login->max_attempts - $login->times - 1 ]);
						$this->emailFailLogin($request, $login);
				}
      }
			else
			{		// no existe el usuario
					$error = trans('login.wrong_user');
			}


			if(isset($error))
			{
				return redirect($this->loginPath())
							->withInput($request->only('email', 'remember'))
							->withErrors([
								'email' => $error,
							]);
			}


	}


	private function emailFailLogin($request, $login)
	{
			$params = trans('redessociales');
			$params['nombre'] = $login->user->name;
			$params['email'] = $login->user->email;
			$params['ip'] = $request->getClientIp();
			$params['ruta_base'] = url();
			$params['fecha'] = date("d/m/Y");
			$params['hora'] = date("H:i:s");
			Mail::send('emails.loginError', $params, function($message) use($params)   {
					$message->to($params['email']);
					$message->from(trans('login.from'), trans('login.from_name'));
					$message->subject(trans('login.subject'));
			});
	}

	private function emailLockedUser($request, $login)
	{
			$params = trans('redessociales');
			$params['nombre'] = $login->user->name;
			$params['email'] = $login->user->email;
			$params['token'] = app('auth.password.tokens')->create($login->user);
			$params['ip'] = $request->getClientIp();
			$params['ruta_base'] = url();
			$params['fecha'] = date("d/m/Y");
			$params['hora'] = date("H:i:s");
			Mail::send('emails.userLocked', $params, function($message) use($params)   {
					$message->to($params['email']);
					$message->from(trans('login.from'), trans('login.from_name'));
					$message->subject(trans('login.subject'));
			});
	}


}
