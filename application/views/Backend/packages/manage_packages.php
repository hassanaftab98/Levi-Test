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
												<div class="nk-block-head-content">
													<h3 class="nk-block-title page-title">Manage Packages</h3>

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
															<th>Name</th>
															<th>Description</th>
															<th>Price</th>
															<th>Taxable</th>
															<th>Action</th>
														</tr>
													</thead>

													<tbody>
														<?php for ($i = 0; $i < count($packages); $i++) : ?>

															<tr>
																<td><?= $i + 1; ?></td>

																<td><a href="#" onclick="get_packages_item(<?= $packages[$i]['package_id'] ?>)" data-toggle="modal" data-target="#get_packages_item"><?= $packages[$i]['package_name'] ?></a></td>
																<!-- <td><?= $packages[$i]['package_name'] ?> </td> -->
																<td><?= $packages[$i]['package_description'] ?> </td>
																<td>$<?= $packages[$i]['package_price'] ?> </td>

																<td><?php if ($packages[$i]['package_taxable'] == 1) { ?>
																		<span class="badge badge-success">Yes</span>
																	<?php } else { ?>
																		<span class="badge badge-warning">No</span>

																	<?php } ?>
																</td>


																<td>
																	<a href="<?= base_url('package/package-items/' . $packages[$i]['package_id']) ?>" class="btn btn-xs btn-success"><span class="icon ni ni-plus"></span></a>
																	<a onclick="get_package_byId(<?= $packages[$i]['package_id'] ?>)" class="btn btn-xs btn-warning"><span class="icon ni ni-edit"></span></a>
																	<button onclick="validate(<?= $packages[$i]['package_id'] ?>)" type="button" class="btn btn-xs btn-danger"><span class="icon ni ni-trash"></span></button>
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
				<?php $this->load->view('backend/includes/footer'); ?>
				<!-- footer @e -->
			</div>
			<!-- wrap @e -->
		</div>
		<!-- main @e -->
	</div>
	<!-- app-root @e -->



	<!-- ADD NEW PACKAGE -->
	<div class="modal fade" tabindex="-1" id="modalForm">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Add New Package</h5>
					<a href="#" class="close" data-dismiss="modal" aria-label="Close">
						<em class="icon ni ni-cross"></em>
					</a>
				</div>
				<div class="modal-body">
					<form action="#" method="POST" id="add_package" class="form-validate is-alter">
						<div class="form-group">
							<label class="form-label" for="full-name">Name</label>
							<div class="form-control-wrap">
								<input type="text" class="form-control" name="name" id="name" placeholder="Name">
							</div>
						</div>
						<div class="form-group">
							<label class="form-label" for="email-address">Package Description</label>

							<div class="form-control-wrap">
								<input type="text" class="form-control" name="package_description" id="" placeholder="Description">
							</div>

						</div>
						<div class="form-group">
							<label class="form-label" for="email-address">Price</label>
							<div class="form-control-wrap">
								<input type="number" class="form-control" name="package_price" id="package_price" value="0">
							</div>

						</div>
						<div class="form-group">
							<label class="form-label" for="gender">Taxable</label>
							<div class="preview-block">
								<div class="custom-control custom-radio">
									<input type="radio" id="yes_tax" value="1" name="package_taxable" class="custom-control-input">
									<label class="custom-control-label" for="yes_tax">Yes</label>

								</div>

								<div class="custom-control custom-radio" style="margin-left: 10px;">
									<input type="radio" id="no_tax" value="0" name="package_taxable" class="custom-control-input">
									<label class="custom-control-label" for="no_tax">No</label>

								</div>
							</div>
						</div>
				</div>
				<div class="modal-footer bg-light">
					<button type="submit" class="btn btn-primary">Save</button>
					<button class="btn btn-danger" data-dismiss="modal" aria-label="Close">Close</button>
				</div>
				</form>
			</div>
		</div>
	</div>
	<!-- /ADD NEW PACKAGE -->


	<!-- EDIT PACKAGE -->
	<div class="modal fade" tabindex="-1" id="update_package">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Edit Package</h5>
					<a href="#" class="close" data-dismiss="modal" aria-label="Close">
						<em class="icon ni ni-cross"></em>
					</a>
				</div>
				<div class="modal-body">
					<form action="#" method="POST" id="update_package_detail" class="form-validate is-alter">
						<div id="get_data">

						</div>
				</div>
				<div class="modal-footer bg-light">
					<button type="submit" class="btn btn-primary">Save</button>
					<button class="btn btn-danger" data-dismiss="modal" aria-label="Close">Close</button>
				</div>
				</form>
			</div>
		</div>
	</div>
	<!-- /EDIT PACKAGE -->


	<!-- Get PACKAGES ITEM LIST -->

	<div class="modal fade" tabindex="-1" role="dialog" id="get_packages_item">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
				<div class="modal-header">
					<h5 class="modal-title">Get Payments</h5>
				</div>

				<div class="card card-preview">
					<div class="card-inner">
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th scope="col">Sno#</th>
										<th scope="col">Item Name</th>
										<th scope="col">Description</th>
										<th scope="col">Package Name</th>
										<!-- <th scope="col">Paid Date</th> -->

									</tr>
								</thead>
								<tbody id="get_packages_item_detail">


								</tbody>
							</table>
						</div>
					</div>
				</div><!-- .card-preview -->


				<div class=" col-12 modal-footer">
					<button type="button" data-dismiss="modal" class="btn btn-danger ">Close</button>
				</div>
			</div><!-- .modal-content -->
		</div><!-- .modal-dialog -->
	</div>

	<!-- /GET PACKAGE ITEM LIST -->


	<!-- JavaScript -->


	<!-- JavaScript -->
	<?php $this->load->view('backend/includes/scripts'); ?>
	<!-- /JavaScript -->

	<script type="text/javascript">
		function validate(a) {
			var id = a;
			console.log(id)
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
						url: '<?= base_url('Administration/delete_package') ?>',
						data: {
							'id': id
						}
					}).then(function(res) {
						var res = $.parseJSON(res);
						if (res.msg_type === 'success') {
							$(a).closest('tr').remove();
							swal.fire('Deleted!', 'Package has been Deleted.', 'success');
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




	<!-- ADD item -->
	<script>
		$(document).ready(function() {
			$("#add_package").on('submit', (function(e) {
				e.preventDefault();
				var fd = new FormData(this);
				$.ajax({
					url: '<?php echo base_url("Administration/save_package") ?>',
					data: fd,
					type: "POST",
					contentType: false,
					processData: false,
					cache: false,
					beforeSend: function() {
						imageOverlay('#add_package', 'show');
					},
					complete: function(data) {
						imageOverlay('#add_package', 'hide');
					},
					success: function(res) {
						var res = $.parseJSON(res);
						if (res.msg_type == 'success') {
							NioApp.Toast(res.message, 'success', {
								position: 'top-right',
								icon: 'auto',
								ui: ''
							});
							setTimeout(function() {
								location.reload();
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
		});
	</script>

	<!-- Add item -->



	<!-- GET ITEM PACKAGES -->

	<script>
		function get_packages_item(id) {
			$('#get_packages_item').modal({
				backdrop: 'static',
				keyboard: false,
				show: true
			})

			var package_id = id;
			// alert(package_id)
			$.ajax({
				type: "POST",
				url: '<?php echo base_url("Administration/get_packages_item") ?>',
				data: {
					package_id: package_id
				},
				success: function(res) {
					var res = $.parseJSON(res);
					console.log(res)
					$('#get_packages_item_detail').html(res.html);
				},
				error: function(xhr) {
					$("#msg").html("Error: - " + xhr.status + " " + xhr.statusText);
				}
			});
		}
	</script>

	<!-- GET ITEM PACKAGES -->

	<script>
		function get_package_byId(id) {

			$('#update_package').modal({
				backdrop: 'static',
				keyboard: false,
				show: true
			});

			var package_id = id;
			$.ajax({
				type: "POST",
				url: '<?php echo base_url("Administration/edit_package") ?>',
				data: {
					package_id: package_id
				},
				success: function(res) {
					$('#get_data').html(res);
				},
				error: function(xhr) {
					$("#msg").html("Error: - " + xhr.status + " " + xhr.statusText);
				}
			});

			$(document).ready(function() {
				$("#update_package_detail").on('submit', (function(e) {
					e.preventDefault();
					var fd = new FormData(this);
					$.ajax({
						url: '<?php echo base_url("Administration/save_edit_package") ?>',
						data: fd,
						type: "POST",
						contentType: false,
						processData: false,
						cache: false,
						beforeSend: function() {
							imageOverlay('#update_package_detail', 'show');
						},
						complete: function(data) {
							imageOverlay('#update_package_detail', 'hide');
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
									window.location = res.redirect_link;
								}, 2000);

							} else {
								$("#msg").html(res);
								NioApp.Toast('<h5>' + res.message + '</h5>', 'error', {
									position: 'top-right',
									icon: 'auto',
									ui: ''
								});
							}
						},
						error: function(xhr) {
							$("#msg").html("Error: - " + xhr.status + " " + xhr.statusText);
						}
					});
				}));
			});
		}
	</script>

</body>

</html>