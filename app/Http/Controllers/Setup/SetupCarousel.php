<?php

namespace App\Http\Controllers\Setup;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SetupCarousel extends Controller{

    public function show(Request $request){   
        return view('setup/carousel');
    }
}
