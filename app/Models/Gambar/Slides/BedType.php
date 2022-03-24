<?php

namespace App\Models\Gambar\Slides;

use Illuminate\Database\Eloquent\Model;

class BedType extends Model
{   
    //public $timestamps = false; 
    //
    protected $fillable = ['id_bed_type', 'nama_bed','aktif'];
    protected $table='tb_bed_type';

    public static function get_data_bedtype($request){
        $data = BedType::where("aktif","1")->orderBy("id_bed_type" , "desc")->get();

        return $data;
    }

    public static function get_detail_bedtype($request,$index){
        $data = BedType::where("id_bed_type",$index)->where("aktif","1")->orderBy("id_bed_type" , "desc")->get();

        return $data;
    }


    public static function update_bedtype($request){
        $array_input = array();

        $array_input["nama_bed"]                         = $request->edit_text_title_new;

        $data = BedType::where("id_bed_type" , $request->edit_hidden_textfield)->update($array_input);

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
