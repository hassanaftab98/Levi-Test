<!DOCTYPE html>
<html lang="zxx" class="js">


<!-- HEAD -->
<?php $this->load->view('backend/includes/head'); ?>
<!-- /HEAD -->

<body class="nk-body bg-lighter npc-general has-sidebar ">

	<div class="nk-app-root">
		<!-- main @s -->
		<div class="nk-main ">


			<!-- /SidBar -->
			<?php $this->load->view('backend/includes/sidebar'); ?>
			<!-- /SidBar -->

			<!-- wrap @s -->
			<div class="nk-wrap ">
				<!-- /Header -->
				<?php $this->load->view('backend/includes/header'); ?>
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
												<!-- <div class="nk-block-head-content"> -->
														<!-- <div class="row g-4"> -->
															<div class="col-md-6" style="padding-left: 0;">
																<div class="form-group">
																	<div class="form-control-wrap">
																		<select class="form-select form-control form-control" data-search="on" data-placeholder="Select Customer" name="customers" id="customers">
																			<option value=""> Select Customer </option>
																			<option value="All">All</option>
																			<?php for ($i = 0; $i < count($customers); $i++) : ?>
																				<option value="<?= $customers[$i]['customer_id']; ?>"><?= $customers[$i]['customer_first_name'] . ' ' . $customers[$i]['customer_last_name']; ?></option>
																				<?php ?>
																			<?php endfor; ?>
																		</select>
																	</div>
																</div>
															</div>
														<!-- </div> -->
													<!-- <h3 class="nk-block-title page-title">Manage Customers</h3> -->

												<!-- </div>.nk-block-head-content -->
												<a href="<?= base_url('customer/add'); ?>" class="btn btn-primary"><em class="icon ni ni-plus"></em></a>
											</div><!-- .nk-block-between -->
										</div><!-- .nk-block-head -->
										
										<div id="filter">

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
				<?php $this->load->view('backend/includes/footer'); ?>
				<!-- footer @e -->
			</div>
			<!-- wrap @e -->
		</div>
		<!-- main @e -->
	</div>
	<!-- app-root @e -->
	<!-- JavaScript -->


	<!-- JavaScript -->
	<?php $this->load->view('backend/includes/scripts'); ?>
	<!-- /JavaScript -->

	

	<script>
		$("#customers").change(function(e) {
			console.log($('#customers').find(":selected").val())
			var customer_id = $('#customers').find(":selected").val();

			$.ajax({
				type: "POST",
				url: '<?php echo base_url("Customer/get_customer_by_id") ?>',
				data: {
					customer_id: customer_id
				},
				success: function(res) {

					var res = $.parseJSON(res);
					console.log(res)
					if (res.msg_type === 'success') {
						$('#filter').html(res.html);
						toastr.success(res.message);
						NioApp.DataTable('.data-table', {
							// $("#tbl").DataTable({
							"responsive": true,
							"autoWidth": false,
						});
					} else {
						$("#msg").html(res);
						toastr.error(res.message);
					}


				}

			});
		});
	</script>




<script type="text/javascript">
		// $(".add").click(function(a) {
		function deleten(a) {
			console.log($(a).attr('value'))

			swal.fire({
				title: 'Are you sure?',
				text: "You won't be able to revert this!",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonText: 'Yes, delete it!'
			}).then(function(result) {
				if (result.value) {

					$.ajax({
						type: 'POST',
						url: '<?= base_url('Customer/delete_customer') ?>',
						data: {
							'customer_id': $(a).attr('value'),
						}
					}).then(function(res) {
						var res = $.parseJSON(res);
						if (res.msg_type === 'success') {
							swal.fire('Deleted!', 'Customer has been Deleted.', 'success');
							setTimeout(function() {
								location.reload();
							}, 300);
						} else {
							swal.fire('Error', 'Ops something went wrong', 'error');
						}
					}, function(err) {
						swal.fire('Error', err.statusText, 'error');
					});

				} else if (result.dismiss === 'cancel') {
					swal.fire(
						'Cancelled',
						'Your imaginary file is safe :)',
						'error'
					)
				}
			})
		}
	</script>
</body>

</html>