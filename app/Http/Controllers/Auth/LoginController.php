<?php
  
namespace App\Http\Controllers\Auth;
   
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
   
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
  
    use AuthenticatesUsers;
  
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';
   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
   
    public function login(Request $request)
    {   
        $input = $request->all();
   
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $remember=$request->get('remember');
         if (auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')],$remember))
        {
           if (auth()->user()->is_admin == 1) {
                return redirect()->route('admin.home')->with('welcome', 'Welcome to admin dashboard!!');
            }
             elseif((auth()->user()->is_banker == 1)){
                return redirect()->route('banker.home')->with('welcome', 'Welcome to banker dashboard!!');
            }
             else{
                 return redirect()->route('home')->with('welcome', 'Welcome to user dashboard!!');
             }
         }else{
            return back()->with('error','Your e-mail address and password are wrong.');
        }
          
    }
}