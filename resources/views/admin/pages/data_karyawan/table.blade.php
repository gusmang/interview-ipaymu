@extends('admin.pages.layouts')

@section('isi_menu')
    

<div class="modal fade" id="editedModal" tabindex="-1" role="dialog" aria-labelledby="editedModalLabel" aria-hidden="true">
    <form id="form_multi_edit" name="form_multi_edit" enctype="multipart/form-data" method="post" action="<?php echo url('administrator/update_karyawan'); ?>">
    
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editedModalLabel">Form Edit Karyawan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#editedModal').modal('hide');">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Form</strong> Edit Karyawan
                                    </div>
                                    <div class="card-body card-block">


                                            {{ csrf_field() }}
                                            <input type="hidden" name="edit_hidden_textfield" id="edit_hidden_textfield" />
                                            <input type="hidden" name="_method" id="_method" value="put" />


                                            <div class="row form-group">

                                                    <div class="col-md-4 col-12" style="margin-top:20px;">
                                                    NIP :  <span id="span_alt_new" class="sp_req_class" style="color:#FF0000; display:none;"> ( Required ) </span> 
                                                    <input type="text" class="form-control" name="edit_inp_nip_karyawan" id="edit_inp_nip_karyawan" placeholder="input NIP " required="required" />
                                                    </div>

                                                    <div class="col-md-8 col-12"  style="margin-top:20px;">
                                                        Nama  Karyawan :  <span id="span_alt_new" class="sp_req_class" style="color:#FF0000; display:none;"> ( Required ) </span> 
                                                        <input type="text" class="form-control" name="edit_inp_nama_karyawan" id="edit_inp_nama_karyawan" placeholder="input Nama Pekerjaan" required="required" />
                                                    </div>

                                                    <div class="col-md-6 col-12"  style="margin-top:20px;">
                                                        Email :  <span id="span_alt_new" class="sp_req_class" style="color:#FF0000; display:none;"> ( Required ) </span> 
                                                        <input type="text" class="form-control" name="edit_inp_email_karyawan" id="edit_inp_email_karyawan" placeholder="input Email " required="required" />
                                                    </div>

                                                    <div class="col-md-6 col-12"  style="margin-top:20px;">
                                                        No. WhatsApp : <small style="color:#666666;"> *) <i> tanpa tanda + </i> </small> <span id="span_alt_new" class="sp_req_class" style="color:#FF0000; display:none;"> ( Required ) *)  </span> 
                                                        <input type="text" class="form-control" name="edit_inp_nowa_karyawan" id="edit_inp_nowa_karyawan" placeholder="62" required="required" />
                                                    </div>

                                                    <div class="col-md-5 col-12"  style="margin-top:20px;">
                                                        Pekerjaan :  <span id="span_alt_new" class="sp_req_class" style="color:#FF0000; display:none;"> ( Required ) </span> 
                                                        <select class="form-control" name="edit_inp_nama_pekerjaan" id="edit_inp_nama_pekerjaan" placeholder="input Nama Pekerjaan" required="required">
                                                            <option value=""> - Pilih Pekerjaan - </option>
                                                            <?php
                                                                foreach($pekerjaanData as $rows){
                                                                    ?>
                                                                        <option value="<?php echo $rows->id_list_pekerjaan; ?>"> <?php echo $rows->nama_pekerjaan; ?> </option>
                                                                    <?php
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-5 col-12"  style="margin-top:20px;">
                                                        Tanggal Lahir :  <span id="span_alt_new" class="sp_req_class" style="color:#FF0000; display:none;"> ( Required ) </span> 
                                                        <input type="date" class="form-control" name="edit_inp_tanggal_lahir" id="edit_inp_tanggal_lahir" placeholder="input Nama Pekerjaan" required="required" />
                                                    </div>
                                            
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
                        <h4 class="text-themecolor">Form Karyawan</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Form  Karyawan</li>
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
                                <div style="float:left;"><h4 class="card-title">Form  Karyawan </h4></div>
                                <br clear="all" /><p></p>
                                <!-- <h6 class="card-subtitle">Upload File Gallery Anda <code>.dropzone</code> to form.</h6> -->
                                
                                
                                <form class="dropzone" method="post"  id="form_upload_dropzone" enctype="multipart/form-data" action="<?php echo url('administrator/tambah_karyawan'); ?>">
                                <p></p>
                                <h6 class="card-subtitle">&nbsp; List  Karyawan </h6>
                                
                                {{ csrf_field() }}

                                @if ($errors->has('inp_nip_karyawan'))
                                    <div class="alert alert-danger alert-block col-md-12">
                                        <button type="button" class="close" data-dismiss="alert">×</button>	
                                            <strong>{{ $errors->first('inp_nip_karyawan') }}</strong>
                                    </div><p></p>
                                @endif

                                    <div class="row" style="padding:20px; box-sizing:border-box;">
                                        
                                        <div class="col-md-4 col-12" style="margin-top:20px;">
                                            NIP :  <span id="span_alt_new" class="sp_req_class" style="color:#FF0000; display:none;"> ( Required ) </span> 
                                            <input type="text" class="form-control" name="inp_nip_karyawan" id="inp_nip_karyawan" placeholder="input NIP " required="required" />
                                        </div>

                                        <div class="col-md-8 col-12"  style="margin-top:20px;">
                                            Nama  Karyawan :  <span id="span_alt_new" class="sp_req_class" style="color:#FF0000; display:none;"> ( Required ) </span> 
                                            <input type="text" class="form-control" name="inp_nama_karyawan" id="inp_nama_karyawan" placeholder="input Nama Pekerjaan" required="required" />
                                        </div>

                                        <div class="col-md-6 col-12"  style="margin-top:20px;">
                                            Email :  <span id="span_alt_new" class="sp_req_class" style="color:#FF0000; display:none;"> ( Required ) </span> 
                                            <input type="text" class="form-control" name="inp_email_karyawan" id="inp_email_karyawan" placeholder="input Email " required="required" />
                                        </div>

                                        <div class="col-md-6 col-12"  style="margin-top:20px;">
                                            No. WhatsApp : <small style="color:#666666;"> *) <i> tanpa tanda + </i> </small> <span id="span_alt_new" class="sp_req_class" style="color:#FF0000; display:none;"> ( Required ) *)  </span> 
                                            <input type="text" class="form-control" name="inp_nowa_karyawan" id="inp_nowa_karyawan" placeholder="62" required="required" />
                                        </div>

                                        <div class="col-md-5 col-12"  style="margin-top:20px;">
                                            Pekerjaan :  <span id="span_alt_new" class="sp_req_class" style="color:#FF0000; display:none;"> ( Required ) </span> 
                                            <select class="form-control" name="inp_nama_pekerjaan" id="inp_nama_pekerjaan" placeholder="input Nama Pekerjaan" required="required">
                                                <option value=""> - Pilih Pekerjaan - </option>
                                                <?php
                                                    foreach($pekerjaanData as $rows){
                                                        ?>
                                                            <option value="<?php echo $rows->id_list_pekerjaan; ?>"> <?php echo $rows->nama_pekerjaan; ?> </option>
                                                        <?php
                                                    }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="col-md-5 col-12"  style="margin-top:20px;">
                                            Tanggal Lahir :  <span id="span_alt_new" class="sp_req_class" style="color:#FF0000; display:none;"> ( Required ) </span> 
                                            <input type="date" class="form-control" name="inp_tanggal_lahir" id="inp_tanggal_lahir" placeholder="input Nama Pekerjaan" required="required" />
                                        </div>
                                        
                                        <div class="col-md-2 col-4"  style="margin-top:20px;">
                                            <div style="visibility:hidden;">Aksi : </div>
                                            <Button class="btn btn-success text-white form-control" type="submit" name="submit_btn" id="submit_btn">
                                                <b> <i class="icons-Data-Save"></i> &nbsp; Submit </b>
                                            </Button>
                                        </div>

                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Tab panes ss-->
                <div style="margin-top:20px;">

                <div class="row">
                    <div class="col-12">
                        <!-- Column -->
                        <!-- ---------------------
                            start Kitchen Sink
                        ---------------- -->
                        <div class="card">
                            <div class="card-body">
                                <div style="float:left;"> <h4 class="card-title">List  Karyawan</h4> </div>
                                <div style="float:right;"><Button class="btn btn-primary text-white form-control" onClick="window.location='<?php echo url(Config::get("myconfig.adminUrl")."/generate_random_karyawan"); ?>'"> Buat Random Data Seeder ( 50 )</Button></div>
                                <!-- <h5 class="card-subtitle mb-3">Swipe Mode, ModeSwitch, Minimap, Sortable, SortableSwitch</h5> -->
                                <br clear="all" /><p></p>
                                <div class="table-responsive">
                                    
                                @if ($message = Session::get('success'))
                                <p></p>
                                    <div class="alert alert-success alert-block">
                                        <button type="button" class="close" style="float:right;" data-dismiss="alert">×</button>	
                                            <strong><i class="icon-check"></i> {{ $message }}</strong>
                                    </div>
                                @endif

                                <div class="col-md-12">
                                    <form method="get" name="form_search_data" id="form_search_data" action="<?php echo url(Config::get('myconfig.adminUrl')."/karyawan"); ?>">
                                        Pencarian Data : <hr />
                                        <?php
                                            $nip = "";
                                            $nama_karyawan = "";
                                            $pekerjaanId = "";

                                            if(isset($_GET['nip'])){
                                                $nip = $_GET['nip'];
                                            }

                                            if(isset($_GET['name'])){
                                                $nama_karyawan = $_GET['name'];
                                            }

                                            if(isset($_GET['job'])){
                                                $pekerjaanId = $_GET['job'];
                                            }

                                        ?>
                                        <div class="row">
                                            <div class="col-md-4">
                                                NIP : <br />
                                                <input type="text" class="form-control" name="nip" id="nip_search" placeholder="Input NIP" value="<?php echo $nip; ?>" />
                                            </div>

                                            <div class="col-md-3">
                                                Nama Karyawan : <br />
                                                <input type="text" class="form-control" name="name" id="name_search" placeholder="Input Nama" value="<?php echo $nama_karyawan; ?>" />
                                            </div>
                                            <div class="col-md-3">
                                                Pekerjaan : <br />
                                                <select class="form-control" name="job" id="job_search" placeholder="Input Pekerjaan">
                                                    <option value=""> - Pilih Pekerjaan - </option>
                                                    <?php
                                                        foreach($pekerjaanData as $rows){
                                                            ?>
                                                                <option value="<?php echo $rows->id_list_pekerjaan; ?>"> <?php echo $rows->nama_pekerjaan; ?> </option>
                                                            <?php
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                <br />
                                                <Button class="btn btn-success text-white form-control" type="submit"><i class="bi bi-search"></i> Cari</Button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <p>&nbsp;</p>

                                 <table id="myTable" class="table table-bordered table-striped border">
                                        <thead class="head-table" >
                                            <tr>
                                                <th>NIP</th>
                                                <th>Nama</th>
                                                <th>Pekerjaan</th>
                                                <th>Kontak</th>
                                                <th>Tanggal Lahir</th>
                                                <th width="60">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php

                                            foreach($data as $rows){
                                            $hari = get_day($rows->tanggal_lahir);
                                            $exp_tgl = explode("-" , $rows->tanggal_lahir);
                                            $weeks = (int) get_week($rows->tanggal_lahir);
                                            
                                            $mgg_status = ($weeks %2 == 0 ? "Minggu Genap" : "Minggu Ganjil");

                                            //$weeks = ($weeks <)

                                            $tanggal_sts = "Tanggal Ganjil";

                                            if($exp_tgl[2] % 2 == 0){
                                                $tanggal_sts = "Tanggal Genap";
                                            }

                                            ?>
                                                <tr>
                                                    <td><?php echo $rows->nip; ?></td>
                                                    <td><?php echo $rows->nama; ?></td>
                                                    <td><?php echo $rows->nama_pekerjaan; ?></td>
                                                    <td><?php echo "<i class='icon-envelope'></i> ".$rows->email."<br />"."<i class='bi bi-whatsapp'></i> ".$rows->no_wa; ?></td>
                                                    <td><?php echo $hari. " , ".tgl_indo($rows->tanggal_lahir)."<br />".$tanggal_sts."<br />".$mgg_status; ?></td>
                                                    <td><a href="javascript:void(0)" onclick="edit_modal('<?php echo $rows->uuid; ?>')"> <i class="icon-pencil"></i> Edit </a> &nbsp; <br /> <a href="javascript:void(0)" onclick="hapus_modal('<?php echo $rows->uuid; ?>')"> <i class="icon-trash"></i> Delete</a> </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                            
                                        </tbody>
                                    </table>
                                    
                                    
                                    <div id="pagination">
                                            <div style="float:left; margin-top:20px; margin-right:30px;">
                                                Total <b> ( <?php echo ($totals); ?> )</b> Data Keseluruhan
                                            </div>

                                            <div style="float:right; margin-top:20px; margin-right:30px;">
                                                <ul class="pagination">
                                                    @include('admin.pagination.limit_links', ['paginator' => $data])
                                                </ul>
                                            </div>
                                    </div>

                                </div>
                            </div>
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
    
        $('#myTable').DataTable({
            "paging":   false,
            "info":     false
        });

    //    var table = $('#myTable').DataTable({
    //         "ajax": url_menu_apis+"/"+"get-data-pekerjaan",
    //         "columns": [
    //             {
    //                 "className": 'details-control',
    //                 "orderable": false,
    //                 "data": null,
    //                 "render": function ( data, type, row, meta ) {
    //                     index_cat++;
    //                     return index_cat;
    //                 },
    //             },
    //             { "data": "nama_bed" },
    //             {
    //                 "className": '',
    //                 "orderable": false,
    //                 "data": null,
    //                 "render": function ( data, type, row, meta ) {
    //                     return '<a href="javascript:void(0)" onclick="edit_modal('+row.id_bed_type+')"><i class="ti ti-pencil"></i></a> &nbsp; <a href="javascript:void(0)" onclick="hapus_modal('+row.id_bed_type+')"><i class="ti ti-trash"></i></a>';
    //                 },
    //                // "defaultContent": 
    //             }
    //         ],
    //         "order": [[0, 'asc']]
    //     });

        //alert("tess");
        function hapus_modal(index){
            var con = confirm("Hapus Data Ini ?");

            if(con == true){
                $.ajax({
                    type:"DELETE",
                    data:"id="+index+"&_method=delete",
                    url:url_menu_apis+"/"+"post_hapus_karyawan/"+index,
                    success:function(data){
                        window.location = url_menu_apis+"/"+"karyawan/";
                    }
                });
            }

        }

        function edit_modal(index){
            $("#btn_reset_data_gal").click();

            $.ajax({
                type:"GET",
                data:"id="+index,
                url:url_menu_apis+"/"+"get_detail_karyawan/"+index,
                dataType:"json",
                success:function(data){
                    

                    $("#edit_hidden_textfield").val(data.uuid);
                    $("#edit_text_title_new").val(data.nama_karyawan);

                    $("#edit_inp_nip_karyawan").val(data.nip);
                    $("#edit_inp_nama_karyawan").val(data.nama);
                    $("#edit_inp_email_karyawan").val(data.email);
                    $("#edit_inp_nowa_karyawan").val(data.no_wa);
                    $("#edit_inp_nama_pekerjaan").val(data.id_list_pekerjaan);
                    $("#edit_inp_tanggal_lahir").val(data.tanggal_lahir);
                    
                    
                    $("#editedModal").modal('show');

                }
            });

           
        }

        function submit_edit_gambar_form(form){

        //console.log("formdata" , formData);

        //console.log("submits" , );
        $.ajax({
            data:$("#form_multi_edit").serialize(),
            url:url_menu_apis+"/"+"update_bedtype",
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
                    url: url_menu_apis+"/"+"post_data_bedtype", // point to server-side PHP script 
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
