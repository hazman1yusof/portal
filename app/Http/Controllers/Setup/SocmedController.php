<?php

namespace App\Http\Controllers\Setup;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Storage;
use Image;
use File;

class SocmedController extends Controller{
	public function __construct(){
        $this->middleware('auth');
    }

    public function view(Request $request){ 
        $socmeds = DB::table('socmed')->orderBy('id', 'desc')->get();
        return view('setup/socmed',compact('socmeds'));
    }

    public function form(Request $request){
    	switch($request->oper){
            case 'add':
                return $this->add($request);
            case 'edit':
                return $this->edit($request);
            case 'del':
                return $this->del($request);
            default:
                return 'error happen..';
        }
    }

    public function add(Request $request){
        DB::beginTransaction();
        try { 

        	DB::table('socmed')
        		->insert([
        			'socmed_name' => $request->socmed_name,
        			'socmed_desc' => $request->socmed_desc,
        		]);

        	DB::commit();

        	return redirect()->back();

        } catch (Exception $e) {
            DB::rollback();
            report($e);

            return response('Error'.$e, 500);
        }
    	
    }

    public function edit(Request $request){
    	DB::beginTransaction();
        try { 

            $array_update = [
                'socmed_name' => $request->socmed_name,
                'socmed_desc' => $request->socmed_desc,
            ];

        	$socmed = DB::table('socmed')->where('id','=',$request->id);

    		$socmed
        		->update($array_update);

        	DB::commit();

        	return redirect()->back();

        } catch (Exception $e) {
            DB::rollback();
            report($e);

            return response('Error'.$e, 500);
        }
    }

    public function del(Request $request){
    	DB::beginTransaction();
        try { 

            $socmed = DB::table('socmed')->where('id','=',$request->id);

    		$socmed->delete();

        	DB::commit();

        	return redirect()->back();

        } catch (Exception $e) {
            DB::rollback();
            report($e);

            return response('Error'.$e, 500);
        }
    }
}
