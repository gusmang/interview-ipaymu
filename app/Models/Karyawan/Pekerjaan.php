<?php

namespace App\Models\Karyawan;

use Illuminate\Database\Eloquent\Model;
use Config;



class Pekerjaan extends Model
{   
    //public $timestamps = false; 
    //
    protected $fillable = ['id_list_pekerjaan', 'nama_pekerjaan','created_at','updated_at','aktif'];
    protected $table='tb_list_pekerjaan';

    public static function get_data_pekerjaan($request){
        $data = Pekerjaan::where("aktif","1")->orderBy("id_list_pekerjaan" , "desc")->paginate(Config::get('myconfig.limitData'));

        return $data;
    }
    
    public static function get_data_pekerjaan_custom($request,$field,$urut){
        $data = Pekerjaan::where("aktif","1")->orderBy($field , $urut)->get();

        return $data;
    }

    public static function get_detail_pekerjaan($request,$index){
        $data = Pekerjaan::where("id_list_pekerjaan",$index)->firstOrfail();

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

    public static function tambah_pekerjaan($request){
        $data                          = new Pekerjaan;
        $data->nama_pekerjaan          = $request->inp_nama_pekerjaan;
        $data->aktif                   = "1";

        $data->save();

        return $data;
    }

    public static function update_pekerjaan($request){
        $data = array();

        $data["nama_pekerjaan"] = $request->edit_text_title_new;

        $data = Pekerjaan::where("id_list_pekerjaan" , $request->edit_hidden_textfield)->update($data);

        return $data;
    }

    public static function post_hapus_pekerjaan($request,$index){

        $data = Pekerjaan::where("id_list_pekerjaan" , $index)->update(array("aktif" => "0"));

        return $data;

    }

    
}
