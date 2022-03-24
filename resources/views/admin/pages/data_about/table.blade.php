@extends('admin.pages.layouts')

@section('isi_menu')

            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Form Welcome Video</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Form Welcome Video</li>
                            </ol>
                            <!-- <button type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i class="fa fa-plus-circle"></i> Create New</button> -->
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                
                
                <!-- Tab panes ss-->
                <div style="margin-top:20px;">

                <form method="post" action="<?php echo url(Config::get('myconfig.adminUrl')."/post-video"); ?>">

                    <div class="row">
                        <div class="col-12">
                            <!-- Column -->
                            <!-- ---------------------
                                start Kitchen Sink
                            ---------------- -->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Maintenance Welcome Video</h4>
                                    <!-- <h5 class="card-subtitle mb-3">Swipe Mode, ModeSwitch, Minimap, Sortable, SortableSwitch</h5> -->
                                    <div class="col-md-12">

                                            <div class="row">

                                            <input type="hidden" value="put" name="_method" id="_method" />
                                            <input type="hidden" value="<?php echo $usaha->id_welcome_video; ?>" name="id_welcome_video" id="id_welcome_video" />

                                                <div class="col-md-6" style="margin-top:30px;">
                                                    Title : <p></p>
                                                    <input type="text" placeholder="input title" class="form-control" id="t_title_welcome_video" name="t_title_welcome_video" value="<?php echo $usaha->title; ?>" />
                                                </div>
                                                
                                                <div class="col-md-6"  style="margin-top:30px;">
                                                    Description : <p></p>
                                                    <input type="text" placeholder="input Description" class="form-control" id="t_deskripsi_welcome_video" name="t_deskripsi_welcome_video" value="<?php echo $usaha->deskripsi; ?>" />
                                                </div>

                                                <div class="col-md-6"  style="margin-top:30px;">
                                                    Thumbnail Video : <p></p>
                                                    <input type="file" class="form-control" id="f_upload" name="f_upload" onChange="image_preview(this);" />

                                                    <div class="col-md-12" style="height:300px; border:1px solid #DDDDDD; margin-top:30px;">
                                                        <img src="<?php echo url('public/welcome'); ?>/<?php echo $usaha->image_thumb; ?>"  width="100%" height="100%" style="object-fit:cover;" id="img_upload_new" />
                                                    </div>
                                                </div>

                                                <div class="col-md-6"  style="margin-top:30px;">
                                                    Link Video ( Youtube ) : <p></p>
                                                    <input type="text" onblur="preview_video()" onChange="replace_teks(this);" onKeyUp="replace_teks(this);" value="<?php echo $usaha->video_link; ?>" placeholder="input Youtube link ( ex: bNdy0l6CWvU )" class="form-control" id="t_link_youtube" name="t_link_youtube" />

                                                    <div class="col-md-12" style="height:300px; border:1px solid #DDDDDD;  margin-top:30px;">
                                                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo $usaha->video_link; ?>" title="YouTube Preview Video player" id="preview-videos" name="preview-videos" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                    </div>

                                                </div>


                                            </div>

                                        <div style="float:right; margin-top:30px;"> 

                                            <button class="btn btn-success" type="submit"><i class="icon-note"></i> &nbsp; Submit Data </button>

                                        </div>

                                        <br clear="all" />

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

            </form>

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->

         
   <script type="text/javascript">
       //alert("tess");
       function preview_video(){
            $("#preview-videos").prop("src","https://www.youtube.com/embed/"+$("#t_link_youtube").val());
       }

       function image_preview(input){
           //$("#")
           var obj = URL.createObjectURL(input.files[0]);
           $("#img_upload_new").prop("src" , obj);

       }

       function replace_teks(input){
           var value = input.value;
           value = value.replace("https://youtu.be/","");

           $(input).val(value);
       }
    
       var table = $('#myTable').DataTable({
            "ajax": url_menu_apis+"/"+"get-data-socials",
            "columns": [
                {
                    "className": 'details-control',
                    "orderable": true,
                    "data": null,
                    "render": function ( data, type, row, meta ) {
                        index_cat++;
                        return index_cat;
                    },
                },
                {
                    "className": '',
                    "orderable": true,
                    "data": null,
                    "render": function ( data, type, row, meta ) {
                        return '<i class="'+row.icon+'"></i> &nbsp;'+row.icon;
                    },
                   // "defaultContent": 
                },
                // { "data": "icon" },
                { "data": "sosmed" },
                { "data": "link" },
                {
                    "className": '',
                    "orderable": false,
                    "data": null,
                    "render": function ( data, type, row, meta ) {
                        return '<a href="javascript:void(0)" onclick="edit_modal('+row.id+')"><i class="ti ti-pencil"></i></a>';
                    },
                   // "defaultContent": 
                }
            ],
            "order": [[0, 'asc']]
        });

        //alert("tess");
        function hapus_modal(index){
            var con = confirm("Hapus Data Ini ?");

            if(con == true){
                $.ajax({
                    type:"GET",
                    data:"id="+index,
                    url:url_menu_apis+"/"+"post_hapus_sosmed/"+index,
                    success:function(data){
                        $("#div_gallery_thumbs"+index).fadeOut();

                        index_cat = 0;
                        table.ajax.reload();
                    }
                });
            }

        }

        function edit_modal(index){
            $("#btn_reset_data_gal").click();

            $.ajax({
                type:"GET",
                data:"id="+index,
                url:url_menu_apis+"/"+"get_detail_sosmed/"+index,
                dataType:"json",
                success:function(data){
                    

                    $("#edit_hidden_textfield").val(data[0].id);
                    $("#edit_text_title_new").val(data[0].sosmed);
                    $("#edit_icon_title_new").val(data[0].icon);
                    $("#edit_link_title_new").val(data[0].link);
                    
                    $("#editedModal").modal('show');

                }
            });

           
        }

        function submit_edit_gambar_form(form){

            var data = new FormData();
            data.append('file', $('#f_upload')[0].files[0]);
            data.append("_token" , "<?php echo csrf_token(); ?>");
            data.append("_token" , "<?php echo csrf_token(); ?>");
            data.append("_token" , "<?php echo csrf_token(); ?>");
            data.append("_token" , "<?php echo csrf_token(); ?>");
            
            
            $("#logo_usaha_loader").show();
            
            $.ajax({
                  url: url_menu_apis+"/"+"upload_gambar_usaha/"+index,
                  type: "POST",
                  data: data,
                  enctype: 'multipart/form-data',
                  processData: false,  // tell jQuery not to process the data
                  contentType: false,
                  success:function(data){
                //$("#register_user_new").val();
                if(data == "success"){
                    $("#editedModal").modal("hide");
                    $("#btn_reset").click();

                    index_cat = 0;
                    table.ajax.reload();

                }
            }
        });

        return false;

    }
    var index_cat = 0;
        
        $(document).ready(function() {
          //  $('#myTable').DataTable();
            
            // Basic



            $("#btn_upload_new").click(function(){
       
                //form_data.append('uploadinput', file_data);

               
                //alert(form_data);                             
                $.ajax({
                    url: url_menu_apis+"/"+"post_data_sosmed", // point to server-side PHP script 
                    dataType: 'text',  // what to expect back from the PHP script, if anything
                    data: $("#form_upload_dropzone").serialize(),                         
                    type: 'post',
                    success: function(response){
                    // alert(php_script_response); // display response from the PHP script, if any
                        //ambil_berita(response);
                        index_cat = 0;
                        table.ajax.reload();

                        $("#btn_reset_new").click();
                        //openView();
                    }
                });

            });

        });
    </script>

   @stop
