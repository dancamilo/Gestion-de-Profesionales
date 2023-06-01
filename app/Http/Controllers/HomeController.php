<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user=Auth::user();
        switch ($user->rols->rol) {
            case 'Educación Contínua':
                return view('users.welcome');
                break;
            case 'relacionamiento':
                return redirect(route(''));
                break;
            default:
                $error =['name'=>'423', 'desc'=>"No tienes el rol adecuado"];
                return view('error', compact('error'));
                break;
        }
    }
}
