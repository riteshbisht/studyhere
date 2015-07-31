<?php namespace Illuminate\Foundation\Auth;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

use App\Confirm;

use App\User;
trait AuthenticatesAndRegistersUsers {

	/**
	 * The Guard implementation.
	 *
	 * @var \Illuminate\Contracts\Auth\Guard
	 */
	protected $auth;

	/**
	 * The registrar implementation.
	 *
	 * @var \Illuminate\Contracts\Auth\Registrar
	 */
	protected $registrar;

	/**
	 * Show the application registration form.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function getRegister()
	{
		App::abort(404);
	}

	/**
	 * Handle a registration request for the application.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function postRegister(Request $request)
	{
$me=$request->all();
		$validator = $this->registrar->validator($request->all());

$confirmation_code = str_random(30);
		if ($validator->fails())
		{
			//dd($validator);
			$this->throwValidationException(
				$request, $validator
			);
		}
	//	$this->auth->login($this->registrar->create($me));
		$user=User::find(Input::get('email'));
		if($user)
		{
			$this->auth->login($this->registrar->create($me));
		}
		$confirm = new Confirm;
		$confirm->name=Input::get('name');
		$confirm->email=Input::get('email');
		$confirm->password=Hash::make(Input::get('password'));
		$confirm->confirmation_code=$confirmation_code;
		$confirm->save();
		if(
		Mail::send('emailverify', array('confirmation_code'=>$confirmation_code,'username'=>Input::get("name")), function($message) {
	            $message->to(Input::get('email'), Input::get('username'))
	                ->subject('Verify your email address');
	        }))
					{
		return view('doverification')->with(["message"=>'please verify the email address ('.Input::get("email").') through verification code we sent to you on the registerd email-address!!!<br>
		 plz also check you sapn folder','button_message'=>'Verify','button_url'=>'http://www'.Input::get("email").'/']);
}
		return "error";
	}


	/**
	 * Show the application login form.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function getLogin()
	{
		return Redirect::to('/home');
	}

	/**
	 * Handle a login request to the application.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function postLogin(Request $request)
	{
	$validation=$this->validate($request, [
			'email' => 'required|email', 'password' => 'required',
		]);

		$credentials = $request->only('email', 'password');
		$user = User::find(Input::get('email'));

			if ($this->auth->attempt($credentials, $request->has('remember')))
			{
				return redirect()->intended($this->redirectPath());
			}



		return redirect($this->loginPath())
					->withInput($request->only('email', 'remember'))
					->withErrors([
						'email' => $this->getFailedLoginMessage(),
					]);
	}

	/**
	 * Get the failed login message.
	 *
	 * @return string
	 */
	protected function getFailedLoginMessage()
	{
		return 'These credentials do not match our records.';
	}

	/**
	 * Log the user out of the application.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function getLogout()
	{
		$this->auth->logout();

		return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/');
	}

	/**
	 * Get the post register / login redirect path.
	 *
	 * @return string
	 */
	public function redirectPath($completeprofilepage)
	{
		if (property_exists($this, 'redirectPath'))
		{
			return $this->redirectPath;
		}
		return property_exists($this, 'redirectTo') ? $this->redirectTo : '/dashboard';
	}

	/**
	 * Get the path to the login route.
	 *
	 * @return string
	 */
	public function loginPath()
	{
		return property_exists($this, 'loginPath') ? $this->loginPath : '/home';
	}

}
