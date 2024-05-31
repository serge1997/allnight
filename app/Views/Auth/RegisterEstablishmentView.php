<?php
namespace App\Views\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterEstablishmentView extends Controller
{
    public function index()
    {
        return view('auth.establishment-register');
    }
}
