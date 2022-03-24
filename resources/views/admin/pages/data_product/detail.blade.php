@extends('admin.pages.layouts')

@section('isi_menu')
    

<div class="modal fade" id="editedModal" tabindex="-1" role="dialog" aria-labelledby="editedModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editedModalLabel">Edit Room Category</h5>
                    <button type="button" id="button_editmodal" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#editedModal').modal('hide');">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                Uploading Images .. <strong>Please Wait .. </strong>
                            </div>
                            
                            <div class="card-body card-block">

                                    <h4 class="card-title">Please  Wait</h4>
                                    <center>
                                        <div class="spinner-grow" role="status">
                                        <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="spinner-grow text-primary" role="status">
                                        <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="spinner-grow text-secondary" role="status">
                                        <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="spinner-grow text-success" role="status">
                                        <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="spinner-grow text-danger" role="status">
                                        <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="spinner-grow text-warning" role="status">
                                        <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="spinner-grow text-info" role="status">
                                        <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="spinner-grow text-light" role="status">
                                        <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="spinner-grow text-dark" role="status">
                                        <span class="sr-only">Loading...</span>
                                        </div>
                                    </center>
                                </div>

                            </div>
                            
                        </div>

                                    <button type="reset" id="btn_reset_data_gal" class="btn btn-secondary" style="display:none;" id="btn_reset">Reset</button>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="$('#editedModal').modal('hide');">Cancel</button>
                    
                    <button type="submit" class="btn btn-primary">Confirm</button>
                </div>

            </div>
        </div>

