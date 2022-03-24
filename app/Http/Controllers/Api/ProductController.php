<?php

namespace App\Http\Controllers\Api;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\User;

use App\Models\Product\Product;
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

class ProductController extends BaseController
{

        public function get_product_list(Request $request){
            $data = Product::get_data_product($request);

            return response()->json($data);
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


        public function hapus_gambar_gallery(Request $request , $index){
            $detail_room = RoomDetail::hapus_foto_gallery($index);

            echo "success";
        }


        public function post_data_roomcat(Request $request){
            
            $postdata = RoomKat::post_data_roomcat($request);
            
            echo "success";
        }

        public function post_data_updateroom(Request $request){
            $postdata = RoomDetail::post_data_updateroom($request);
            
            echo "success";
        }

        public function post_gambar_baru_edit(Request $request){
            
            $postdata = Slides::post_gambar_baru_edit($request);
            
            echo "success";
        }

        public function get_gambar_roomcat(Request $request){
            $getdata = RoomKat::get_gambar_roomcat($request);

           // echo $getdata;

            return response()->json($getdata , 200); 
        }

        public function get_detail_slideshow(Request $request,$index){
            $getdata = Slides::get_detail_slideshow($request,$index);

           // echo $getdata;

            return response()->json($getdata , 200); 
        }

        public function post_data_banjar(Request $request){

        if($request->t_id_banjar == ""){
            $datalist = Banjar::post_data_banjar($request);
        }
        else{
            $datalist = Banjar::post_editdata_banjar($request);
        }

            return redirect("administrator/databanjar");
        }

        public function hapus_slideshow(Request $request , $index){

            $data = Slides::hapus_slideshow($request , $index);
            

            echo "success";
    
                //return redirect("administrator/databanjar");
        }

        

        public function index_gambar(Request $request){

            // $datalist = Banjar::get_databanjar($request);

            // echo $datalist;
            //$datalist = Kategori_Slides::get_datakategori($request);
            $datalist_kategori = Kategori_Slides::get_datakategori($request);

            return view('admin.pages.data_images.gambar.table' ,compact('datalist_kategori'));
        }

        public function ambil_listkategori_slides(Request $request){

            $datalist_kategori = Kategori_Slides::get_datakategori_nama($request);

            return json_encode($datalist_kategori);

        }

}
?>