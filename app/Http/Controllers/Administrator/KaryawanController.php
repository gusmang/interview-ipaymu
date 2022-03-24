<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\User;

use App\Models\Karyawan\Pekerjaan;
use App\Models\Karyawan\Karyawan;
//use App\Models\Gambar\Slides\RoomDetail;

use DB;
use File;
use Carbon;
use View;
use Blade;
use Hash;
use Config;
use Validator;

use App\Helper\Helper;

use App\Mail\EmailSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

use Session;

class KaryawanController extends BaseController
{


        public function index_karyawan(Request $request){

            $name = $request->name;
            $job = $request->job;
            $nip = $request->nip;

            $data = "";

            if(!isset($name) && !isset($job) && !isset($nip)){
                $datalist = Karyawan::get_data_karyawan($request);
                //return $datalist;
                $data = $datalist;
            }
            else{
                $datalist = Karyawan::get_data_karyawan_search($request);
                $data = $datalist;
                //return $datalist;
            }

            $totals = count(Karyawan::get_data_karyawan_aktif($request));
            $pekerjaanData = Pekerjaan::get_data_pekerjaan_custom($request,"nama_pekerjaan","asc");

            

            return view('admin.pages.data_karyawan.table' , compact('data','pekerjaanData','totals'));

        }

        public function tambah_karyawan(Request $request){

            $rules = array(
                'inp_nama_pekerjaan' => 'required|string|max:255'
            );

            $params = $request->all();
            $validator = Validator::make($params, $rules);
            if ($validator->fails()) {
                $request->merge(array('add_form_validate' => 1));
                //print_r($request->all());die('jjj');
                $input['add_form_validate'] = '1';
                return redirect(Config::get("myconfig.adminUrl")."/pekerjaan")
                            ->withErrors($validator)
                            ->withInput();
            } else {
                $postdata = Karyawan::tambah_karyawan($request);
                //flash()->success('The employee has been created successfully.');
                return redirect(Config::get("myconfig.adminUrl")."/karyawan")->with('success','Karyawan Berhasil Ditambahkan !');

            }
            
            return redirect(Config::get("myconfig.adminUrl")."/karyawan");
        }

        public function update_karyawan(Request $request){
                $postdata = Karyawan::update_karyawan($request);
                //flash()->success('The employee has been created successfully.');
                return redirect(Config::get("myconfig.adminUrl")."/karyawan")->with('success','Karyawan Berhasil DiUpdate !');
        }

        public function post_hapus_karyawan(Request $request,$index){
            $postdata = Karyawan::post_hapus_karyawan($request,$index);

            echo "success";
            //flash()->success('The employee has been created successfully.');
            //return redirect(Config::get("myconfig.adminUrl")."/karyawan")->with('success','Karyawan Berhasil DiHapus !');
    }

        public function generate_random_karyawan(Request $request){
                for($an = 0; $an < 50; $an++){
                    $postdata = Karyawan::generate_random_karyawan($request);
                }
                //flash()->success('The employee has been created successfully.');
                return redirect(Config::get("myconfig.adminUrl")."/karyawan")->with('success','50 Karyawan Berhasil Ditambahkan !');
        }

        public function get_detail_karyawan(Request $request , $index){
            $detail = Karyawan::get_detail_karyawan($request,$index);

            return response()->json($detail);
        }

}
?>