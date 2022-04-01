<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tiburones extends Controller
{
    
    public function _construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    $tiburones = Tiburones::all();
    }
}
