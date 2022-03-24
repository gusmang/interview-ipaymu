@extends('admin.pages.layouts')

@section('isi_menu')
    

<div class="modal fade" id="editedModal" tabindex="-1" role="dialog" aria-labelledby="editedModalLabel" aria-hidden="true">
    <form id="form_multi_edit" name="form_multi_edit" enctype="multipart/form-data" method="put" onSubmit="submit_edit_gambar_form(this); return false;">
    
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editedModalLabel">Form Edit Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#editedModal').modal('hide');">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Form</strong> Edit Profile
                                    </div>
                                    <div class="card-body card-block">


                                            {{ csrf_field() }}
                                            <input type="hidden" name="edit_hidden_textfield" id="edit_hidden_textfield" />
                                            <input type="hidden" name="_method" id="_method" value="put" />


                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Kategori</label></div>
                                                <div class="col-12 col-md-9"><input type="text" id="edit_text_title_new" name="edit_text_title_new" required="required" class="form-control" /><small class="form-text text-muted">Masukkan Title</small></div>
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
                        <h4 class="text-themecolor">Form Profile</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Form Profile</li>
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div style="float:right;"><span id="span_down_arrow" style="text-align:right; display:none; cursor:pointer;" onClick="$('#span_down_arrow').hide(); $('#span_up_arrow').show();  $('#form_upload_dropzone').slideDown('slow');"><i class=" ti-angle-up"></i></span> <span id="span_up_arrow" style="text-align:right;  cursor:pointer;" onClick="$('#span_down_arrow').show(); $('#span_up_arrow').hide();  $('#form_upload_dropzone').slideUp('slow');"><i class=" ti-angle-down"></i></span></div>
                                <div style="float:left;"><h4 class="card-title">Edit Profile Admin </h4></div>
                                <br clear="all" /><p></p>
                                <!-- <h6 class="card-subtitle">Upload File Gallery Anda <code>.dropzone</code> to form.</h6> -->
                                
                                
                                <form action="<?php echo url('administrator/post_data_update_profile'); ?>" class="dropzone" method="post" enctype="multipart/form-data" id="form_upload_dropzone">
                                <p></p>
                                <h6 class="card-subtitle">&nbsp; Edit Profile Admin </h6>
                                
                                {{ csrf_field() }}

                                    <div class="row" style="padding:20px; box-sizing:border-box;">
                                        

                                        <div class="col-md-12 col-12" style="margin-top:15px;">
                                            Name :  <span id="span_alt_new" class="sp_req_class" style="color:#FF0000; display:none;"> ( Required ) </span> 
                                            <input type="text" class="form-control" name="text_nama_kategori" id="text_nama_kategori" placeholder="input Nama Admin" value="<?php echo $profile->name; ?>" />
                                        </div>

                                        <div class="col-md-6 col-12" style="margin-top:15px;">
                                            Username :  <span id="span_alt_new" class="sp_req_class" style="color:#FF0000; display:none;"> ( Required ) </span> 
                                            <input type="text" class="form-control" name="text_nama_username" id="text_nama_username" placeholder="input Username Admin" value="<?php echo $profile->email; ?>" />
                                        </div>

                                        <div class="col-md-6 col-12" style="margin-top:15px;">
                                            Password :  <span id="span_alt_new" class="sp_req_class" style="color:#FF0000; display:none;"> ( Required ) </span> 
                                            <input type="password" class="form-control" name="text_nama_password" id="text_nama_password" placeholder="input Password Admin" />
                                        </div>

                                        <div class="col-md-10 col-6" style="margin-top:15px;">
                                        </div>
                                        
                                        <div class="col-md-2 col-6" style="margin-top:15px;">
                                            <div style="visibility:hidden;">Aksi : </div>
                                            <Button class="btn btn-success text-white form-control" type="submit" name="btn_upload_new" id="btn_upload_new">
                                                <b> <i class="icons-Data-Save"></i> &nbsp; Submit </b>
                                            </Button>
                                        </div>

                                    </div>
                                    
                                </form>
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
    

       var table = $('#myTable').DataTable({
            "ajax": url_menu_apis+"/"+"get-data-facilities",
            "columns": [
                {
                    "className": 'details-control',
                    "orderable": false,
                    "data": null,
                    "render": function ( data, type, row, meta ) {
                        index_cat++;
                        return index_cat;
                    },
                },
                { "data": "nama_facilities" },
                {
                    "className": '',
                    "orderable": false,
                    "data": null,
                    "render": function ( data, type, row, meta ) {
                        return '<a href="javascript:void(0)" onclick="edit_modal('+row.id_facilities+')"><i class="ti ti-pencil"></i></a> &nbsp; <a href="javascript:void(0)" onclick="hapus_modal('+row.id_facilities+')"><i class="ti ti-trash"></i></a>';
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
                    url:url_menu_apis+"/"+"post_hapus_facilities/"+index,
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
                url:url_menu_apis+"/"+"get_detail_facilities/"+index,
                dataType:"json",
                success:function(data){
                    

                    $("#edit_hidden_textfield").val(data[0].id_facilities);
                    $("#edit_text_title_new").val(data[0].nama_facilities);
                    
                    
                    $("#editedModal").modal('show');

                }
            });

           
        }

        function submit_edit_gambar_form(form){

        //console.log("formdata" , formData);

        //console.log("submits" , );
            $.ajax({
                data:$("#form_multi_edit").serialize(),
                url:url_menu_apis+"/"+"update_facilities",
                type:"post",
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
                    url: url_menu_apis+"/"+"post_data_update_profile", // point to server-side PHP script 
                    dataType: 'text',  // what to expect back from the PHP script, if anything
                    data: $("#form_upload_dropzone").serialize(),                         
                    type: 'post',
                    success: function(response){
                    // alert(php_script_response); // display response from the PHP script, if any
                        //ambil_berita(response);
                        index_cat = 0;
                        table.ajax.reload();
                        //openView();
                    }
                });

            });

        });
    </script>

   @stop
