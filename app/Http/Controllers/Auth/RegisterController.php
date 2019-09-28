<?php

namespace App\Http\Controllers\Auth;

use App\Department;
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
    protected $redirectTo = '/dashboard';

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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function showRegistrationForm()
    {
        $department = Department::orderBy('name', 'asc')->get();

        return view('auth.register', compact('department'));
    }

    public function register(Request $request)
    {

        $this->validate($request, [
            'lastname' => 'required|string',
            'firstname' => 'required|string',
            'identitynumber' => 'required|string|unique:users',
            'gender' => 'required|string',
            'phone' => 'required|integer',
            'department_id' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = new User;

        $user->lastname = $request->lastname;
        $user->firstname = $request->firstname;
        $user->othername = $request->othername;
        $user->identitynumber = $request->identitynumber;
        $user->gender = $request->gender;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);
        $user->department_id = $request->department_id;
        $user->role_id = $request->role_id;
        $user->isactive = $request->isactive;

        $user->save();

        return redirect()->back()->with('success', 'Your account has been created successfully!');
    }
}
