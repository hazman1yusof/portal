<?php

namespace App\Http\Controllers\Setup;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Storage;
use Image;
use File;

class ActivityController extends Controller{
	public function __construct(){
        $this->middleware('auth');
    }

    public function view(Request $request){ 
        $activities = DB::table('activity_detail')->orderBy('id', 'desc')->get();
        return view('setup/activity',compact('activities'));
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

        	$activity_image = $request->file('activity_image')->store('activity', 'public_uploads');

        	DB::table('activity_detail')
        		->insert([
                    'activity_date' => $request->activity_date,
                    'activity_name' => $request->activity_name,
                    'activity_time' => $request->activity_time,
                    'activity_venue' => $request->activity_venue,
                    'activity_image' => $activity_image,
                    'activity_desc' => $request->activity_desc
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

        	$activity_detail = DB::table('activity_detail')->where('id','=',$request->id);
            $array_update = [
                'activity_date' => $request->activity_date,
                'activity_name' => $request->activity_name,
                'activity_time' => $request->activity_time,
                'activity_venue' => $request->activity_venue,
                'activity_desc' => $request->activity_desc
            ];

        	if(!empty($request->file('activity_image'))){
				File::delete('uploads/'.$activity_detail->first()->activity_image);
        		$activity_image = $request->file('activity_image')->store('activity', 'public_uploads');
                $array_update['activity_image'] = $activity_image;
            }

    		$activity_detail
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

            $activity_detail = DB::table('activity_detail')->where('id','=',$request->id);

			File::delete('uploads/'.$activity_detail->first()->activity_image);

    		$activity_detail->delete();

        	DB::commit();

        	return redirect()->back();

        } catch (Exception $e) {
            DB::rollback();
            report($e);

            return response('Error'.$e, 500);
        }
    }
}
