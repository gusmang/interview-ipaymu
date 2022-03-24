<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\User;

use App\Models\Karyawan\Pekerjaan;
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

class PekerjaanController extends BaseController
{

        public function index(Request $request){
            return view('admin.pages.data_roomcat.table');
        }

        public function index_detail(Request $request,$index){
            $roomcat          = RoomKat::get_detail_roomcat($request,$index);
            $detail_room      = RoomDetail::get_detail_roomdet($index);
            $bedtype          = BedType::get_data_bedtype($index);
            $facility         = Facilities::get_datafacilities($request);
            $facility_list    = Villa_Facilities::get_data_villa_facilities($index);
            // print_r($detail_room);
            // return;
            return view('admin.pages.data_roomcat.detail',compact('roomcat' ,'detail_room','bedtype','facility','facility_list'));
        }

        public function index_pekerjaan(Request $request){

            $datalist = Pekerjaan::get_data_pekerjaan($request);

            $data = $datalist;

            return view('admin.pages.data_karyawan.table_pekerjaan' , compact('data'));

        }

        public function tambah_pekerjaan(Request $request){

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
                $postdata = Pekerjaan::tambah_pekerjaan($request);
                //flash()->success('The employee has been created successfully.');
                return redirect(Config::get("myconfig.adminUrl")."/pekerjaan")->with('success','Pekerjaan Berhasil Ditambahkan !');

            }
            
            return redirect(Config::get("myconfig.adminUrl")."/pekerjaan");
        }

        public function update_pekerjaan(Request $request){
                $postdata = Pekerjaan::update_pekerjaan($request);
                //flash()->success('The employee has been created successfully.');
                return redirect(Config::get("myconfig.adminUrl")."/pekerjaan")->with('success','Pekerjaan Berhasil DiUpdate !');
        }

        public function get_detail_pekerjaan(Request $request , $index){
            $detail = Pekerjaan::get_detail_pekerjaan($request,$index);

            return response()->json($detail);
        }


        public function post_hapus_pekerjaan(Request $request , $index){
            $data = Pekerjaan::post_hapus_pekerjaan($request,$index);

            echo "success";
        }



}
?>