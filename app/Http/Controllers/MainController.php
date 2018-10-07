<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MainController extends Controller
{
    public function view(Request $request){ 
        $carousels = DB::table('carousel')->orderBy('lineno', 'asc')->orderBy('id', 'asc')->get();
        return view('main/main',compact('carousels'));
    }
}
