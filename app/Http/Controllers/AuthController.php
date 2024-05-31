<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:establishment')->except('logout');
    }

    public function login(Request $request)
    {
        $request->validate([
            'cpf' => ['required'],
            'password' => ['required']
        ]);
        try{
            // if (Auth::guard('web')->attempt(['cpf' => $request->cpf, 'password' => $request->password])) {
            //     dd('aqui');
            // }

            if (Auth::guard('establishment')->attempt(['cnpj' => $request->cpf, 'password' => $request->password])) {
                $request->session()->regenerate();
                return redirect('/est/dashboard');
            }
            return back()->withInput()->with('error', "Dados invalidos");
        }catch(Exception $e){
            return back()->withInput()->with('error', "Um erro aconteceu ". $e->getMessage());
        }
    }

    public function logout()
    {
        Auth::guard('establishment')->logout();
        Auth::guard('web')->logout();
        return view('auth.login');
    }
}
