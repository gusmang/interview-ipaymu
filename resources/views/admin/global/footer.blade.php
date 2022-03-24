 <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo url('dstokel'); ?>/assets/node_modules/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo url('dstokel'); ?>/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo url('dstokel'); ?>/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo url('dstokel'); ?>/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo url('dstokel'); ?>/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo url('dstokel'); ?>/dist/js/custom.min.js"></script>

    <script src="<?php echo url('dstokel'); ?>/assets/node_modules/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo url('dstokel'); ?>/assets/node_modules/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="<?php echo url('dstokel'); ?>/assets/node_modules/raphael/raphael-min.js"></script>
    <script src="<?php echo url('dstokel'); ?>/assets/node_modules/morrisjs/morris.min.js"></script>
    <script src="<?php echo url('dstokel'); ?>/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Popup message jquery -->
    <script src="<?php echo url('dstokel'); ?>/assets/node_modules/toast-master/js/jquery.toast.js"></script>
    <!-- Chart JS -->
    <script src="<?php echo url('dstokel'); ?>/dist/js/dashboard1.js"></script>

    <script src="<?php echo url('dstokel'); ?>/assets/node_modules/dropify/dist/js/dropify.min.js"></script>

    <script src="<?php echo url('dstokel'); ?>/assets/node_modules/tablesaw/dist/tablesaw.jquery.js"></script>
    <script src="<?php echo url('dstokel'); ?>/assets/node_modules/tablesaw/dist/tablesaw-init.js"></script>

    <script src="<?php echo url('dstokel'); ?>/assets/node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo url('dstokel'); ?>/assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>

    <script src="<?php echo url('dstokel'); ?>/assets/node_modules/tinymce/tinymce.min.js"></script>
    <script>
        function show_loader(){
            $("#loader_pr").show();
        }
        
        function hide_loader(){
                $("#loader_pr").fadeOut();
        }

    $(document).ready(function() {

        if ($("#mymce").length > 0) {
            tinymce.init({
                selector: "textarea#mymce",
                theme: "modern",
                height: 300,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

            });
        }

        if ($(".mymcetext").length > 0) {
            tinymce.init({
                selector: "textarea.mymcetext",
                theme: "modern",
                height: 300,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

            });
        }

    });
    </script>

    <script type="text/javascript">
        var url_menu_apis  = "<?php echo url("administrator/"); ?>";
        var url_menu_asset = "<?php echo url("public/"); ?>";

        function formatRupiah(angka){
			var number_string = angka.replace('/[^,\d]/g', '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
 
			//rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return rupiah;
		}

        function RupiahFormat(bilangan){
            var	number_string = bilangan.toString(),
                split	= number_string.split(','),
                sisa 	= split[0].length % 3,
                rupiah 	= split[0].substr(0, sisa),
                ribuan 	= split[0].substr(sisa).match(/\d{1,3}/gi);
                    
            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;

            return rupiah;
        }

        //alert(url_menu_apis);

    </script>
  