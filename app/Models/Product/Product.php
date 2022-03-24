<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;
use Config;

class Product extends Model
{   
    //public $timestamps = false; 
    //
    protected $fillable = ['id_product', 'nama_product','created_at','updated_at','aktif'];
    protected $table='tb_product';

    public static function get_data_product($request){
        $data = Product::where("aktif","1")->orderBy("id_product" , "desc")->paginate(Config::get("myconfig.limitProduct"));

        return $data;
    }
    
    public static function get_data_product_aktif($request){
        $data = Product::where("aktif","1")->get();

        return $data;
    }

    public static function get_detail_product($request,$index){
        $data = Product::where("id_product",$index)->firstOrfail();

        return $data;
    }

    public static function get_rand_pekerjaan($request){
        $data = Pekerjaan::inRandomOrder()->firstOrfail();

        return $data->id_list_pekerjaan;
    }

    public static function get_detail_bedtype($request,$index){
        $data = About::where("id_bed_type",$index)->where("aktif","1")->orderBy("id_bed_type" , "desc")->get();

        return $data;
    }

    public static function tambah_product($request){
        $originalImage= $request->file('file_upload_dropzone');
        $slider_name = time().str_shuffle("abcdefghijklmnopqrstuvwxyz").".".$originalImage->getClientOriginalExtension();
        
        $thumbnailImage = \Intervention\Image\Facades\Image::make($originalImage);
        $thumbnailPath = public_path()."/GambarProduct/thumbnail/";
        $originalPath = public_path()."/GambarProduct/";
        $thumbnailImage->save($originalPath.$slider_name);
        $thumbnailImage->resize(150,150);
        $thumbnailImage->save($thumbnailPath.$slider_name); 

        $data                          = new Product;
        $data->nama_product            = $request->text_title_new;
        $data->deskripsi               = $request->text_desc_new;
        $data->harga                   = $request->text_harga_new;
        $data->foto                    = $slider_name;
        $data->url_path                = "/GambarProduct/".$slider_name;
        $data->aktif                   = "1";

        $data->save();

        return $data;
    }

    public static function post_product_edit($request){
        $originalImage = $request->file('edit_f_upload_gambar');
        $data = array();

        if($originalImage != ""){
            $slider_name = time().str_shuffle("abcdefghijklmnopqrstuvwxyz").".".$originalImage->getClientOriginalExtension();
            
            $thumbnailImage = \Intervention\Image\Facades\Image::make($originalImage);
            $thumbnailPath = public_path()."/GambarProduct/thumbnail/";
            $originalPath = public_path()."/GambarProduct/";
            $thumbnailImage->save($originalPath.$slider_name);
            $thumbnailImage->resize(150,150);
            $thumbnailImage->save($thumbnailPath.$slider_name); 

            $data["foto"]           = $slider_name;
            $data["url_path"]       = "/GambarProduct/".$slider_name;
        }

        $data["nama_product"] = $request->edit_text_title_new;
        $data["deskripsi"]  = $request->edit_text_deskripsi_new;
        $data["harga"]      = $request->edit_text_price_new;

        $data = Product::where("id_product" , $request->edit_hidden_textfield)->update($data);

        return $data;
    }

    public static function hapus_product($request){

        $data = Product::where("id_product" , $request->id)->update(array("aktif" => "0"));

        return $data;

    }

    
}
