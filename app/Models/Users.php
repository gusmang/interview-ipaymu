<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Users extends Model
{   
    //public $timestamps = false; 
    //
    protected $fillable = ['id', 'name','email','aktif'];
    protected $table='users';

    public static function get_data_usersvideo($request){
        $data = Users::where("aktif","1")->orderBy("id" , "desc")->get();

        return $data;
    }

    public static function get_user_profile($request,$index){
        $data = Users::where("id",$index)->firstOrfail();

        return $data;
    }

    public static function get_detail_bedtype($request,$index){
        $data = About::where("id_bed_type",$index)->where("aktif","1")->orderBy("id_bed_type" , "desc")->get();

        return $data;
    }


    public static function update_user($request , $index){
        $array_input   = array();

        //$originalImage = $request->file('f_upload');

        // if($request->file('f_upload') != ""){
        //     $slider_name = time().str_shuffle("abcdefghijklmnopqrstuvwxyz").".".$originalImage->getClientOriginalExtension();
            
        //     $thumbnailImage = \Intervention\Image\Facades\Image::make($originalImage);
        //     $thumbnailPath = public_path()."/welcome/thumbnail/";
        //     $originalPath = public_path()."/welcome/";
        //     $thumbnailImage->save($originalPath.$slider_name);
        //     $thumbnailImage->resize(150,150);
        //     $thumbnailImage->save($thumbnailPath.$slider_name); 

        //     $array_input["image_thumb"]       = $slider_name;
        // }


        $array_input["name"]             = $request->text_nama_kategori;
        $array_input["email"]            = $request->text_nama_username;
        
        if($request->text_nama_password != ""){
            $array_input["password"]        = bcrypt($request->text_nama_password);
        }

        $data = Users::where("id" , $index)->update($array_input);

        return $data;
        //return count($files);
    }   


    
}
