<?php
namespace App\Views\Establishment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardView extends Controller
{
    public function index()
    {
        return view('establishment.dashboard');
    }
}
