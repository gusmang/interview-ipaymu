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
                        <h4 class="text-themecolor">Halaman Dashboard</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                            
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Info box -->
                <!-- ============================================================== -->
                <!-- .row -->
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase">Total Villa</h5>
                                <div class="text-end"> <span class="text-muted"></span>
                                    <h2><sup><i class="ti-arrow-up text-success"></i></sup> 0</h2>
                                </div>
                                <span class="text-success">20%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-success" style="width: 20%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase">Total Booking</h5>
                                <div class="text-end"> <span class="text-muted"></span>
                                    <h2><sup><i class="ti-arrow-down text-primary"></i></sup> 0</h2>
                                </div>
                                <span class="text-primary">30%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" style="width: 30%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase">Total Income</h5>
                                <div class="text-end"> <span class="text-muted"></span>
                                    <h2><sup><i class="ti-arrow-up text-info"></i></sup> 0</h2>
                                </div>
                                <span class="text-info">60%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-info" style="width: 40%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase">Total Member</h5>
                                <div class="text-end"> <span class="text-muted"></span>
                                    <h2><sup><i class="ti-arrow-up text-inverse"></i></sup> 0</h2>
                                </div>
                                <span class="text-inverse">80%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-inverse" style="width: 40%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- End Info box -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Over Visitor, Our income , slaes different and  sales prediction -->
                <!-- ============================================================== -->
                <!-- .row -->
                <div class="row" style="min-height:400px;">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    WELCOME TO ADMINISTRATOR PAGES <hr /> <p></p>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="col-md-12" >
                                                <img style="height:300px; object-fit:cover;" src="<?php echo url('public/GambarProduct/1.jpg'); ?>" class="img-fluid" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="col-md-12">
                                                <div class="col-md-12" >
                                                    <img style="height:300px; object-fit:cover;" src="<?php echo url('public/GambarProduct/2.jpg'); ?>" class="img-fluid" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="col-md-12">
                                                <div class="col-md-12" >
                                                    <img style="height:300px; object-fit:cover;" src="<?php echo url('public/GambarProduct/3.jpg'); ?>" class="img-fluid" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Comment - table -->
                <!-- ============================================================== -->
                <!-- row -->
                
                <!-- row -->
                <!-- ============================================================== -->
                <!-- End Comment - chats -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->

   @stop
