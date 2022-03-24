<aside class="left-sidebar" style="background:#45A0A6;">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="<?php echo url('dstokel'); ?>/assets/images/users/1.jpg" alt="user-img" class="img-circle">
                        <span class="hide-menu"><?php echo Session::get('namapt'); ?></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo url(Config::get('myconfig.adminUrl').'/profile'); ?>"><i class="ti-user"></i> Edit Profile</a></li>
                                <li><a href="<?php echo url(Config::get('myconfig.adminUrl').'/logoutadmin'); ?>"><i class="icon-list"></i> Logout</a></li>
                            </ul>
                        </li>
                        <!-- <li class="nav-small-cap">--- MASTER DATA</li> -->
                        <li> <a class="waves-effect waves-dark" href="<?php echo url(Config::get('myconfig.adminUrl').'/home'); ?>"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="<?php echo url(Config::get('myconfig.adminUrl')."/product-list"); ?>"><i class="ti-list"></i><span class="hide-menu">Data Product</span></a></li>
                        
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-user"></i><span class="hide-menu">Data Karyawan</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo url(Config::get('myconfig.adminUrl')."/karyawan"); ?>">Karyawan</a></li>
                                <li><a href="<?php echo url(Config::get('myconfig.adminUrl')."/pekerjaan"); ?>">Pekerjaan</a></li>
                            </ul>
                        </li>
                        
                        <li> <a class="waves-effect waves-dark" href="<?php echo url(Config::get('myconfig.adminUrl').'/logoutadmin'); ?>" aria-expanded="false"><i class="ti-list text-danger"></i><span class="hide-menu">Logout</span></a></li>
                        <!-- <li> <a class="waves-effect waves-dark" href="<?php //echo url('logoutadmin'); ?>" aria-expanded="false"><i class="far fa-circle text-success"></i><span class="hide-menu">Footer Element</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="pages-faq.html" aria-expanded="false"><i class="far fa-circle text-info"></i><span class="hide-menu">Whatsapp Chat</span></a></li> -->
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>