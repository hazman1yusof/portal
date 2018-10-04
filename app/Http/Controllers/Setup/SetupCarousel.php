<?php

namespace App\Http\Controllers\Setup;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class SetupCarousel extends Controller{

    public function show(Request $request){ 
        $caras = DB::table('carousel')->orderBy('id', 'desc')->get();
        return view('setup/carousel',compact('caras'));

    }

     public function form(Request $request){ 

     	dd($request);

    }
}
