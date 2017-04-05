<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\PasswordBroker;
use Illuminate\Foundation\Auth\ResetsPasswords;


use Illuminate\Http\Request;
use App\User;
use Mail;

class PasswordController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Password Reset Controller
	|--------------------------------------------------------------------------
	|
	| This controller is responsible for handling password reset requests
	| and uses a simple trait to include this behavior. You're free to
	| explore this trait and override any methods you wish to tweak.
	|
	*/

	use ResetsPasswords;

	/**
	 * Create a new password controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\PasswordBroker  $passwords
	 * @return void
	 */
	public function __construct(Guard $auth, PasswordBroker $passwords)
	{
		$this->auth = $auth;
		$this->passwords = $passwords;
		$this->middleware('guest');
	}


	// ruta donde redirecciona una vez logado
	protected $redirectPath = '/administrador';




	// sobreescribimos función comprueba email y manda recordatorio de contraseña
	public function postEmail(Request $request)
	{
		$this->validate($request, ['email' => 'required|email']);

		$user = User::findEmail($request->input('email'))->first();
		if($user)
		{
				$this->emailResetPassword($request, $user);
				return redirect()->back()->with('status', trans('passwords.sent'));
		}
		else
		{
				return redirect()->back()->withErrors(['email' => trans('passwords.user')]);
		}
	}


	// sobreescribimos función recupera contraseña para que tambien active el usuario
	public function postReset(Request $request)
	{
			$this->validate($request, [
				'token' => 'required',
				'email' => 'required|email',
				'password' => 'required|confirmed',
			]);

			$credentials = $request->only(
				'email', 'password', 'password_confirmation', 'token'
			);

			$response = $this->passwords->reset($credentials, function($user, $password)
			{
				$user->password = $password;
				$user->active = 1;
				$user->save();
				$this->auth->login($user);
			});

			if ($response == PasswordBroker::PASSWORD_RESET)
			{
					return redirect($this->redirectPath());
			}
			else
			{
					return redirect()->back()
								->withInput($request->only('email'))
								->withErrors(['email' => trans($response)]);
			}

	}


	public function emailResetPassword($request, $user)
	{
			$params = trans('redessociales');
			$params['nombre'] = $user->name;
			$params['email'] = $user->email;
			$params['token'] = app('auth.password.tokens')->create($user);
			$params['ruta_base'] = url();
			Mail::send('emails.password', $params, function($message) use($params)   {
					$message->to($params['email']);
					$message->from(trans('login.from'), trans('login.from_name'));
					$message->subject(trans('login.subject_reset'));
			});
	}




}
