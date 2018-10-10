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
        $exist = DB::table('main_page')->count();
        if($exist){
            $oper = 'edit';
        }else{
            $oper = 'add';
        }

        $mainpage = DB::table('main_page')->first();
        return view('setup/mainpage',compact('mainpage','oper'));
    }

    public function form(Request $request){
    	switch($request->oper){
            case 'add':
                return $this->add($request);
            case 'edit':
                return $this->edit($request);
            default:
                return 'error happen..';
        }
    }

    public function add(Request $request){
        DB::beginTransaction();
        try { 

        	$logo1_path = $request->file('logo1')->store('logo', 'public_uploads');
            $logo2_path = $request->file('logo2')->store('logo', 'public_uploads');

        	DB::table('carousel')
        		->insert([
        			'logo1' => $logo1_path,
        			'logo1_link' => $request->logo1_link,
        			'logo2' => $logo2_path,
        			'logo2_link' => $request->logo2_link,
                    'main_title' => $request->main_title ,
                    'title_link' => $request->title_link ,
                    'activity_title' => $request->activity_title ,
                    'info_title' => $request->info_title ,
                    'social_media' => $request->social_media ,
                    'about_title' => $request->about_title ,
                    'about_info' => $request->about_info ,
                    'links_title' => $request->links_title ,
                    'links_list' => $request->links_list ,
                    'contact_title' => $request->contact_title ,
                    'contact_address' => $request->contact_address ,
                    'contact_tel' => $request->contact_tel ,
                    'contact_fax' => $request->contact_fax ,
                    'contact_whatsapp' => $request->contact_whatsapp ,
                    'footer1' => $request->footer1 ,
                    'footer2' => $request->footer2
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

            $array_edit = [
                'logo1_link' => $request->logo1_link,
                'logo2_link' => $request->logo2_link,
                'main_title' => $request->main_title ,
                'title_link' => $request->title_link ,
                'activity_title' => $request->activity_title ,
                'info_title' => $request->info_title ,
                'social_media' => $request->social_media ,
                'about_title' => $request->about_title ,
                'about_info' => $request->about_info ,
                'links_title' => $request->links_title ,
                'links_list' => $request->links_list ,
                'contact_title' => $request->contact_title ,
                'contact_address' => $request->contact_address ,
                'contact_tel' => $request->contact_tel ,
                'contact_fax' => $request->contact_fax ,
                'contact_whatsapp' => $request->contact_whatsapp ,
                'footer1' => $request->footer1 ,
                'footer2' => $request->footer2
            ];

        	$mainpage = DB::table('main_page')->where('id','=',$request->id);

        	if(!empty($request->file('logo1'))){
				File::delete('uploads/'.$mainpage->first()->logo1);
                $logo1_path = $request->file('logo1')->store('logo', 'public_uploads');
                $array_edit['logo1'] =  $logo1_path;
            }

            if(!empty($request->file('logo2'))){
                File::delete('uploads/'.$mainpage->first()->logo2);
                $logo2_path = $request->file('logo2')->store('logo', 'public_uploads');
                $array_edit['logo2'] =  $logo2_path;
            }
				
    		$mainpage
        		->update($array_edit);

        	DB::commit();

        	return redirect()->back();

        } catch (Exception $e) {
            DB::rollback();
            report($e);

            return response('Error'.$e, 500);
        }
    }

}
