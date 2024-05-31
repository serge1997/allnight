<?php
namespace App\Views\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterView extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
}
