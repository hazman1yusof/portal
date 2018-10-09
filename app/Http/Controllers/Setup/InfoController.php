<?php

namespace App\Http\Controllers\Setup;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Storage;
use Image;
use File;

class InfoController extends Controller{
	public function __construct(){
        $this->middleware('auth');
    }

    public function view(Request $request){ 
        $infos = DB::table('info_detail')->orderBy('id', 'desc')->get();
        return view('setup/info',compact('infos'));
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

        	$info_image = $request->file('info_image')->store('info', 'public_uploads');

        	DB::table('info_image')
        		->insert([
        			'info_name' => $request->info_name,
        			'info_date' => $request->info_date,
                    'info_content' => $request->info_content,
                    'info_image' => $info_image,
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
                'info_name' => $request->info_name,
                'info_date' => $request->info_date,
                'info_content' => $request->info_content
            ];

        	$info = DB::table('info_detail')->where('id','=',$request->id);

        	if(!empty($request->file('info_image'))){
				File::delete('uploads/'.$info->first()->info_image);
        		$info_image = $request->file('info_image')->store('info', 'public_uploads');
                $array_update['info_image'] = $info_image;
            }

    		$info
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

            $info = DB::table('info_detail')->where('id','=',$request->id);

            File::delete('uploads/'.$info->first()->info_image);

    		$info->delete();

        	DB::commit();

        	return redirect()->back();

        } catch (Exception $e) {
            DB::rollback();
            report($e);

            return response('Error'.$e, 500);
        }
    }
}
