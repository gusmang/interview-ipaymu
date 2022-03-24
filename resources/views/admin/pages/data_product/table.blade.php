@extends('admin.pages.layouts')

@section('isi_menu')
    

<div class="modal fade" id="editedModal" tabindex="-1" role="dialog" aria-labelledby="editedModalLabel" aria-hidden="true">
    <form id="form_multi_edit" name="form_multi_edit" enctype="multipart/form-data" method="put" onSubmit="submit_edit_gambar_form(this); return false;">
    
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editedModalLabel">Form View Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#editedModal').modal('hide');">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Form</strong> View  Product
                                    </div>
                                    <div class="card-body card-block">

                                   
                                            {{ csrf_field() }}
                                            <input type="hidden" name="edit_hidden_textfield" id="edit_hidden_textfield" />
                                            <input type="hidden" name="_method" id="_method" value="put" />


                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Product Name</label></div>
                                                <div class="col-12 col-md-9"><input type="text" id="edit_text_title_new" name="edit_text_title_new" required="required" class="form-control" /><small class="form-text text-muted">Masukkan Title</small></div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Price </label></div>
                                                <div class="col-12 col-md-9"><input type="number" id="edit_text_price_new" name="edit_text_price_new" required="required"  class="form-control"><small class="form-text text-muted">Masukkan Alt Desc</small></div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Deskripsi</label></div>
                                                <div class="col-12 col-md-9">
                                                    <textarea id="edit_text_deskripsi_new" name="edit_text_deskripsi_new" required="required" rows="4" class="form-control">

                                                    </textarea>
                                                    <small class="form-text text-muted">Masukkan Title</small>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Upload Gambar <br /></label></div>
                                                <div class="col-12 col-md-9"><input type="file" id="edit_f_upload_gambar" onchange="document.getElementById('edit_current_desktop_image').src = window.URL.createObjectURL(this.files[0]);" name="edit_f_upload_gambar" class="form-control"> <!-- <small class="form-text text-muted">Masukkan Nama Kategori</small> --> </div>
                                                <p>&nbsp;</p>
                                                <div class="col col-md-6"><div class="col-md-12"> <img src="" id="edit_desktop_image" class="img-fluid" style="opacity:0.5;" /> </div> </div>
                                                <div class="col col-md-6"><div class="col-md-12">  <img src="<?php echo url("public")."/default.png"; ?>" id="edit_current_desktop_image" class="img-fluid"  /> </div> </div>
                                            </div>
                                            
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
    </form>

