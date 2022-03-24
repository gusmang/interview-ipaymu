<?php

namespace App\Http\Controllers\Administrator;

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
        

        public function index(Request $request){
            $data = Product::get_data_product($request);
            $totals = count(Product::get_data_product_aktif($request));

            //$totals = ceil($totals/Config::get("myconfig.limitProduct"));

            return view('admin.pages.data_product.table' , compact('data','totals'));
        }

        public function post_data_product(Request $request){
                $postdata = Product::tambah_product($request);
                
                echo "success";
        }

        public function get_detail_product(Request $request , $index){
            $detail = Product::get_detail_product($request,$index);

            return response()->json($detail);
        }


        public function post_product_edit(Request $request){
            
            $postdata = Product::post_product_edit($request);
            
            echo "success";
        }

        public function hapus_product(Request $request , $index){
            $data = Product::hapus_product($request , $index);
            
            echo "success";
                //return redirect("administrator/databanjar");
        }

}
?>