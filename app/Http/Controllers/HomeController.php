<?php

namespace App\Http\Controllers;

use App\Models\Vignette;
use Illuminate\Http\Request;

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

        $vognettes = Vignette::get();

        return view('home',compact('vognettes'));
    }
}
