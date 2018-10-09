<?php

namespace App\Http\Controllers\Setup;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Storage;
use Image;
use File;

class ModuleController extends Controller{
	public function __construct(){
        $this->middleware('auth');
    }

    public function view(Request $request){ 
        $modules = DB::table('module_master')->orderBy('id', 'desc')->get();
        return view('setup/module',compact('modules'));
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

        	$module_image = $request->file('image_file')->store('module', 'public_uploads');

        	DB::table('module_master')
        		->insert([
        			'module_image' => $module_image,
        			'module_name' => $request->module_name,
                    'module_summary' => $request->module_summary
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

        	$module = DB::table('module_master')->where('id','=',$request->id);

        	if(!empty($request->file('image_file'))){
				File::delete('uploads/'.$module->first()->module_image);
        		$module_image = $request->file('image_file')->store('module', 'public_uploads');

				$module
	        		->update([
	        			'module_image' => $module_image,
                        'module_name' => $request->module_name,
	        			'module_summary' => $request->module_summary
	        		]);
        	}else{
        		$module
                    ->update([
                        'module_name' => $request->module_name,
                        'module_summary' => $request->module_summary
                    ]);
        	}

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

        	$module = DB::table('module_master')
	    					->where('id','=',$request->id);

			File::delete('uploads/'.$module->first()->module_image);

    		$module->delete();

        	DB::commit();

        	return redirect()->back();

        } catch (Exception $e) {
            DB::rollback();
            report($e);

            return response('Error'.$e, 500);
        }
    }
}
