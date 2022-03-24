<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\User;
use App\Models\Gambar\Slides\Kategori_Slides;

use App\Models\Gambar\Slides\Slides;


use DB;
use File;
use Carbon;
use View;
use Blade;
use Hash;

use App\Helper\Helper;

use App\Mail\EmailSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

use Session;

class GambarSlidesController extends BaseController
{

        public function index(Request $request){
            return view('admin.pages.data_slideshow.table');
        }

        public function ambil_listslides(Request $request,$kategori){

            $datalist = Slides::get_data_slides_by_position($request,$kategori);

            echo $datalist;

        }

        public function post_data_slides(Request $request){
            
            $postdata = Slides::post_data_slides($request);
            
            echo "success";
        }

        public function post_data_slideshow(Request $request){
            
            $postdata = Slides::post_active_slides($request);
            
            echo "success";
        }

        public function post_gambar_baru_edit(Request $request){
            
            $postdata = Slides::post_gambar_baru_edit($request);
            
            echo "success";
        }

        public function get_gambar_slide(Request $request){
            $getdata = Slides::get_gambar_slide($request);

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