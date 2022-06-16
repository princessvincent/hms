<?php

namespace App\Http\Controllers;

use App\Models\bill;
use App\Models\meal;
use App\Models\noticeb;
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
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $bills1 = bill::count();
        $meals1 = meal::count();
        $info = noticeb::count();
        return view('home', compact('bills1', 'meals1', 'info'));
       
    }
    
}