</div>

            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">

                <form method="post" name="frm_detail_room" id="frm_detail_room" >

                {{ csrf_field() }}
                <input type="hidden" name="_method" id="_method" value="post" />
                <input type="hidden" name="t_index_new" id="t_index_new" value="<?php echo $roomcat[0]->id_kategori_room; ?>" />
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor"><i class="icon-picture"></i> &nbsp; <b> <?php echo $roomcat[0]->nama_kategori; ?> </b> </h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Room Category</li>
                            </ol>
                            
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-5 col-md-5" style="position:relative;">
                        <div class="card">
                            <div class="user-bg"> 
                                <input type="file" name="f_new_upload" id="f_new_upload" style="display:none;" onchange="image_preview(this);" />
                                <div onclick="$('#f_new_upload').click();" style="cursor:pointer; position:absolute; top:10px; right:10px; width:40px; border-radius:5px; height:40px; padding:10px; background:rgba(50,50,50,0.5);">
                                    <i class="icon-camera" style="font-size:21px; color:#FFFFFF; text-align:center;"></i>
                                </div>
                                <img width="100%" alt="user" id="img_preview_new" name="img_preview_new" src="<?php echo url('public/GambarRoomCat/'.$roomcat[0]->foto); ?>" /> 
                            </div>
                            <div class="card-body">
                                <!-- .row -->
                                <div class="row text-left m-t-10">
                                    <div class="col-md-12 border-end">
                                        <strong>Nama Kategori Room :</strong>
                                        <p><input type="text" class="form-control" name="t_kategori_room" id="t_kategori_room" placeholder="Kategori Room" value="<?php echo $roomcat[0]->nama_kategori; ?>" /></p>
                                    </div>
                                    <div class="col-md-12 border-end">
                                        <strong>Alt Desc :</strong>
                                        <p><input type="text" class="form-control" name="t_alt_desc" id="t_alt_desc" placeholder="Alt Desc Cat Room" value="<?php echo $roomcat[0]->deskripsi; ?>"/></p>
                                    </div>
                                    <div class="col-md-6 border-end">
                                        <strong>Room Price  :</strong>
                                        <p><input type="number" class="form-control" name="t_harga_desc" id="t_harga_desc"  value="<?php echo $roomcat[0]->harga; ?>" /></p>
                                    </div>
                                    <div class="col-md-6  border-end">
                                        <strong>Room Total :</strong>
                                        <p><input type="number" class="form-control" name="t_jml_desc" id="t_jml_desc" value="<?php echo $roomcat[0]->jumlah_kamar; ?>" /></p>
                                    </div>
                                    <div class="col-md-6 border-end">
                                        <strong>Room Size  :</strong>
                                        <p><input type="number" class="form-control" name="t_room_size" id="t_room_size"  value="<?php echo $roomcat[0]->room_size; ?>" /></p>
                                    </div>
                                    <div class="col-md-6  border-end">
                                        <strong>Occupancy :</strong>
                                        <p><input type="number" class="form-control" name="t_occupancy" id="t_occupancy" value="<?php echo $roomcat[0]->occupancy; ?>" /></p>
                                    </div>
                                    <div class="col-md-12 border-end">
                                        <strong>Bed Type :</strong>
                                        <p>
                                        <select class="form-control" name="t_bed_type" id="t_bed_type">
                                            <option value="">Pilih Type Bed</option>
                                            <?php
                                            foreach($bedtype as $rowsall){
                                                if($rowsall->id_bed_type == $roomcat[0]->bed_type){
                                                ?>
                                                    <option value="<?php echo $rowsall->id_bed_type; ?>" selected="selected"><?php echo $rowsall->nama_bed; ?></option>
                                                <?php
                                                }
                                                else{
                                                ?>
                                                    <option value="<?php echo $rowsall->id_bed_type; ?>"><?php echo $rowsall->nama_bed; ?></option>
                                                <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                        </p>
                                    </div>
                                    <div class="col-md-12 border-end">
                                        <strong>Booking Link :</strong>
                                        <p><input type="text" class="form-control" name="t_booking_desc" id="t_booking_desc" placeholder="Booking Link" value="<?php echo $roomcat[0]->booking_link; ?>" /></p>
                                    </div>
                                </div>
                                <hr>

                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-7 col-md-7">
                        <div class="card">
                            <div class="card-body">

                    <ul class="nav nav-tabs" role="tablist">
                        
                        <li class="nav-item"> 
                            <a class="nav-link active"  data-bs-toggle="tab" href="#home-tabs" role="tab">
                                <span class="hidden-sm-up"><i class="icon-picture"></i></span> <span class="hidden-xs-down"> &nbsp; Sub Images </span></a> 
                        </li>

                        <li class="nav-item"> 
                            <a class="nav-link"  data-bs-toggle="tab" href="#media-tabs" role="tab">
                                <span class="hidden-sm-up"><i class="ti-list"></i></span> <span class="hidden-xs-down"> &nbsp; Media  </span></a> 
                        </li>

                        <li class="nav-item"> 
                            <a class="nav-link"  data-bs-toggle="tab" href="#deskripsi-tabs" role="tab">
                                <span class="hidden-sm-up"><i class="ti-list"></i></span> <span class="hidden-xs-down"> &nbsp; Deskripsi  </span></a> 
                        </li>

                        <li class="nav-item"> 
                            <a class="nav-link"  data-bs-toggle="tab" href="#facilities-tabs" role="tab">
                                <span class="hidden-sm-up"><i class="ti-list"></i></span> <span class="hidden-xs-down"> &nbsp; Facilities  </span></a> 
                        </li>
                                
                    </ul>

                <div class="tab-content tabcontent-border" style="margin-top:20px; border:none;">

                    <div class="tab-pane" id="media-tabs" role="tabpanel">
                        <div class="col-md-12" style="margin-top:30px;">
                            360 Virtual Tour Link : <br />
                            <input type="text" placeholder="Input Virtual Tour Link" name="inp_virtual_tour_link" id="inp_virtual_tour_link" class="form-control" value="<?php echo $roomcat[0]->virtual_tour_link; ?>" />
                        </div>

                        <div class="col-md-12" style="margin-top:30px;">
                            Youtube Video Link : <br />
                            <input type="text" placeholder="Input Youtube Video Link"  name="inp_youtube_link" id="inp_youtube_link" class="form-control" value="<?php echo $roomcat[0]->youtube_link; ?>" onChange="replace_teks(this);" onKeyUp="replace_teks(this);" />
                        </div>

                </div>

                <div class="tab-pane" id="facilities-tabs" role="tabpanel">
                    
                    <div class="col-md-12">
                        <div class="row">
                            <?php
                            foreach($facility as $row_fal){
                            $checked_fac = "";
                                foreach($facility_list as $list_fac){
                                    if($row_fal->id_facilities == $list_fac->id_facilities){
                                        $checked_fac = "checked='checked'";
                                        break;
                                    }
                                }
                            ?>
                                <div class="col-md-6" style="margin-top:15px;">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <input type="checkbox" <?php echo $checked_fac; ?> value="<?php echo $row_fal->id_facilities; ?>" name="chk_facilities[]" /> 
                                        </div>
                                        <div class="col-md-11">
                                            <?php echo $row_fal->nama_facilities; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>

                </div>

                    <div class="tab-pane" id="deskripsi-tabs" role="tabpanel">

                        <p></p>

                        <textarea id="mymce" name="mymce">
                            <?php echo $roomcat[0]->deskripsi_kamar;  ?>
                        </textarea>
                        
                    </div>

                    <div class="tab-pane active" id="home-tabs" role="tabpanel">

                        <div class="row">
                                <p></p>

                            <div class="col-md-12 col-12">
                                <Button class="btn btn-success form-control" style="color:#FFFFFF;"><i class="icon-plus"></i> &nbsp; Add Villa Image</Button>
                            </div>
                                
                            <?php
                            $incs = 1;
                            $maxx = 6;

                            $detail_count = count($detail_room);

                            if($detail_count > 6){
                                $maxx = $detail_count;
                            }

                            for($incs = 1; $incs <= $maxx; $incs++){
                            $filename = "";
                            $dis = "display:none;";
                            $back_new = "";
                            $trash = "";

                            $index_room = "";

                            if(isset($detail_room[($incs-1)]->foto)){
                            
                                if($detail_room[($incs-1)]->foto != ""){
                                    $filename = url("public/GambarRoomCat/")."/".$detail_room[($incs-1)]->foto;
                                    $index_room = $detail_room[($incs-1)]->id_room_images;
                                    $dis = "";
                                    $back_new = "background:rgba(50,50,50,0.4);";
                                    $trash = "<Button type='button' style='color:white;' class='form-control btn-danger' onclick='hapus_gambar(\"".$detail_room[($incs-1)]->id_room_images."\",\"".$incs."\")'> <i class='ti ti-trash'></i> &nbsp; Hapus Gambar </Button>";
                                }

                            }
                            // else{

                            // }
                            ?>

                                <div class="col-md-4 col-xs-6 border-end" style="margin-top:20px; cursor:pointer; overflow:hidden; position:relative;"> 
                                    <div class="col-md-12" style="border:2px dashed #CCCCCC; height:250px; overflow:auto;" onClick="document.getElementById('file_subs_new_<?php echo $incs; ?>').click();">
                                    <img id="image_previews_sub_<?php echo $incs; ?>"  style="width:100%; height:250px; <?php echo $dis; ?> object-fit:cover; z-index:10; position:absolute; top:0; right:0;" src="<?php echo $filename; ?>" />
                                    
                                    <div id="overlay_previews_sub_<?php echo $incs; ?>" style="position:absolute; z-index:100; <?php echo $back_new; ?> color:#C5C5C5; top:0; right:0; width:100%; height:250px;">
                                        <center>
                                            <div style="font-size:42px; margin-top:30%;">
                                                <i class="icon-picture"></i> <br />
                                                <span style="font-size:14px;"><i class="icon-plus"></i> &nbsp; Add Image</span>
                                                <input type="file" id="file_subs_new_<?php echo $incs; ?>" name="file_subs_new<?php echo $incs; ?>" style="display:none;" onchange="change_sourcesx(this,'#image_previews_sub_<?php echo $incs; ?>','#overlay_previews_sub_<?php echo $incs; ?>');" />
                                                
                                            </div>
                                        </center>
                                    </div>

                                    </div>
                                    <p></p>
                                    <?php echo $trash; ?>
                                    <input type="hidden" name="t_hidden_index_room<?php echo $incs; ?>" id="t_hidden_index_room<?php echo $incs; ?>" class="form-control" value="<?php echo $index_room; ?>"  />
                                </div>

                            <?php
                            }
                            ?>
                            </div>
                            </div>
                                <br clear="all" />

                        </div>
                    </div>
                </div>
            </div>

            </form>

            <div class="col-md-12">

                <div class="card" style="padding:10px; box-sizing:border-box;">

                <center>
                        
                    <div>
                        <Button class="btn btn-success form-control" id="btn_upload_new" type="button" style="color:#FFFFFF;"><i class="icon-pencil"></i> Update Detail Villa</Button>
                    </div>

                    <p></p>

                    <div style="display:none;" id="div_status_wait">
                        <div class="spinner-border text-success" role="status" style="margin-right:30px;">
                            <span class="sr-only">Loading...</span>
                        </div> <small> Updating Villa Detail ... Please Wait ... </small>
                    </div>

                    <div style="display:none;" id="div_check_wait">
                            <!-- <div class="alert alert-success alert-dismissible">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <span aria-hidden="true"></span> </button>
                                <h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3> 
                            </div> -->
                            <div  style="color:green; font-size:18px;">
                                <i class="ti ti-check"></i> <small> Villa Detail Updated Successfully </small>
                            </div> 
                    </div> 

                </center>

                </div>
            <!-- Column -->
        </div>


       


        <!-- <div style="float:left; margin-right:30px; display:none;" id="div_status_wait">
            <div class="spinner-border text-success" role="status" style="margin-right:30px;">
                <span class="sr-only">Loading...</span>
            </div> <small> Updating Room Detail ... Please Wait ... </small>
        </div>

        <div style="float:left; margin-right:30px; display:none;" id="div_check_wait">
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <span aria-hidden="true"></span> </button>
                    <h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3> 
                </div>
                <div  style="color:green; font-size:18px;">
                    <i class="ti ti-check"></i> <small> Room Detail Updated Successfully </small>
                </div> 
        </div> -->

        </div>
        

        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
         
   <script type="text/javascript">
       //alert("tess");
       
       function change_sourcesx(input , images , overlay){
         $(images).prop("src",window.URL.createObjectURL(input.files[0]));
         $(images).fadeIn('slow');
         $(overlay).css('background','rgba(50,50,50,0.4)');
         $(overlay).css('color','#FFFFFF');
         $(overlay).fadeIn('slow');
       }

       function replace_teks(input){
           var value = input.value;
           value = value.replace("https://youtu.be/","");

           $(input).val(value);
       }

        function get_gallery_image(index){
            
                
                $("#div_gallery_list").html("");

                $.ajax({
                    url: url_menu_apis+"/"+"get_gambar_roomcat", // point to server-side PHP script 
                    data: "cat="+index,                         
                    type: 'get',
                    dataType:"json",
                    success: function(response){
                    // alert(php_script_response); // display response from the PHP script, if any
                        //ambil_berita(response);
                        $.each(response , function(index , element){
                            var res = "";
                            var assets = url_menu_asset + "/GambarRoomCat/thumbnail/"+element.foto;
                            var assets_big = url_menu_asset + "/GambarRoomCat/"+element.foto;

                            res = '<div class="col-lg-4 col-md-6" id="div_gallery_thumbs'+element.id_kategori_room+'"><div class="card"><div class="el-card-item">';
                            res += '<div class="el-card-avatar el-overlay-1">' + '<img src="'+assets+'" alt="user" style="object-fit: cover; height:200px;" />';
                            res += '<div class="el-overlay"><ul class="el-info">';
                            res += '<li><a class="btn default btn-outline image-popup-vertical-fit" href="'+assets_big+'"><i class="icon-magnifier"></i></a></li>';
                            res += '<li><a class="btn default btn-outline" onclick="edit_modal('+element.id_kategori_room+')" href="javascript:void(0);"><i class="icon-pencil"></i></a></li>';

                            res += '<li style="margin-left:100px;"><a class="btn default btn-outline" href="javascript:void(0);" onclick="hapus_modal('+element.id_kategori_room+')" ><i class="icon-trash"></i></a></li>';
                            
                            res += '</ul></div></div><div class="el-card-content"><h3 class="box-title"><b> '+element.nama_kategori+'</b> </h3> <p></p> <h4><i class="icon-list"></i> &nbsp;'+element.deskripsi+'</h4>';
                            res += '<br/> </div>';

                            var actived = '<center><div class="el-card-content"><div onmouseover="this.style.opacity=0.8;" onmouseout="this.style.opacity=1;" style="background:green; padding:10px; width:30%; cursor:pointer; margin:auto; color:#ffffff; border-radius:10px;"><i class="icon-plus"></i> Add Detail </div></b></center></div>';
                            res += actived;

                            var harga_kmr = RupiahFormat(element.harga);

                            var actived = '<div style="padding:0 10px;"><div style="float:left;"><h4>Rp. '+harga_kmr+'</h4></div> <div style="float:right;"><h4> Room : '+element.jumlah_kamar+'</h4></div></div><br clear="all" />';
                            res += actived;

                            res += "</div></div>";

                            $("#div_gallery_list").append(res);

                            $('.image-popup-vertical-fit').magnificPopup({type:'image'});

                        });

                        // $("#div_gallery_list").html(data_list);
                        //openView();
                    }
                });
        }

        function image_preview(input){
           //$("#")
           var obj = URL.createObjectURL(input.files[0]);
           $("#img_preview_new").prop("src" , obj);

       }

        function hapus_gambar(index,aksi){
        
            var conn = confirm("Apakah anda yakin hapus data ini ?");

            if(conn == true){
                $.ajax({
                    type:"GET",
                    url:url_menu_apis+"/"+"hapus_gambar_gallery/"+index,
                    data:"id="+index+"&inc="+aksi,
                    success:function(data){
                        if(data=="success"){
                            $("#image_previews_sub_"+aksi).prop("src","");
                            $("#image_previews_sub_"+aksi).hide();
                        }
                    }
                })
            }

        }

        //alert("tess");
        function hapus_modal(index){
            var con = confirm("Hapus Data Ini ?");

            if(con == true){
                $.ajax({
                    type:"GET",
                    data:"id="+index,
                    url:url_menu_apis+"/"+"hapus_slideshow/"+index,
                    success:function(data){
                        $("#div_gallery_thumbs"+index).fadeOut();
                    }
                });
            }

        }

        function edit_modal(index){
            $("#btn_reset_data_gal").click();

            $.ajax({
                type:"GET",
                data:"id="+index,
                url:url_menu_apis+"/"+"get_detail_slideshow/"+index,
                dataType:"json",
                success:function(data){

                    if(data[0].is_slide == 1){
                        $("#chk_is_slide_edit").prop("checked" , 1);
                    }

                    
                    $("#edit_text_title_new").val(data[0].title);
                    $("#edit_text_desc_new").val(data[0].alt);
                    $("#edit_hidden_textfield").val(data[0].id_gambar_home);
                    $("#edit_desktop_image").prop("src" , url_menu_asset + "/GambarSlides/thumbnail/"+data[0].image_name);
                    $("#edit_current_desktop_image").prop("src" , "<?php echo url("public")."/default.png"; ?>");
                    
                    
                    $("#editedModal").modal('show');

                }
            });

           
        }

        function submit_edit_gambar_form(form){

        var formData = new FormData(document.getElementById('form_multi_edit'));
        formData.append("_method" , "put");
        //console.log("formdata" , formData);

        //console.log("submits" , );
        $.ajax({
            data:formData,
            url:url_menu_apis+"/"+"post_gambar_baru_edit",
            type:"post",
            processData: false,
            contentType: false,
            cache: false,
            success:function(data){
                //$("#register_user_new").val();
                if(data == "success"){
                    $("#editedModal").modal("hide");
                    $("#btn_reset").click();

                    get_gallery_image(0);
                }
            }
        });

        return false;

    }

        
        $(document).ready(function() {
            // Basic

            $("#input-file-disable-remove").dropify();

            get_gallery_image(0);


            $("#btn_upload_new").click(function(){
                
                //var file_data =  $('#uploadinput').prop('files')[0]; 
                //var file_video = $('#videoinput').prop('files')[0]; 

                var form_data = new FormData(document.getElementById("frm_detail_room")); 
                form_data.append("desc_long",tinymce.get("mymce").getContent());

                //form_data.append('uploadinput', file_data);
                //$('#editedModal').modal('show');
                $("#div_status_wait").show();
                
               
                //alert(form_data);                             
                $.ajax({
                    url: url_menu_apis+"/"+"post_data_updateroom", // point to server-side PHP script 
                    dataType: 'text',  // what to expect back from the PHP script, if anything
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,
                    async:false,                         
                    type: 'post',
                    beforeSend: function(){
                        // Handle the beforeSend event
                        show_loader();
                    },
                    success: function(response){
                    // alert(php_script_response); // display response from the PHP script, if any
                        //ambil_berita(response);
                        //get_gallery_image(0);
                        //alert("success");
                        if(response == "success") {
                            //$('#button_editmodal').click();
                            $("#div_status_wait").hide();
                            $("#div_check_wait").show();
                            
                            $("#select_kategori").val("");
                            $("#text_title_new").val("");
                            $("#text_desc_new").val("");

                            hide_loader();

                        }
                        //openView();
                    }
                });


            });

            // drEvent.on('dropify.beforeImagePreview', function(event, element) {
            //     alert("tes");
            //     //return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            // });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify');
            
            $('#toggleDropify').on('click', function(e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            });

        });
    </script>

   @stop
