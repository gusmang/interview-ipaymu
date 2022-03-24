<?php

namespace App\Models\Gambar\Slides;

use Illuminate\Database\Eloquent\Model;

class Kategori_Gallery extends Model
{   
    //public $timestamps = false; 
    //
    protected $fillable = ['id_kategori_gallery', 'nama_kategori','aktif'];
    protected $table='tb_kategori_gallery';

    public static function get_datakategori($request){

        $data = Kategori_Gallery::where("aktif","1")->orderBy("nama_kategori" , "asc")->get();

        return $data;

    }

    public static function get_datakategori_first($request){

        $data = Kategori_Gallery::where("aktif","1")->orderBy("nama_kategori" , "asc")->first();

        return $data->id_kategori_gallery;

    }

    public static function get_detail_kategori_gallery($index){

        $data = Kategori_Gallery::where("id_kategori_gallery",$index)->orderBy("nama_kategori" , "asc")->get();

        return $data;

    }

    public static function get_datakategori_nama($request){

        $data = Kategori_Slides::where("aktif","1")->orderBy("nama_kategori" , "asc")->get();

        return $data;

    }

    public static function post_data_kategori($request){

        $data = new Kategori_Gallery;
        $data->nama_kategori   = $request->text_nama_kategori;
        $data->aktif = "1";

        $data->save();

        return $data;

    }

    public static function post_hapus_kategori($request){

        $data = Kategori_Gallery::where("id_kategori_gallery" , $request->id)->update(array("aktif" => "0"));

        return $data;

    }

    public static function post_kategori_baru_edit($request){

        $data = Kategori_Gallery::where("id_kategori_gallery" , $request->edit_hidden_textfield)->update(array("nama_kategori" => $request->edit_text_title_new));

        return $data;

    }


    /*public function adv_city()
    {
        return $this->hasMany('App\tb_adv_city', 'id_adv_city', 'id_adv_city');
    }*/
    
}
