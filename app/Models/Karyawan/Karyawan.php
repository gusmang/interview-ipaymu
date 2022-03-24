<?php

namespace App\Models\Karyawan;

use Illuminate\Database\Eloquent\Model;
use Config;
use Webpatser\Uuid\Uuid;
use DB;

use Request;
use lluminate\Pagination\Paginator;

use App\Models\Karyawan\Pekerjaan;

class Karyawan extends Model
{   
    //public $timestamps = false; 
    //
    protected $fillable = ['nip', 'email','created_at','updated_at','aktif'];
    protected $table='tb_karyawan';

    public static function get_data_karyawan($request){
        $data = Karyawan::join("tb_list_pekerjaan" , "tb_list_pekerjaan.id_list_pekerjaan","tb_karyawan.id_list_pekerjaan")->where("tb_karyawan.aktif","1")->orderBy("tb_karyawan.nip" , "desc")->paginate(Config::get('myconfig.limitData'));

        return $data;
    }

    public static function get_data_karyawan_all($request){
        $data = Karyawan::join("tb_list_pekerjaan" , "tb_list_pekerjaan.id_list_pekerjaan","tb_karyawan.id_list_pekerjaan")->orderBy("tb_karyawan.nip" , "desc")->get();

        return $data;
    }

    public static function get_data_karyawan_aktif($request){
        $data = Karyawan::join("tb_list_pekerjaan" , "tb_list_pekerjaan.id_list_pekerjaan","tb_karyawan.id_list_pekerjaan")->where("tb_karyawan.aktif","1")->orderBy("tb_karyawan.nip" , "desc")->get();

        return $data;
    }

    public static function get_data_karyawan_search($request){
        $awal = "select tb_karyawan.* , tb_list_pekerjaan.* from tb_karyawan left join tb_list_pekerjaan on tb_list_pekerjaan.id_list_pekerjaan = tb_karyawan.id_list_pekerjaan where ";

        $param_search = "";

        if(isset($request->nip)){
            $param_search .= "tb_karyawan.nip = '".trim($request->nip)."' and ";
        }

        if(isset($request->name)){
            $param_search .= "tb_karyawan.nama like '%".trim($request->name)."%' and ";
        }

        if(isset($request->job)){
            $param_search .= "tb_karyawan.id_list_pekerjaan = '".trim($request->job)."' and ";
        }

        $awal .= $param_search;

        $offset = 0;
        $pages = 1;

        if(isset($request->page)){
            $page   = ($request->page <= 1 ? "0" : ($request->page-1));
            $pages  = $request->page;

            $offset = ($page * Config::get('myconfig.limitData'));
            //$offset = ($offset > 0 ? ($offset-1) : $offset);
        }

        $query_res = substr($awal , 0 , strlen($awal)-5)." group by tb_karyawan.nip limit $offset,".Config::get('myconfig.limitData');

        $dataAll = DB::select(substr($awal , 0 , strlen($awal)-5)." group by tb_karyawan.nip");

        $lastPage = ceil(count($dataAll)/Config::get('myconfig.limitData'));
        $prevPage = ($pages <= 2 ? ($pages-1) : $pages);

        $data = DB::select($query_res);
        $list = array();

        $list["current_page"] = $pages;
        $list["data"] = $data;

        $list["first_page_url"] = url(Config::get('myconfig.adminUrl').'/administrator/karyawan?page=1');
        $list["from"] = $offset+1;
        $list["last_page"] = $lastPage;
        $list["last_page_url"] = url(Config::get('myconfig.adminUrl').'/administrator/karyawan?page='.$lastPage);
        $list["next_page_url"] = url(Config::get('myconfig.adminUrl').'/administrator/karyawan?page='.($pages+1));
        $list["path"] = url(Config::get('myconfig.adminUrl').'/administrator/karyawan');
        $list["per_page"] = Config::get('myconfig.limitData');
        $list["prev_page_url"] = url(Config::get('myconfig.adminUrl').'/administrator/karyawan?page='.$prevPage);
        $list["to"] = $offset;
        $list["total"] = count($dataAll);
        //$result_p = new Paginator($data, Config::get('myconfig.limitData'), Request::input('page'),['path' => Request::url() ]);

        //return $list;
        //$result_p = new \Illuminate\Pagination\Paginator($data, $lastPage);
        //return $result_p;
        //return $query_res;

        $myPaginator = new \Illuminate\Pagination\LengthAwarePaginator($data, count($dataAll), Config::get('myconfig.limitData'), $pages, ['path' => Request::url() ]);
        return $myPaginator;
    }

