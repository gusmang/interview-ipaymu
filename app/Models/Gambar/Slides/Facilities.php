<?php

namespace App\Models\Gambar\Slides;

use Illuminate\Database\Eloquent\Model;

class Facilities extends Model
{   
    //public $timestamps = false; 
    //
    protected $fillable = ['id_facilities', 'nama_facilities','aktif'];
    protected $table='tb_facilities';

    public static function get_datafacilities($request){

        $data = Facilities::where("aktif","1")->orderBy("id_facilities" , "desc")->get();

        return $data;

    }

    public static function get_detail_facilities($request , $index){

        $data = Facilities::where("id_facilities",$index)->orderBy("nama_facilities" , "asc")->get();

        return $data;

    }

    public static function get_detail_kategori_gallery($index){

        $data = Kategori_Gallery::where("id_kategori_gallery",$index)->orderBy("nama_kategori" , "asc")->get();

        return $data;

    }

    public static function get_datakategori_nama($request){

        $data = Kategori_Slides::where("aktif","1")->orderBy("nama_kategori" , "asc")->get();

        return $data;

    }

    public static function post_data_facilities($request){
        $data                    = new Facilities;
        $data->nama_facilities   = $request->text_nama_kategori;
        $data->aktif             = "1";

        $data->save();

        return $data;
    }

    public static function post_hapus_facilities($request){

        $data = Facilities::where("id_facilities" , $request->id)->update(array("aktif" => "0"));

        return $data;

    }

    public static function update_facilities($request){

        $data = Facilities::where("id_facilities" , $request->edit_hidden_textfield)->update(array("nama_facilities" => $request->edit_text_title_new));

        return $data;

    }


    /*public function adv_city()
    {
        return $this->hasMany('App\tb_adv_city', 'id_adv_city', 'id_adv_city');
    }*/
    
}
