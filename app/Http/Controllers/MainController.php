<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MainController extends Controller
{
    public function database()
    {
        $logo1 = DB::table('main_page')->pluck('logo1')->first();
        $logo1_link = DB::table('main_page')->pluck('logo1_link')->first();
        $logo2 = DB::table('main_page')->pluck('logo2')->first();
        $logo2_link = DB::table('main_page')->pluck('logo2_link')->first();
        $main_title = DB::table('main_page')->pluck('main_title')->first();
        $title_link = DB::table('main_page')->pluck('title_link')->first();
        $module = DB::table('module_master')->get();
        $activity_title = DB::table('main_page')->pluck('activity_title')->first();
        $activity = DB::table('activity_detail')->orderBy('activity_date', 'desc')->limit(5)->get();
        $info_title = DB::table('main_page')->pluck('info_title')->first();
        $info = DB::table('info_detail')->orderBy('info_date', 'desc')->limit(2)->get();
        $social_media = DB::table('main_page')->pluck('social_media')->first();
        $socmed_detail = DB::table('socmed_detail')->get();
        $about_title = DB::table('main_page')->pluck('about_title')->first();
        $about_info = DB::table('main_page')->pluck('about_info')->first();
        $links_title = DB::table('main_page')->pluck('links_title')->first();
        $links_list = DB::table('main_page')->pluck('links_list')->first();
        $contact_title = DB::table('main_page')->pluck('contact_title')->first();
        $contact_address = DB::table('main_page')->pluck('contact_address')->first();
        $contact_tel = DB::table('main_page')->pluck('contact_tel')->first(); 
        $contact_fax = DB::table('main_page')->pluck('contact_fax')->first(); 
        $contact_whatsapp = DB::table('main_page')->pluck('contact_whatsapp')->first();        

        return view('main.main2', compact('logo1', 'logo1_link', 'logo2', 'logo2_link', 'main_title', 'title_link', 'module',
         'activity_title', 'activity', 'info_title', 'info', 'social_media', 'socmed_detail', 'about_title', 'about_info', 'links_title', 
         'links_list', 'contact_title', 'contact_address', 'contact_tel', 'contact_fax', 'contact_whatsapp'));
    }  
    
    public function view(Request $request){ 
        $modules = DB::table('module_master')->orderBy('id', 'asc')->get();
        $carousels = DB::table('carousel')->orderBy('lineno', 'asc')->orderBy('id', 'asc')->get();
        $facebook = DB::table('socmed')->where('socmed_name','=','facebook')->first();
        return view('main/main',compact('carousels','modules','facebook'));
    }
}