    public static function get_detail_karyawan($request,$index){
        $data = Karyawan::where("uuid",$index)->firstOrfail();

        return $data;
    }

    public static function get_detail_bedtype($request,$index){
        $data = About::where("id_bed_type",$index)->where("aktif","1")->orderBy("id_bed_type" , "desc")->get();

        return $data;
    }

    public static function tambah_karyawan($request){
        $data                          = new Karyawan;

        $data->uuid                         = Uuid::generate();
        $data->nip                          = $request->inp_nip_karyawan;
        $data->nama                         = $request->inp_nama_karyawan;
        $data->email                        = $request->inp_email_karyawan;
        $data->tanggal_lahir                = $request->inp_tanggal_lahir;
        $data->id_list_pekerjaan            = $request->inp_nama_pekerjaan;
        $data->no_wa                        = $request->inp_nowa_karyawan;
        $data->foto                         = "";

        $data->aktif                        = "1";

        $data->save();

        return $data;
    }

    public static function generate_random_karyawan($request){
        $rand_num                           = rand(8,15);
        $nama_user                          = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789") , 0 , $rand_num);
        
        $rand_nums                          = rand(1000,9999);
        $pekerjaan                          = Pekerjaan::get_rand_pekerjaan($request);

        $tanggal                            = rand(1,31);
        $tahun                              = rand(1980,2005);
        $bulan                              = rand(1,12);

        $bulan                              = ($bulan <= 9 ? "0".$bulan : $bulan);

        $tgl_lahir                          = $tahun."-".$bulan."-".$tanggal;

        if($tgl_lahir == "0000-00-00"){
            $tgl_lahir = "2000-01-01";
        }

        $rand_email = rand(0,3);
        

        $jml_data = count(Karyawan::get_data_karyawan_all($request));
        //$urutan = (int) substr($jml_data["last"],1 , strlen($jml_data["last"])-1);
        $jml_data++;

        $nip = "1".sprintf('%05s', $jml_data);

        $arr_email = array("@gmail.com","@rocketmail.com","@yahoo.com","@yahoo.co.id");

        $no_wa                              = "6281".substr(str_shuffle("0123456789"),0 , 8);

        $data                               = new Karyawan;

        $data->uuid                         = Uuid::generate();
        $data->nip                          = $nip;
        $data->nama                         = $nama_user;
        $data->email                        = $nip.$arr_email[$rand_email];
        $data->tanggal_lahir                = $tgl_lahir;
        $data->id_list_pekerjaan            = $pekerjaan;
        $data->no_wa                        = $no_wa;
        $data->foto                         = "";

        $data->aktif                        = "1";

        $data->save();

        return $data;
    }

    public static function update_karyawan($request){
        $data = array();

        $data["nip"]    = $request->edit_inp_nip_karyawan;
        $data["nama"]   = $request->edit_inp_nama_karyawan;
        $data["email"]  = $request->edit_inp_email_karyawan;
        $data["tanggal_lahir"] = $request->edit_inp_tanggal_lahir;
        $data["id_list_pekerjaan"] = $request->edit_inp_nama_pekerjaan;
        $data["no_wa"] = $request->edit_inp_nowa_karyawan;
        $data["foto"] = "";

        $data = Karyawan::where("uuid" , $request->edit_hidden_textfield)->update($data);

        return DB::getPdo()->lastInsertId();;
    }

    public static function post_hapus_karyawan($request,$index){

        $data = Karyawan::where("uuid" , $index)->update(array("aktif" => "0"));

        return $data;

    }

    
}
