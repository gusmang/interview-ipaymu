<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{   
    //public $timestamps = false; 
    //
    protected $fillable = ['id_welcome_video', 'title','deskripsi','aktif'];
    protected $table='tb_welcome_video';

    public static function get_data_welcomevideo($request){
        $data = About::where("aktif","1")->orderBy("id_welcome_video" , "desc")->get();

        return $data;
    }

    public static function get_data_welcomevideo_first($request){
        $data = About::where("aktif","1")->orderBy("id_welcome_video" , "desc")->firstOrfail();

        return $data;
    }

    public static function get_detail_bedtype($request,$index){
        $data = About::where("id_bed_type",$index)->where("aktif","1")->orderBy("id_bed_type" , "desc")->get();

        return $data;
    }


    public static function update_video($request){
        $array_input   = array();

        $originalImage = $request->file('f_upload');

        if($request->file('f_upload') != ""){
            $slider_name = time().str_shuffle("abcdefghijklmnopqrstuvwxyz").".".$originalImage->getClientOriginalExtension();
            
            $thumbnailImage = \Intervention\Image\Facades\Image::make($originalImage);
            $thumbnailPath = public_path()."/welcome/thumbnail/";
            $originalPath = public_path()."/welcome/";
            $thumbnailImage->save($originalPath.$slider_name);
            $thumbnailImage->resize(150,150);
            $thumbnailImage->save($thumbnailPath.$slider_name); 

            $array_input["image_thumb"]       = $slider_name;
        }


        $array_input["title"]             = $request->t_title_welcome_video;
        $array_input["deskripsi"]         = $request->t_deskripsi_welcome_video;
        $array_input["video_link"]        = $request->t_link_youtube;

        $data = About::where("id_welcome_video" , $request->id_welcome_video)->update($array_input);

        return $data;
        //return count($files);
    }   

    public static function post_data_bedtype($request){
        $data                    = new BedType;
        $data->nama_bed          = $request->text_nama_kategori;
        $data->aktif             = "1";

        $data->save();

        return $data;
    }

    

    public static function post_hapus_bedtype($request){

        $data = BedType::where("id_bed_type" , $request->id)->update(array("aktif" => "0"));

        return $data;

    }

    
}
