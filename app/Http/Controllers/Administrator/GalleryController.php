<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\User;
use App\Models\Gambar\Slides\Kategori_Gallery;
use App\Models\Gambar\Slides\Gallery;

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

class GalleryController extends BaseController
{


        public function update_gambar_baru(Request $request){
            
            $postdata = Gallery::post_gambar_baru_edit($request);
            
            echo "success";
        }

        public function hapus_gambar_gallery(Request $request){
            
        }


        public function get_gambar_slide(Request $request){
            $getdata = Slides::get_gambar_slide($request);

           // echo $getdata;

            return response()->json($getdata , 200); 
        }


        public function index(Request $request){
            $datalist = Kategori_Gallery::get_datakategori($request);

            return view('admin.pages.data_gallery.table' ,compact('datalist'));
        }

        public function index_gal(Request $request){
            $datalist = Kategori_Gallery::get_datakategori($request);

            return view('admin.pages.data_gallery.table' ,compact('datalist'));
        }

        public function index_kategori(Request $request){
            $datalist = Kategori_Gallery::get_datakategori($request);

            return view('admin.pages.data_gallery.kategori' ,compact('datalist'));
        }

        public function post_data_gallery(Request $request){
            $postdata = Gallery::post_data_gallery($request);
            
            echo "success";
        }

        public function post_data_kategori_gallery(Request $request){
            $postdata = Kategori_Gallery::post_data_kategori($request);
            
            echo "success";
        }

        public function get_data_gallery_all(Request $request){
            $postdata = Gallery::get_data_gallery($request);

            
            
            return  response()->json($postdata, 200);
        }

        public function get_data_kategori_all(Request $request){
            $postdata = Kategori_Gallery::get_datakategori($request);

            $datas = array();

            $datas["data"] = $postdata;
            
            return  response()->json($datas, 200);
        }

        public function get_detail_kategori_gallery(Request $request,$index){
            $postdata = Kategori_Gallery::get_detail_kategori_gallery($index);

            return  response()->json($postdata, 200);
        }

        public function update_kategori_gallery_baru(Request $request){
            $postdata = Kategori_Gallery::post_kategori_baru_edit($request);
            
            echo "success";
        }
        
        public function get_data_gallery(Request $request){
            $datalist = 0;

            if($request->cat == 0){
                $datalist = Kategori_Gallery::get_datakategori_first($request);
            }
            else{
                $datalist = $request->cat;
            }

            $postdata = Gallery::get_data_gallery_bykat($request , $datalist);
            
            return  response()->json($postdata, 200);
        }

        public function get_detail_gallery(Request $request , $index){
            $postdata = Gallery::get_detail_gallery($request , $index);
            
            return  response()->json($postdata, 200);
        }

        public function hapus_gallery(Request $request , $index){
            $postdata = Gallery::hapus_gallery($request , $index);
            
            return  response()->json($postdata, 200);
        }

        public function post_hapus_kategori(Request $request , $index){
            $postdata = Kategori_Gallery::post_hapus_kategori($request , $index);
            
            return  response()->json($postdata, 200);
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