</div>

            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Form  View Product</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Form  View Product</li>
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div style="float:right;"><span id="span_down_arrow" style="text-align:right; display:none; cursor:pointer;" onClick="$('#span_down_arrow').hide(); $('#span_up_arrow').show();  $('#form_upload_dropzone').slideDown('slow');"><i class=" ti-angle-up"></i></span> <span id="span_up_arrow" style="text-align:right;  cursor:pointer;" onClick="$('#span_down_arrow').show(); $('#span_up_arrow').hide();  $('#form_upload_dropzone').slideUp('slow');"><i class=" ti-angle-down"></i></span></div>
                                <div style="float:left;"><h4 class="card-title">List  View Product </h4></div>
                                <br clear="all" /><p></p>
                                <!-- <h6 class="card-subtitle">Upload File Gallery Anda <code>.dropzone</code> to form.</h6> -->
                                
                                
                                <form action="#" class="dropzone" method="post" enctype="multipart/form-data" id="form_upload_dropzone">
                                <p></p>
                                <h6 class="card-subtitle">&nbsp; Upload File Product Anda Di sini </h6>
                                
                                {{ csrf_field() }}

                                    <div class="row" style="padding:20px; box-sizing:border-box;">
                                        
                                        

                                        <div class="col-md-6" style="margin-top:20px;">
                                            Product Name :   <span id="span_title_new" class="sp_req_class" style="color:#FF0000; display:none;"> ( Required ) </span> 
                                            <input type="text" class="form-control" name="text_title_new" id="text_title_new" placeholder="input title" />
                                        </div>

                                        <div class="col-md-6" style="margin-top:20px;">
                                            Price :   <span id="span_harga_new" class="sp_req_class" style="color:#FF0000; display:none;"> ( Required ) </span> 
                                            <input type="number" class="form-control" name="text_harga_new" id="text_harga_new" value="0" />
                                        </div>

                                        <div class="col-md-12" style="margin-top:20px;">
                                            Deskripsi :  <span id="span_alt_new" class="sp_req_class" style="color:#FF0000; display:none;"> ( Required ) </span> 
                                            <textarea class="form-control" name="text_desc_new" id="text_desc_new" placeholder="input alt desc" cols="4"></textarea>
                                        </div>

                                    </div>
                                    <div style="font-size:13px; text-align:right; margin-top:20px;"> <span id="span_files_new" class="sp_req_class" style="color:#FF0000; display:none;"> ( Required ) &nbsp; </span>  <small> <i> *) Max Size 1Mb </i> </small> </div>
                                    <div class="fallback">
                                        <!-- <input name="file" type="file" multiple /> -->
                                        <input type="file" id="input-file-disable-remove" name="file_upload_dropzone" class="dropify" data-show-remove="false"  data-max-file-size="1M" />
                                    </div>
                                        <div class="col-md-12">
                                            
                                            <Button class="btn btn-success text-white form-control" type="button" name="btn_upload_new" id="btn_upload_new">
                                                <b> <i class="icons-Data-Save"></i> &nbsp; Submit Data </b>
                                            </Button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
             
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->

                                <!-- Tab panes ss-->
                <div class="tab-content tabcontent-border" style="margin-top:20px;">
                    <div class="tab-pane active" id="home-tabs" role="tabpanel">

                    <div class="row el-element-overlay" id="div_gallery_list">
                    <!-- 
                    <div class="col-md-12">
                        <h4 class="card-title">Gallery page</h4>
                        <h6 class="card-subtitle m-b-20 text-muted">you can make gallery like this</h6>
                    </div> 
                    -->
                    <?php
                    //print_r($data);
                        foreach($data as $product){
                            $res = "";
                            $assets = url("public/GambarProduct/".$product->foto);
                            $assets_big = url("public/GambarProduct/".$product->foto);

                            $descr = $product->deskripsi;

                            if($descr == ""){
                                $descr = "<small style='font-size:11px;'> - Belum Ada Deskripsi - </small>";
                            }

                            $res .= '<div class="col-lg-4 col-md-6" id="div_gallery_thumbs'.$product->id_product.'"><div class="card"><div class="el-card-item">';
                            $res .= '<div class="el-card-avatar el-overlay-1">'.'<img src="'.$assets_big.'" alt="user" style="object-fit: cover; height:200px;" />';
                            $res .= '<div class="el-overlay"><ul class="el-info">';
                            $res .= '<li><a class="btn default btn-outline image-popup-vertical-fit" href="'.$assets_big.'"><i class="icon-magnifier"></i></a></li>';
                            $res .= '<li><a class="btn default btn-outline" onclick="edit_modal('.$product->id_product.')" href="javascript:void(0);"><i class="icon-pencil"></i></a></li>';

                            $res .= '<li style="margin-left:100px;"><a class="btn default btn-outline" href="javascript:void(0);" onclick="hapus_modal('.$product->id_product.')" ><i class="icon-trash"></i></a></li>';
                            
                            $res .= '</ul></div></div><div class="el-card-content"><h3 class="box-title"><b> '.$product->nama_product.'</b> </h3> <p></p> <div style="height:100px; padding:10px; overflow:hidden;"> <h4> &nbsp;<small>'.$product->deskripsi.'</small></h4></div>';
                            $res .= '<br/> </div>';

                            $actived = '<div class="col-md-12"> <div class="row justify-content-center"><div class="col-md-5"> <div class="el-card-content"><div onmouseover="this.style.opacity=0.8;" onmouseout="this.style.opacity=1;" style="background:green; padding:10px; width:100%; cursor:pointer; margin:auto; color:#ffffff; border-radius:10px;" onClick="edit_modal('.$product->id_product.')"><i class="icon-pencil"></i> Edit </div></b></div></div>'
                                        .'<div class="col-md-5"> <Button class="btn-danger form-control text-white" onclick="hapus_modal('.$product->id_product.')"><i class="icon-trash"></i> Hapus</Button> </div> </div></div></div>';
                            $res .= $actived;

                            $harga_kmr = format_rupiah($product->harga);

                            $actived = '<div style="padding:0 10px;"><div style="text-align:center;"><h4>Rp. '.$harga_kmr.'</h4></div> </div><br clear="all" />';
                            $res .= $actived;

                            $res .= "</div></div>";

                            echo $res;
                        }
                    ?>

                    <?php
                        
                    ?>

                    <div id="pagination">
                            <div style="float:left; margin:20px 30px;">
                                Total <b> ( <?php echo ($totals); ?> )</b> Data Keseluruhan
                            </div>

                            <div style="float:right; margin:20px 30px;">
                                <ul class="pagination">
                                    @include('admin.pagination.limit_links', ['paginator' => $data])
                                </ul>
                            </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->

         
   <script type="text/javascript">
       //alert("tess");
       $('.image-popup-vertical-fit').magnificPopup({type:'image'});

        function hapus_modal(index){
            var con = confirm("Hapus Data Ini ?");

            if(con == true){
                $.ajax({
                    type:"delete",
                    data:"id="+index+"&_method=delete",
                    url:url_menu_apis+"/"+"hapus_product/"+index,
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
                url:url_menu_apis+"/"+"get_detail_product/"+index,
                dataType:"json",
                success:function(data){

                    $("#edit_text_title_new").val(data.nama_product);
                    $("#edit_text_price_new").val(data.harga);
                    $("#edit_text_deskripsi_new").val(data.deskripsi);
                    $("#edit_hidden_textfield").val(data.id_product);
                    $("#edit_desktop_image").prop("src" , url_menu_asset + "/GambarProduct/thumbnail/"+data.foto);
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
            url:url_menu_apis+"/"+"post_product_edit",
            type:"post",
            processData: false,
            contentType: false,
            cache: false,
            success:function(data){
                //$("#register_user_new").val();
                if(data == "success"){
                    // $("#editedModal").modal("hide");
                    // $("#btn_reset").click();

                    // get_gallery_image(0);
                    window.location = url_menu_apis+"/"+"product-list";
                }
            }
        });

        return false;

    }

        
        $(document).ready(function() {
            // Basic

            $("#input-file-disable-remove").dropify();

            //get_gallery_image(0);


            $("#btn_upload_new").click(function(){

                var teks_title      = $("#text_title_new").val();
                var teks_desc_title = $("#text_desc_new").val();

                var files           = $("#input-file-disable-remove").val();


                if(teks_title == ""){
                    $("#span_title_new").show();
                    //return false;
                }
                else{
                    $("#span_title_new").hide();
                }

                if(teks_desc_title == ""){
                    $("#span_alt_new").show();
                    //return false;
                }
                else{
                    $("#span_alt_new").hide();
                }

                if(files == ""){
                    $("#span_files_new").show();
                    //return false;
                }
                else{
                    $("#span_files_new").hide();
                }

                if(teks_title == "" || teks_desc_title == "" || files == ""){
                    return false;
                }
                
                //var file_data =  $('#uploadinput').prop('files')[0]; 
                //var file_video = $('#videoinput').prop('files')[0]; 

                var form_data = new FormData(document.getElementById("form_upload_dropzone")); 
                //form_data.append("desc_long",tinymce.get("mymce").getContent());         
                //form_data.append('uploadinput', file_data);

               
                //alert(form_data);                             
                $.ajax({
                    url: url_menu_apis+"/"+"post_data_product", // point to server-side PHP script 
                    dataType: 'text',  // what to expect back from the PHP script, if anything
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,                         
                    type: 'post',
                    success: function(response){
                    // alert(php_script_response); // display response from the PHP script, if any
                        //ambil_berita(response);
                        if(response == "success"){
                            window.location = url_menu_apis+"/"+"product-list";
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
