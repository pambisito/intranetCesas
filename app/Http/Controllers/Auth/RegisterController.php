<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'DNI' => ['required', 'integer', 'digits:8'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'apellidoPaterno' => ['required', 'string', 'max:30'],
            'apellidoMaterno' => ['required', 'string', 'max:30'],
            'nombres' => ['required', 'string', 'max:40'],
            'fechaNacimiento' => ['required', 'date'],
            'sexo' => ['required', 'string', 'size:1'],
            'direccion' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'telefono' => ['integer', 'digits:7'],
            'celular' => ['integer', 'digits:9'],
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
            'DNI' => $data['DNI'],
            'password' => Hash::make($data['password']),
            'apellidoPaterno' => $data['apellidoPaterno'],
            'apellidoMaterno' => $data['apellidoMaterno'],
            'nombres' => $data['nombres'],
            'fechaNacimiento' => $data['fechaNacimiento'],
            'sexo' => $data['sexo'],
            'direccion' => $data['direccion'],
            'email' => $data['email'],
            'telefono' => $data['telefono'],
            'celular' => $data['celular'],            
        ]);
    }
}
