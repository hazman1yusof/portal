<?php

namespace App\Http\Controllers\Setup;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Storage;
use Image;
use File;

class MainpageController extends Controller{
	public function __construct(){
        $this->middleware('auth');
    }

    public function view(Request $request){ 
        $caras = DB::table('carousel')->orderBy('lineno', 'desc')->orderBy('id', 'desc')->get();
        return view('setup/mainpage',compact('caras'));
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

        	$carousel_path = $request->file('image_file')->store('carousel', 'public_uploads');

        	DB::table('carousel')
        		->insert([
        			'lineno' => $request->lineno,
        			'carousel_path' => $carousel_path,
        			'carousel_text' => $request->carousel_text,
        			'active' => !empty($request->active)
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

        	$carousel = DB::table('carousel')->where('id','=',$request->id);

        	if(!empty($request->file('image_file'))){
				File::delete('uploads/'.$carousel->first()->carousel_path);
        		$carousel_path = $request->file('image_file')->store('carousel', 'public_uploads');

				$carousel
	        		->update([
	        			'lineno' => $request->lineno,
	        			'carousel_path' => $carousel_path,
	        			'carousel_text' => $request->carousel_text,
	        			'active' => !empty($request->active)
	        		]);
        	}else{
        		$carousel
	        		->update([
	        			'lineno' => $request->lineno,
	        			'carousel_text' => $request->carousel_text,
	        			'active' => !empty($request->active)
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

        	$carousel = DB::table('carousel')
	    					->where('id','=',$request->id);

			File::delete('uploads/'.$carousel->first()->carousel_path);

    		$carousel->delete();

        	DB::commit();

        	return redirect()->back();

        } catch (Exception $e) {
            DB::rollback();
            report($e);

            return response('Error'.$e, 500);
        }
    }
}
