<?php

namespace App\Models\Gambar\Slides;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{   
    //public $timestamps = false; 
    //
    protected $fillable = ['id_gallery', 'image_name', 'title','aktif'];
    protected $table='tb_gallery';

    public static function get_data_gallery($request){

        $data = Gallery::join("tb_kategori_gallery" , "tb_kategori_gallery.id_kategori_gallery" , "tb_gallery.id_kategori")->where("tb_gallery.aktif","1")->orderBy("tb_gallery.id_gallery" , "desc")->get();

        return $data;

    }

    public static function get_data_gallery_bykat($request,$cat){

        $data = Gallery::join("tb_kategori_gallery" , "tb_kategori_gallery.id_kategori_gallery" , "tb_gallery.id_kategori")->where("tb_gallery.id_kategori",$cat)->where("tb_gallery.aktif","1")->orderBy("tb_gallery.id_gallery" , "desc")->get();

        return $data;

    }

    public static function get_detail_gallery($request , $index){

        $data = Gallery::join("tb_kategori_gallery" , "tb_kategori_gallery.id_kategori_gallery" , "tb_gallery.id_kategori")->where("tb_gallery.id_gallery",$index)->orderBy("tb_gallery.id_gallery" , "desc")->get();

        return $data;

    }

    public static function hapus_gallery($request , $index){
        $data = Gallery::join("tb_kategori_gallery" , "tb_kategori_gallery.id_kategori_gallery" , "tb_gallery.id_kategori")->where("tb_gallery.id_gallery",$index)->orderBy("tb_gallery.id_gallery" , "desc")->get();

        $thumbnailPath = public_path()."/GambarGallery/thumbnail/".$data[0]->image_name;
        $originalPath = public_path()."/GambarGallery/".$data[0]->image_name;

        unlink($thumbnailPath);
        unlink($originalPath);

        Gallery::where("id_gallery" , $index)->delete();

        
        return $data;

    }

    public static function get_data_slides_by_position($request,$index){

        $data = Slides::where("posisi_gambar",$request->posisi)->where("aktif","1")->orderBy("id_gambar_home" , "desc")->get();

        return $data;

    }

    public static function post_data_gallery($request){
        $originalImage= $request->file('file_upload_dropzone');
        $slider_name = time().str_shuffle("abcdefghijklmnopqrstuvwxyz").".".$originalImage->getClientOriginalExtension();
        
        //$width = Image::make($originalImage)->width();

        $thumbnailImage = \Intervention\Image\Facades\Image::make($originalImage);
        $thumbnailPath = public_path()."/GambarGallery/thumbnail/";
        $originalPath = public_path()."/GambarGallery/";
        $thumbnailImage->save($originalPath.$slider_name);

        $thumbnailImage->resize(($thumbnailImage->width()/4),($thumbnailImage->height()/4));

        $thumbnailImage->save($thumbnailPath.$slider_name); 


        $data                                         = new Gallery;
        $data->alt                                    = $request->text_desc_new;
        $data->title                                  = $request->text_title_new;
        $data->id_kategori                            = $request->select_kategori;
        $data->image_name                             = $slider_name;
        $data->url_path                               = "/GambarGallery/thumbnail/".$slider_name;
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
            $thumbnailPath = public_path()."/GambarGallery/thumbnail/";
            $originalPath = public_path()."/GambarGallery/";
            $thumbnailImage->save($originalPath.$slider_name);
            $thumbnailImage->resize(150,150);
            $thumbnailImage->save($thumbnailPath.$slider_name); 
        }

        $array_input = array();

        $array_input["alt"]                     = $request->edit_text_desc_new;
        $array_input["title"]                   = $request->edit_text_title_new;
        $array_input["id_kategori"]             = $request->select_kategori_edit;

        if($originalImage != ""){
            $array_input["image_name"]              = $slider_name;
            $array_input["url_path"]                = "/GambarGallery/thumbnail/".$slider_name;
        }


        $data = Gallery::where("id_gallery" , $request->edit_hidden_textfield)->update($array_input);

        return $data;

    }

    
    public static function post_active_slides($request){

        $array_input = array();

        $array_input["is_slide"] = "1";

        $data = Slides::where("id_gambar_home" , $request->id)->update($array_input);

        return $data;

    }

    public static function get_gambar_slide($request){
        $data = Slides::where("id_gambar_home" , $request->id)->firstOrfail();

        return $data;
    }

    public static function post_hapus_banjar($request){

        $data = Banjar::where("id_data_banjar" , $request->id)->update(array("aktif" => "0"));

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
