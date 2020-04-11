<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\daftarMakanan;
use redirect;


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
        if(\Auth::user()->roles =='member'){
        return redirect('makanan');    
        }
        elseif(\Auth::user()->roles =='admin'){
            return redirect('admin');
        }
    }

}
