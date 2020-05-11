<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'country' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'avatar' => ['sometimes', 'image', 'mimes:jpg,jpeg,bmp,svg,png','max:5000']
            
        ]);

    }
    
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if(request()->has('avatar'))
        {
            $avataruploaded = request()->file('avatar');
            $avatarname = $avataruploaded->getClientOriginalName();
            $avatarpath = public_path('/avatars/');
            $avataruploaded->move($avatarpath, $avatarname);
            return User::create([
                'name' => $data['name'],
                'username' => $data['username'],
                'country' => $data['country'],
                'email' => $data['email'],
                'gender' => $data['gender'],
                'password' => Hash::make($data['password']),
                'avatar' => $avatarname,
            ]);
        }
        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'gender' => $data['gender'],
            'country' => $data['country'],
            'password' => Hash::make($data['password']),
        ]);
        
        
    }

    // Register
    public function showRegistrationForm(){
      $pageConfigs = [
          'bodyClass' => "bg-full-screen-image",
          'blankPage' => true
      ];

      return view('/auth/register', [
          'pageConfigs' => $pageConfigs
      ]);
    }
}
