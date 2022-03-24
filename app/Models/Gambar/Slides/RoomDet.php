<?php

namespace App\Models\Gambar\Slides;

use Illuminate\Database\Eloquent\Model;

class RoomDetail extends Model
{   
    //public $timestamps = false; 
    //
    protected $fillable = ['id_room_images', 'alt', 'title','aktif'];
    protected $table='tb_room_images';

    public static function get_detail_roomdet($index){
        $data = RoomDetail::where("id_kategori_room",$index)->orderBy("id_room_images" , "desc")->get();

        return $data;
    }

    public static function hapus_foto_gallery($index){
        $data = RoomDetail::where("id_room_images",$index)->delete();

        return $data;
    }

    public static function get_detail_roomcat($request,$index){
        $data = RoomKat::where("id_kategori_room",$index)->where("aktif","1")->orderBy("id_kategori_room" , "desc")->get();

        return $data;
    }

    public static function get_data_gallery_bykat($request,$cat){

        $data = Gallery::join("tb_kategori_gallery" , "tb_kategori_gallery.id_kategori_gallery" , "tb_gallery.id_kategori")->where("tb_gallery.id_kategori",$cat)->where("tb_gallery.aktif","1")->orderBy("tb_gallery.id_gallery" , "desc")->get();

        return $data;

    }

    public static function post_data_updateroom($request){

        $files = $request->file('file_subs_new');

        $array_input = array();

        $array_input["nama_kategori"]                         = $request->t_kategori_room;
        $array_input["deskripsi"]                             = $request->t_alt_desc;
        $array_input["deskripsi_kamar"]                       = $request->mymce;
        $array_input["harga"]                                 = $request->t_harga_desc;
        $array_input["jumlah_kamar"]                          = $request->t_jml_desc;
        $array_input["booking_link"]                          = $request->t_booking_desc;

        // if($originalImage != ""){
        //     $array_input["image_name"]              = $slider_name;
        //     $array_input["url_path"]                = "/GambarGallery/thumbnail/".$slider_name;
        // }

        // echo "tes";
        // return;

        $data = RoomKat::where("id_kategori_room" , $request->t_index_new)->update($array_input);

        //$jml = count($files);
        
        $roomkat = "";
        $index_all = 1;

        //echo $jml."<p>&nbsp;</p>";
        for($an = 1 ; $an <= 6; $an++){
            $room_kat = $request->t_kategori_room." - ".$index_all;
            //$slider_name = time().str_shuffle("abcdefghijklmnopqrstuvwxyz").".".$rows->getClientOriginalExtension();
            $req_file = $request->file('file_subs_new'.$an);
            $input_el = $request->input("t_hidden_index_room".$an);

            if($req_file == ""){
                echo "kosong<p></p>";
                //return;
            }
            else{
                echo "add ".$req_file;

                if($req_file != ""){
                    $width = Image::make($originalImage)->width();
                    $thumbnailImage = \Intervention\Image\Facades\Image::make($rows);
                    $thumbnailPath = public_path()."/GambarRoomCat/thumbnail/";
                    $originalPath = public_path()."/GambarRoomCat/";
                    $thumbnailImage->save($originalPath.$slider_name);

                    $thumbnailImage->resize(($thumbnailImage->width()/4),($thumbnailImage->height()/4));
                    $thumbnailImage->save($thumbnailPath.$slider_name); 

                    if($input_el == ""){
                        echo "add new";

                    //RoomDetail::where("id_room_detail" , $request->t_index_new)->update(array("foto" => $request->));
                        $room                                = new RoomDetail;
                        $room->alt                           = $room_kat;
                        $room->title                         = $room_kat;
                        $room->foto                          = $slider_name;
                        $room->id_kategori_room              = $request->t_index_new;
                        $room->url_path                      = "GambarRoomCat/thumbnail/".$slider_name;

                        $room->save();
                        
                        $index_all++;

                    }
                    else{
                        RoomDetail::where("id_room_images",$input_el)->update(array("foto" => $slider_name , "url_path" => "GambarRoomCat/thumbnail/".$slider_name));
                    }
                }

            }

        }
        //return count($files);
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

    public static function post_data_roomcat($request){
        $originalImage= $request->file('file_upload_dropzone');
        $slider_name = time().str_shuffle("abcdefghijklmnopqrstuvwxyz").".".$originalImage->getClientOriginalExtension();
        
        //$width = Image::make($originalImage)->width();

        $thumbnailImage = \Intervention\Image\Facades\Image::make($originalImage);
        $thumbnailPath = public_path()."/GambarRoomCat/thumbnail/";
        $originalPath = public_path()."/GambarRoomCat/";
        $thumbnailImage->save($originalPath.$slider_name);

        $thumbnailImage->resize(($thumbnailImage->width()/4),($thumbnailImage->height()/4));

        $thumbnailImage->save($thumbnailPath.$slider_name); 


        $data                                         = new RoomKat;
        $data->deskripsi                              = $request->text_desc_new;
        $data->nama_kategori                          = $request->text_title_new;
        $data->harga                                  = $request->text_harga_new;
        $data->jumlah_kamar                           = $request->text_jumlah_new;
        $data->foto                                   = $slider_name;
        
        $data->url_path                               = "/GambarRoomCat/thumbnail/".$slider_name;
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

}
