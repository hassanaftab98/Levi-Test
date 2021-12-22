<!DOCTYPE html>
<html lang="zxx" class="js">


<!-- <link	rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" >
<link	rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/dataTables.jqueryui.min.css" >
<link	rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.jqueryui.min.css" > -->




<!-- HEAD -->
<?php $this->load->view('Backend/includes/head'); ?>
<!-- /HEAD -->

<body class="nk-body bg-lighter npc-general has-sidebar ">
	<div class="nk-app-root">
		<!-- main @s -->
		<div class="nk-main ">


			<!-- /SidBar -->
			<?php $this->load->view('Backend/includes/sidebar'); ?>
			<!-- /SidBar -->

			<!-- wrap @s -->
			<div class="nk-wrap ">
				<!-- /Header -->
				<?php $this->load->view('Backend/includes/header'); ?>
				<!-- /Header -->

				<!-- content @s -->
				<div class="nk-content ">
					<div class="container-fluid">
						<div class="nk-content-inner">
							<div class="nk-content-body">
								<div class="components-preview wide-md mx-auto">
									<div class="nk-block nk-block-lg">
										<div class="nk-block-head nk-block-head-sm">
											<div class="nk-block-between">
												<div class="nk-block-head-content">
													<h3 class="nk-block-title page-title">Activity Logs</h3>
													

												</div><!-- .nk-block-head-content -->

											</div><!-- .nk-block-between -->
										</div><!-- .nk-block-head -->
										<div class="card card-preview">
											<div class="card-inner">
										<!-- <table style="data-table"> -->
										<table class="table data-table">

											<thead>
												<tr>
													<th>Sno.</th>
													<th>User</th>
													<th>Controller</th>
													<th>Method</th>
													<th>Date Time</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>

											</tbody>
										</table>
										</div> 
										</div>
										<!-- .card-preview -->
									</div> <!-- nk-block -->

								</div><!-- .components-preview -->
							</div>
						</div>
					</div>
				</div>
				<!-- content @e -->
				<!-- footer @s -->
				<div class="nk-footer">
					<div class="container-fluid">
						<div class="nk-footer-wrap">
							<div class="nk-footer-copyright"> &copy; 2020 DashLite. Template by <a href="https://softnio.com" target="_blank">Softnio</a>
							</div>
							<div class="nk-footer-links">
								<ul class="nav nav-sm">
									<li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Help</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- footer @e -->
			</div>
			<!-- wrap @e -->
		</div>
		<!-- main @e -->
	</div>
	<!-- app-root @e -->
	<!-- JavaScript -->

	




	<!-- JavaScript -->
	<?php $this->load->view('Backend/includes/scripts'); ?>
	<!-- /JavaScript -->


	
	<script type="text/javascript" language="javascript">
		$(document).ready(function() {


			var dataTable = NioApp.DataTable('.data-table',{
				destroy: true,
				deferRender: true,
				"paging": true,
				"info": true,
				// rowReorder: true,
				searching: true,
				"processing": true,
				"serverSide": true,
				"ajax": {
					url: "<?= base_url('activity_logs/get_logs') ?>", // json datasource
					type: "POST", // method  , by default get
					error: function() { // error handling
						$(".user-grid-error").html("");
						$("#user-grid").append('<tbody class="user-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
						$("#user-grid_processing").css("display", "none");

					}
				},

			});


			// var data = [];
			// for (var i = 0; i < 5000; i++) {
			// 	data.push([i, i, i, i, i]);
			// }

			// $('#user-grid').DataTable({
			// 	destroy: true,
			// 	data: data,
			// 	deferRender: true,
			// 	paging: false,
			// 	searching: false,
			// 	scrollY: 200,
			// 	scrollCollapse: true,
			// 	scroller: true,
			// 	columnDefs: [{
			// 		// targets: -5,
			// 		className: 'datatable-init'
			// 	}]
			// });
		});
	
	</script>

	
</body>

</html>