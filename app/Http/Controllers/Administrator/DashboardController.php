<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\User;
use App\Models\Users;
use App\Models\General;

use DB;
use File;
use Carbon;
use View;
use Blade;
use Hash;

use Config;

use App\Helper\Helper;

use App\Mail\EmailSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

use Session;

class DashboardController extends BaseController
{

    public function indexhome(Request $request){
        // $usaha = Usaha::get_dataUsaha($request);
        // $totalpunia = Danapunia::get_totalPunia($request);
        
        return view('admin.pages.home');
    }

    public function post_data_update_profile(Request $request){
        // $usaha = Usaha::get_dataUsaha($request);
        // $totalpunia = Danapunia::get_totalPunia($request);
        $index            = Auth::guard('admin')->user()->id;

        $profile          = Users::update_user($request , $index);
        
        return redirect(Config::get('myconfig.adminUrl')."/profile");
    }

    public function post_data_update_contact(Request $request){
       // $profile          = Users::update_user($request , $index);
        $contact            = General::post_data_update_contact($request);
        
        return redirect(Config::get('myconfig.adminUrl')."/contacts");
    }

    public function indexprofile(Request $request){
        // $usaha = Usaha::get_dataUsaha($request);
        // $totalpunia = Danapunia::get_totalPunia($request);
        $id            = Auth::guard('admin')->user()->id;
        //return "tes ".$id;
        $profile       = Users::get_user_profile($request,Auth::guard('admin')->user()->id);
        
        return view('admin.pages.profile.form' , compact('profile'));
    }

    public function indexcontacts(Request $request){
        // $usaha = Usaha::get_dataUsaha($request);
        // $totalpunia = Danapunia::get_totalPunia($request);
        //$id            = Auth::guard('admin')->user()->id;
        //return "tes ".$id;
        $profile       = General::get_data_general_first($request);
        
        return view('admin.pages.data_contact.form' , compact('profile'));
    }
    
    public function get_danapunia_range(){
        
        $arr_punia     = array();
        $arr_sumbangan = array();
        
        $arr_bln = array("01","02","03","04","05","06","07","08","09","10","11","12");
        
        $ans = 0;
        
        foreach($arr_bln as $rows){
            $awal = date("Y")."-".$rows."-01";
            $akhir = date("Y")."-".$rows."-31";
            
            //$totals = array();
            
            
            $totalpunia_range = Danapunia::get_totalPunia_inRange($awal,$akhir);
            
            $total = 0;
            
            if($totalpunia_range != ""){
                $total = $totalpunia_range;
            }
            
            $arr_sumbangan[$ans]["punia"] = $total;
            
            $ans++;
            
            //array_push($arr_punia,$totals);
        }
        
        $arr_json = array();
        
        $arr_punias = array();
        
        $arr_punias["data_punia"] = $arr_sumbangan;
        
        $arr_json["total_punia"] = json_encode($arr_sumbangan);
        
        echo json_encode($arr_json);
        
    }
        

}
?>