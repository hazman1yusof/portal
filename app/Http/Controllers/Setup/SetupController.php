<?php

namespace App\Http\Controllers\Setup;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class setupController extends Controller{

    public function show(Request $request){   
        return view('setup/users');
    }
}
