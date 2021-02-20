<!-- Main Footer-->
			<div class="main-footer text-center">
				<div class="container">
					<div class="row row-sm">
						<div class="col-md-12">
							<span>Copyright © 2021 <a href="https://beatlebuddy.com/">Beatlebuddy</a>. Designed by 
							<a href="https://beatlebuddy.com/">Beatlebuddy</a> All rights reserved.</span>
						</div>
					</div>
				</div>
			</div>
			<!--End Footer-->
        <!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

		<!-- Jquery js-->
		<script src="<?php echo USERS_ASSETS_URL; ?>plugins/jquery/jquery.min.js"></script>

		<!-- Bootstrap js-->
		<script src="<?php echo USERS_ASSETS_URL; ?>plugins/bootstrap/js/popper.min.js"></script>
		<script src="<?php echo USERS_ASSETS_URL; ?>plugins/bootstrap/js/bootstrap-rtl.js"></script>

		<!-- Perfect-scrollbar js -->
		<script src="<?php echo USERS_ASSETS_URL; ?>plugins/perfect-scrollbar/perfect-scrollbar.min-rtl.js"></script>

		<!-- Sidemenu js -->
		<script src="<?php echo USERS_ASSETS_URL; ?>plugins/sidemenu/sidemenu-rtl.js"></script>

		<!-- Sidebar js -->
		<script src="<?php echo USERS_ASSETS_URL; ?>plugins/sidebar/sidebar-rtl.js"></script>

		<!-- Select2 js-->
		<script src="<?php echo USERS_ASSETS_URL; ?>plugins/select2/js/select2.min.js"></script>

		        <!-- Internal Chart.Bundle js-->
		<script src="<?php echo USERS_ASSETS_URL; ?>plugins/chart.js/Chart.bundle.min.js"></script>

		<!-- Peity js-->
        <script src="<?php echo USERS_ASSETS_URL; ?>plugins/peity/jquery.peity.min.js"></script>

		<!-- Internal Morris js -->
		<script src="<?php echo USERS_ASSETS_URL; ?>plugins/raphael/raphael.min.js"></script>
		<script src="<?php echo USERS_ASSETS_URL; ?>plugins/morris.js/morris.min.js"></script>

		<!-- Circle Progress js-->
		<script src="<?php echo USERS_ASSETS_URL; ?>js/circle-progress.min.js"></script>
		<script src="<?php echo USERS_ASSETS_URL; ?>js/chart-circle.js"></script>

		<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
		<!-- Internal Dashboard js-->
        <script src="<?php echo USERS_ASSETS_URL; ?>js/index.js"></script>

        <script src="<?php echo USERS_ASSETS_URL; ?>plugins/gallery/picturefill.js"></script>
        <script src="<?php echo USERS_ASSETS_URL; ?>plugins/gallery/lightgallery.js"></script>
		<script src="<?php echo USERS_ASSETS_URL; ?>plugins/gallery/lightgallery-1.js"></script>
        <script src="<?php echo USERS_ASSETS_URL; ?>plugins/gallery/lg-pager.js"></script>
        <script src="<?php echo USERS_ASSETS_URL; ?>plugins/gallery/lg-autoplay.js"></script>
        <script src="<?php echo USERS_ASSETS_URL; ?>plugins/gallery/lg-fullscreen.js"></script>
        <script src="<?php echo USERS_ASSETS_URL; ?>plugins/gallery/lg-zoom.js"></script>
        <script src="<?php echo USERS_ASSETS_URL; ?>plugins/gallery/lg-hash.js"></script>
        <script src="<?php echo USERS_ASSETS_URL; ?>plugins/gallery/lg-share.js"></script>

		<!-- Sticky js -->
		<script src="<?php echo USERS_ASSETS_URL; ?>js/sticky.js"></script>

		<!-- Custom js -->
		<script src="<?php echo USERS_ASSETS_URL; ?>js/custom.js"></script>

		<!-- Switcher js -->
		<script src="<?php echo USERS_ASSETS_URL; ?>switcher/js/switcher-rtl.js"></script>
		

		<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
		


		<script>
		$(document).ready(function() {
		    $('#example').DataTable( {
		        "scrollX": true
		    } );
		} );
		</script>
		<script>
		$(document).ready(function() {
		    $('#dealer_table').DataTable( {
		        "scrollX": true
		    } );
		} );
		</script>
		<script type="text/javascript">
		$(document).ready(function() {
		    $('#example2').DataTable( {
		        "scrollX": true
		    } );
		} );
		</script>
		<script>
		$(document).ready(function() {
		    $('#investor_table').DataTable( {
		        "scrollX": true
		    } );
		} );
		</script>
		<script>
		$(document).ready(function() {
		    $('#all-properties_table').DataTable( {
		        "scrollX": true
		    } );
		} );
		</script>
		<script>
		$(document).ready(function() {
		    $('#active-properties_table').DataTable( {
		        "scrollX": true
		    } );
		} );
		</script>

		<script>
		$(document).ready(function() {
		    $('#hold-properties_table').DataTable( {
		        "scrollX": true
		    } );
		} );

		</script>
				
		
<!-- alert start here--> 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">  
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
 <!-- end here -->
	 


	 <script type="text/javascript">
	  // success message start here
	   $(document).on('click', '#success_masg', function(e) {
	      swal(
	        'Success',
	        '',
	        'success'
	      )
	    });

	   //information start here
	   $(document).on('click', '#info_masg', function(e) {
	      swal(
	        'Info!',
	        '',
	        'info'
	      )
	    });

	   // end here
	   // error message start here
	    $(document).on('click', '#error_masg', function(e) {
	      swal(
	        'Error!',
	        '',
	        'error'
	      )
	    });
	 </script>
	</body>

</html>