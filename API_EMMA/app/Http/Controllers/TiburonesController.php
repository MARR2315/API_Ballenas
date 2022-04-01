<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Tiburones;
class TiburonesController extends Controller
{
    public function index(){
        $tiburones = Tiburones::all();
        return view('index',['tiburones' => $tiburones]);
        }

}
