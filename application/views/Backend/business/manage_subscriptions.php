<!DOCTYPE html>
<html lang="zxx" class="js">



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
													<h3 class="nk-block-title page-title">Manage Business Subscription</h3>

												</div><!-- .nk-block-head-content -->
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalForm"><em class="icon ni ni-plus"></em></button>
											</div><!-- .nk-block-between -->
										</div><!-- .nk-block-head -->
										<div class="card card-preview animated fadeIn">
											<div class="card-inner">
												<table class="datatable-init table">
													<thead>
														<tr>
															<th>Sno#</th>
															<th>Business Name</th>
															<th>Package Type</th>
															<th>Start Date</th>
															<th>End Date</th>
															<th>Status</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>

														<?php for ($i = 0; $i < count($subscriptions); $i++) : ?>
															<tr>
																<td><?= $i + 1; ?></td>
																<td><?= $subscriptions[$i]['business_name'] ?></td>
																<td><?= $subscriptions[$i]['sub_package']; ?></td>
																<td><?= $subscriptions[$i]['start_date']; ?></td>
																<td><?= $subscriptions[$i]['end_date']; ?></td>
																<td><?php if ($subscriptions[$i]['status'] == 'active') { ?>
																		<span class="badge badge-success">Active</span>
																	<?php } else { ?>
																		<span class="badge badge-warning"><?= $subscriptions[$i]['status'];  ?></span>

																	<?php } ?>
																</td>

																<td align="center">
																	<a onclick="get_status_byId(<?= $subscriptions[$i]['subscription_id'] ?>,<?=$subscriptions[$i]['business_name_id']; ?>)" data-toggle="modal" data-target="#update_status" class="btn btn-xs btn-warning"><span class="icon ni ni-edit"></span></a>
																	<button type="button" onclick="validate(this)" value="<?= $subscriptions[$i]['subscription_id']; ?>" class="btn btn-xs btn-danger"><span class="icon ni ni-trash"></span></button>
																</td>
															</tr>

														<?php endfor; ?>

													</tbody>
												</table>
											</div>
										</div><!-- .card-preview -->
									</div> <!-- nk-block -->

								</div><!-- .components-preview -->
							</div>
						</div>
					</div>
				</div>
				<!-- content @e -->
				<!-- footer @s -->
				<?php $this->load->view('Backend/includes/footer'); ?>
				<!-- footer @e -->
			</div>
			<!-- wrap @e -->
		</div>
		<!-- main @e -->
	</div>
	<!-- app-root @e -->
	<!-- JavaScript -->




	<!-- Change Status -->
	<div class="modal fade" tabindex="-1" id="update_status">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Update Subscription</h5>
					<a href="#" class="close" data-dismiss="modal" aria-label="Close">
						<em class="icon ni ni-cross"></em>
					</a>
				</div>
				<div class="modal-body">
					<form action="#" method="POST" id="update_subscription_detail" class="form-validate is-alter">
						<div class="form-group">
							<!-- <label class="form-label" for="Label">Status</label> -->
							<div class="form-control-wrap">
								<input type="text" class="form-control date-picker" name="start_date" id="start_date" placeholder="Start Date" disabled>

							</div>
						</div>
						<div class="form-group">
							<!-- <label class="form-label" for="Label">Status</label> -->
							<div class="form-control-wrap">
								<input type="text" class="form-control date-picker" name="end_date" id="end_date" placeholder="End Date">

							</div>
						</div>

						<div class="form-group">
							<!-- <label class="form-label" for="Label">Status</label> -->
							<div class="form-control-wrap">
								<select class="form-select form-control form-control" data-search="on" data-placeholder="Select Package" name="package_type" id="package_type">
								</select>
							</div>
						</div>

						<div class="form-group">
							<!-- <label class="form-label" for="Label">Status</label> -->
							<div class="form-control-wrap">
								<select class="form-select form-control form-control" data-search="on" data-placeholder="Select Status" name="status" id="status">
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="form-label" for="cf-default-textarea">Admin Note</label>
							<div class="form-control-wrap">
								<textarea class="form-control form-control-sm" name="admin_note" id="cf-default-textarea" placeholder="Write your note."></textarea>
							</div>
						</div>
						<div class="preview-block">
							<label class="form-label" for="Send Cred">Send Note Notification</label>
							<style>
								.userswitch {
									display: flex;
								}
							</style>
							<div class="custom-control custom-switch userswitch">
								<input type="checkbox" class="custom-control-input" id="customSwitch2" name="my-checkbox">
								<label class="custom-control-label" for="customSwitch2"></label>
							</div>
						</div>
						<input type="text" name="subscription_id" id="subscription_id">
						<input type="text" name="business_id" id="business_id">

				</div>
				<div class="modal-footer bg-light">
					<button type="submit" class="btn btn-primary">Save</button>
					<button class="btn btn-danger" data-dismiss="modal" aria-label="Close">Close</button>
				</div>
				</form>
			</div>
		</div>
	</div>
	<!-- /Change Status -->



	<!-- ADD NEW SUBSCRIPTION -->
	<div class="modal fade" tabindex="-1" id="modalForm">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Add New Subcription</h5>
					<a href="#" class="close" data-dismiss="modal" aria-label="Close">
						<em class="icon ni ni-cross"></em>
					</a>
				</div>
				<div class="modal-body">
					<form action="#" method="POST" id="add_business_subcription" class="form-validate is-alter">
						<div class="form-group">
						<input type="text" class="form-control" name="business_name" id="business_name" value="<?= $business['business_name'];?>" readonly />
							
						</div>
						<div class="form-group">
							<!-- <label class="form-label" for="email-address">Package Type</label> -->

							<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Select Package" name="package_type" id="package_type">
								<option value="">Select Pakage</option>
								<?php for ($i = 0; $i < count($subscription_packages); $i++) : ?>
									<option value="<?= $subscription_packages[$i]['sub_package_id']; ?>"><?= $subscription_packages[$i]['sub_package']; ?></option>
								<?php endfor; ?>
							</select>

						</div>
						<div class="form-group">
							<!-- <label class="form-label" for="email-address">Price</label> -->
							<div class="form-control-wrap">
								<input type="text" class="form-control date-picker" name="start_date" id="start_date" placeholder="Start Date">
							</div>

						</div>
						<div class="form-group">

							<div class="form-control-wrap">
								<input type="text" class="form-control date-picker" name="end_date" id="end_date" placeholder="End Date">
							</div>
						</div>

						<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Status" name="status" id="status">
							<option value="">Status</option>
							<option value="active">Active</option>
							<option value="inactive">Inactive</option>

						</select>
						<input type="text" name='business_id' value="<?= $business['business_id'] ?>">
				</div>
				<div class="modal-footer bg-light">
					<button type="submit" class="btn btn-primary">Save</button>
					<button class="btn btn-danger" data-dismiss="modal" aria-label="Close">Close</button>
				</div>
				</form>
			</div>
		</div>
	</div>
	<!-- /ADD NEW SUBSCIRPTION -->




	<!-- JavaScript -->
	<?php $this->load->view('Backend/includes/scripts'); ?>
	<!-- /JavaScript -->





	<script>
		function get_status_byId(id, business_id) {

			// alert(business_id);
			$('#update_status').modal({
				backdrop: 'static',
				keyboard: false,
				show: true
			});
			
			// console.log(id, 'fdsfd', business_id);
			var subscription_id = id;
			$('#subscription_id').val(subscription_id);
			$('#business_id').val(business_id)
			$('')
			$.ajax({
				type: "POST",
				url: '<?php echo base_url("Business/get_subscription_status") ?>',
				data: {
					subscription_id: subscription_id,
					business_id : business_id
				},
				success: function(res) {
					var res = $.parseJSON(res);

					console.log(res)

					var status = ["active", "inactive", "cancelled"]

					var mystatus = $('<select>');
					$("#status").empty();
					mystatus.val('')
					$.each(status, function(index, key) {
						mystatus.append($('<option></option>').val(key).html(key))
					})
					$('#status').append(mystatus.html());


					$("#start_date").val(res.data.get_status.start_date);
					$("#end_date").val(res.data.get_status.end_date);
					$('#package_type').val("");
					var myselect = $('<select>');
					$.each(res.data.all_subs_packages, function(index, key) {
						// console.log(key.sub_package_id)
						myselect.append($('<option value=' + key.sub_package_id + ' ></option>').val(key.sub_package_id).html(key.sub_package));
					});
					$('#package_type').append(myselect.html());
					// console.log(res)
					// $('#get_data').html(res);
				},
				error: function(xhr) {
					$("#msg").html("Error: - " + xhr.status + " " + xhr.statusText);
				}
			});
		}
	</script>


	<script>
		$(document).ready(function() {
			$("#update_subscription_detail").on('submit', (function(e) {
				e.preventDefault();
				var fd = new FormData(this);
				$.ajax({
					url: '<?php echo base_url("Business/update_subscription_detail") ?>',
					data: fd,
					type: "POST",
					contentType: false,
					processData: false,
					cache: false,
					beforeSend: function() {
						imageOverlay('#update_subscription_detail', 'show');
					},
					complete: function(data) {
						imageOverlay('#update_subscription_detail', 'hide');
					},
					success: function(res) {
						var res = $.parseJSON(res);
						if (res.msg_type === 'success') {
							NioApp.Toast(res.message, 'success', {
								position: 'top-right',
								icon: 'auto',
								ui: ''
							});
							setTimeout(function() {
								location.reload()
								// window.location = res.redirect_link;
							}, 2000);

						} else {
							var temp = res.message.split("<p>");
							var temp2 = temp;
							$.each(temp2, function(index, value) {
								console.log(value);
								if (typeof value !== "undefined") {
									if (value) {
										NioApp.Toast('<h5>' + value + '</h5>', 'error', {
											position: 'top-right',
											icon: 'auto',
											ui: ''
										});
									}
								}
							});
						}
					},
					error: function(xhr) {
						$("#msg").html("Error: - " + xhr.status + " " + xhr.statusText);
					}
				});
			}));
			$('.select2bs4').select2({
				theme: 'bootstrap4'
			});
		});
	</script>

	<!-- DELTE -->
	<script type="text/javascript">
		function validate(a) {
			var id = a.value;
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
						url: '<?= base_url('Business/delete_business') ?>',
						data: {
							'business_id': id
						}
					}).then(function(res) {
						var res = $.parseJSON(res);
						if (res.msg_type === 'success') {
							$(a).closest('tr').remove();
							swal.fire('Deleted!', 'Menu has been Deleted.', 'success');
							setTimeout(function() {
								location.reload();
							}, 1000);

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


	<!-- ADD -->
	<script>
		$(document).ready(function() {
			$("#add_business_subcription").on('submit', (function(e) {
				e.preventDefault();
				var fd = new FormData(this);
				$.ajax({
					url: '<?php echo base_url("Business/add_new_subscription") ?>',
					data: fd,
					type: "POST",
					contentType: false,
					processData: false,
					cache: false,
					beforeSend: function() {
						imageOverlay('#add_business_subcription', 'show');
					},
					complete: function(data) {
						imageOverlay('#add_business_subcription', 'hide');
					},
					success: function(res) {
						var res = $.parseJSON(res);
						if (res.msg_type === 'success') {
							NioApp.Toast(res.message, 'success', {
								position: 'top-right',
								icon: 'auto',
								ui: ''
							});
							setTimeout(function() {
								location.reload()
								// window.location = res.redirect_link;
							}, 2000);

						} else {
							var temp = res.message.split("<p>");
							var temp2 = temp;
							$.each(temp2, function(index, value) {
								console.log(value);
								if (typeof value !== "undefined") {
									if (value) {
										NioApp.Toast('<h5>' + value + '</h5>', 'error', {
											position: 'top-right',
											icon: 'auto',
											ui: ''
										});
									}
								}
							});
						}
					},
					error: function(xhr) {
						$("#msg").html("Error: - " + xhr.status + " " + xhr.statusText);
					}
				});
			}));
			$('.select2bs4').select2({
				theme: 'bootstrap4'
			});
		});
	</script>

</body>

</html>