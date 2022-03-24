<?php

namespace App\Models\Gambar\Slides;

use Illuminate\Database\Eloquent\Model;

class Slides extends Model
{   
    //public $timestamps = false; 
    //
    protected $fillable = ['id_gambar_home', 'image_name', 'title','aktif'];
    protected $table='tb_gambar_home';

    public static function get_dataslides($request){

        $data = Slides::where("aktif","1")->orderBy("id_gambar_home" , "desc")->get();

        return $data;

    }

    public static function get_detail_slideshow($request,$index){

        $data = Slides::where("id_gambar_home",$index)->where("aktif","1")->orderBy("id_gambar_home" , "desc")->get();

        return $data;

    }

    public static function get_data_slides_by_position($request,$index){

        $data = Slides::where("posisi_gambar",$request->posisi)->where("aktif","1")->orderBy("id_gambar_home" , "desc")->get();

        return $data;

    }

    public static function post_data_slides($request){
        $originalImage= $request->file('file_upload_dropzone');
        $slider_name = time().str_shuffle("abcdefghijklmnopqrstuvwxyz").".".$originalImage->getClientOriginalExtension();
        
        $thumbnailImage = \Intervention\Image\Facades\Image::make($originalImage);
        $thumbnailPath = public_path()."/GambarSlides/thumbnail/";
        $originalPath = public_path()."/GambarSlides/";
        $thumbnailImage->save($originalPath.$slider_name);
        $thumbnailImage->resize(150,150);
        $thumbnailImage->save($thumbnailPath.$slider_name); 

        $slide_check = "0";
        if($request->chk_is_slide != ""){
            $slide_check = "1";
        }

        $data                                         = new Slides;
        $data->alt                                    = $request->text_desc_new;
        $data->title                                  = $request->text_title_new;
        $data->deskripsi                              = $request->text_desc_new;
        $data->image_name                             = $slider_name;
        $data->is_slide                               = $slide_check;
        $data->url_path                               = "/GambarSlides/thumbnail/".$slider_name;
        $data->urutan                                 = 1;
        $data->aktif                                  = "1";

        $data->save();

        return $data;
    }

    public static function post_gambar_baru_edit($request){
        $originalImage= $request->file('edit_f_upload_gambar');

        if($request->file('edit_f_upload_gambar') != ""){

            $slider_name = time().str_shuffle("abcdefghijklmnopqrstuvwxyz").".".$originalImage->getClientOriginalExtension();
            
            $thumbnailImage = \Intervention\Image\Facades\Image::make($originalImage);
            $thumbnailPath = public_path()."/GambarSlides/thumbnail/";
            $originalPath = public_path()."/GambarSlides/";
            $thumbnailImage->save($originalPath.$slider_name);
            $thumbnailImage->resize(150,150);
            $thumbnailImage->save($thumbnailPath.$slider_name); 

        }

        $array_input = array();

        $array_input["alt"]                     = $request->edit_text_desc_new;
        $array_input["title"]                   = $request->edit_text_title_new;
        $array_input["deskripsi"]               = $request->edit_text_desc_new;

        $slide_check = "0";

        if($request->chk_is_slide_edit != ""){
            $slide_check = "1";
        }

        if($originalImage != ""){
            $array_input["image_name"]              = $slider_name;
            $array_input["url_path"]                = "/GambarSlides/thumbnail/".$slider_name;
        }

        $array_input["is_slide"]                    = $slide_check;


        $data = Slides::where("id_gambar_home" , $request->edit_hidden_textfield)->update($array_input);

        return $data;

    }

    
    public static function post_active_slides($request){

        $array_input = array();

        $array_input["is_slide"] = "1";

        $data = Slides::where("id_gambar_home" , $request->id)->update($array_input);

        return $data;

    }

    public static function get_gambar_slide($request){
        $data = Slides::where("aktif" , "1")->get();

        return $data;
    }

    public static function hapus_slideshow($request,$index){

        $data = Slides::where("id_gambar_home" , $index)->delete();

        return $data;

    }

    public static function post_editdata_banjar($request){

        $data = Banjar::where("id_data_banjar" , $request->t_id_banjar)->update(array("nama_banjar" => $request->t_nama_banjar , "alamat_banjar" => $request->t_alamat_banjar));

        return $data;

    }


    /*public function adv_city()
    {
        return $this->hasMany('App\tb_adv_city', 'id_adv_city', 'id_adv_city');
    }*/
    
}
