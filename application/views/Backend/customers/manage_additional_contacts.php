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
												<div class="nk-block-between">
													<a href="<?= base_url('customer/manage'); ?>" class="btn btn-primary">Back</em></a>
												</div>

												<div class="nk-block-head-content">
													<h3 class="nk-block-title page-title">Customer Additional Contacts</h3>

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
															<th>Type</th>
															<th>Name</th>
															<th>Email</th>
															<th>Contact</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
														<?php for ($i = 0; $i < count($contacts); $i++) : ?>
															<tr>
																<td><?= $i + 1; ?></td>
																<td><?= $contacts[$i]['customer_contact_type'] ?></td>
																<td><?= $contacts[$i]['c_name'] ?></td>
																<td><?= $contacts[$i]['c_email'] ?></td>
																<td><?= $contacts[$i]['c_contact_no'] ?></td>
																<td align="center">
																	<!-- <a href="#" class="btn btn-xs btn-primary"><span class="icon ni ni-eye"></span></a> -->
																	<a onclick="get_contact_by_id(<?= $contacts[$i]['c_additional_contact_info_id'] ?>, <?= $contacts[$i]['c_customer_id'] ?>)" class="btn btn-xs btn-success"><span class="icon ni ni-eye"></span></a>
																	<a onclick="edit_contact_by_id(<?= $contacts[$i]['c_additional_contact_info_id'] ?>, <?= $contacts[$i]['c_customer_id'] ?>)" class="btn btn-xs btn-warning"><span class="icon ni ni-edit"></span></a>
																	<!-- <button type="button" data-toggle="modal" data-target="#exampleModal-edit"class="btn btn-xs btn-warning"><span class="icon ni ni-edit"></span></button> -->
																	<button type="button" onclick="validate(this)" value="<?= $contacts[$i]['c_additional_contact_info_id'] ?>" class="btn btn-xs btn-danger"><span class="icon ni ni-trash"></span></button>
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


				<!-- ADD CONTACT TYPE -->
				<div class="modal fade" tabindex="-1" id="modalForm">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add New Contact</h5>
								<a href="#" class="close" data-dismiss="modal" aria-label="Close">
									<em class="icon ni ni-cross"></em>
								</a>
							</div>
							<div class="modal-body">
								<form action="#" method="POST" id="save_contact" class="form-validate is-alter">
									<div class="row g-4">
										<div class="col-sm-6">
											<div class="form-group">
												<div class="form-control-wrap">
													<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Select Type" name="c_type" id="c_type">
														<option value="">Select Type</option>
														<?php for ($i = 0; $i < count($types); $i++) : ?>
															<option value="<?= $types[$i]['customer_contact_type_id'] ?>"><?= $types[$i]['customer_contact_type'] ?></option>
														<?php endfor; ?>
													</select>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<div class="form-control-wrap">
													<div class="form-icon form-icon-left">
														<em class="icon ni ni-user"></em>
													</div>
													<input type="text" class="form-control" name="c_name" id="c_name" placeholder="Name">
												</div>
											</div>
										</div>
									</div>
									<div class="row g-4">
										<div class="col-sm-6">
											<div class="form-group">
												<div class="form-control-wrap">
													<div class="form-icon form-icon-left">
														<em class="icon ni ni-mail"></em>
													</div>
													<input type="text" class="form-control" name="c_email" id="c_email" placeholder="Email:">
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<div class="form-control-wrap">
													<div class="form-icon form-icon-left">
														<em class="icon ni ni-call"></em>
													</div>
													<input type="text" class="form-control phone-format" name="c_contact_no" id="c_contact_no" placeholder="Contact No:">
												</div>
											</div>
										</div>
									</div>
									<div class="row g-4">
										<div class="col-sm-6">
											<div class="form-group">
												<div class="form-control-wrap">
													<div class="form-icon form-icon-left">
														<em class="icon ni ni-map-pin-fill"></em>
													</div>
													<input type="text" class="form-control c_zip" name="c_zip" id="c_zip_val" placeholder="ZipCode">
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<div class="form-control-wrap">
													<div class="form-icon form-icon-left">
														<em class="icon ni ni-map-pin-fill"></em>
													</div>
													<input type="text" class="form-control" name="c_city" id="c_city_val" placeholder="City">
												</div>
											</div>
										</div>
									</div>
									<div class="row g-4">
										<div class="col-sm-6">
											<div class="form-group">
												<div class="form-control-wrap">
													<div class="form-icon form-icon-left">
														<em class="icon ni ni-map-pin-fill"></em>
													</div>
													<input type="text" class="form-control" name="c_state" id="c_state_val" placeholder="State">
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<div class="form-control-wrap">
													<div class="form-icon form-icon-left">
														<em class="icon ni ni-map"></em>
													</div>
													<input type="text" class="form-control" name="c_address" id="c_address" placeholder="Address">
												</div>
											</div>
										</div>
									</div>
									<input type="hidden" name="customer_id" value="<?= $customer_id; ?>">
							</div>
							<div class="modal-footer bg-light">
								<button type="submit" class="btn btn-primary">Save</button>
								<button class="btn btn-danger" data-dismiss="modal" aria-label="Close">Close</button>
							</div>
							</form>
						</div>
					</div>
				</div>
				<!-- /ADD CONTACT TYPE  -->



				<!-- View Contact TYPE -->
				<div class="modal fade" tabindex="-1" id="view_additional_contacts">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">View Contact Detail</h5>
								<a href="#" class="close" data-dismiss="modal" aria-label="Close">
									<em class="icon ni ni-cross"></em>
								</a>
							</div>
							<div class="modal-body">
								<form action="#" method="POST" id="" class="form-validate is-alter">
									<div class="row g-4">
										<div class="col-sm-6">
											<div class="form-group">
												<div class="form-control-wrap">
													<div class="form-icon form-icon-left">
														<em class="icon ni ni-user"></em>
													</div>
													<input type="text" class="form-control" name="c_type" id="c_type_val" placeholder="type" disabled>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<div class="form-control-wrap">
													<div class="form-icon form-icon-left">
														<em class="icon ni ni-user"></em>
													</div>
													<input type="text" class="form-control" name="c_name" id="c_name_val" placeholder="Name" disabled>
												</div>
											</div>
										</div>
									</div>
									<div class="row g-4">
										<div class="col-sm-6">
											<div class="form-group">
												<div class="form-control-wrap">
													<div class="form-icon form-icon-left">
														<em class="icon ni ni-mail"></em>
													</div>
													<input type="text" class="form-control" name="c_email" id="c_email_val" placeholder="Email:" disabled>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<div class="form-control-wrap">
													<div class="form-icon form-icon-left">
														<em class="icon ni ni-call"></em>
													</div>
													<input type="text" class="form-control phone-format" name="c_contact_no" id="c_contact_no_val" placeholder="Contact No:" disabled>
												</div>
											</div>
										</div>
									</div>
									<div class="row g-4">
										<div class="col-sm-6">
											<div class="form-group">
												<div class="form-control-wrap">
													<div class="form-icon form-icon-left">
														<em class="icon ni ni-map-pin-fill"></em>
													</div>
													<input type="text" class="form-control" name="c_zip" id="c_zip_val_detail" placeholder="ZipCode" disabled>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<div class="form-control-wrap">
													<div class="form-icon form-icon-left">
														<em class="icon ni ni-map-pin-fill"></em>
													</div>
													<input type="text" class="form-control" name="c_city" id="c_city_val_detail" placeholder="City" disabled>
												</div>
											</div>
										</div>
									</div>
									<div class="row g-4">
										<div class="col-sm-6">
											<div class="form-group">
												<div class="form-control-wrap">
													<div class="form-icon form-icon-left">
														<em class="icon ni ni-map-pin-fill"></em>
													</div>
													<input type="text" class="form-control" name="c_state" id="c_state_val_detail" placeholder="State" disabled>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<div class="form-control-wrap">
													<div class="form-icon form-icon-left">
														<em class="icon ni ni-map"></em>
													</div>
													<input type="text" class="form-control" name="c_address" id="c_address_val" placeholder="Address" disabled>
												</div>
											</div>
										</div>
									</div>
									<!-- <input type="hidden" name="customer_id" value="<?= $customer_id; ?>"> -->
							</div>
							<div class="modal-footer bg-light">
								<button class="btn btn-danger" data-dismiss="modal" aria-label="Close">Close</button>
							</div>
							</form>
						</div>
					</div>
				</div>
				<!-- /View Contact TYPE  -->


				<!-- EDIT CONTACT TYPE -->
				<div class="modal fade" tabindex="-1" id="edit_additional_contacts">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Contact Detail</h5>
								<a href="#" class="close" data-dismiss="modal" aria-label="Close">
									<em class="icon ni ni-cross"></em>
								</a>
							</div>
							<div class="modal-body">
								<form action="#" method="POST" id="update_contact" class="form-validate is-alter">
									<div id="get_data">

									</div>

									<input type="text" name="contact_id" id="contact_id">
							</div>
							<div class="modal-footer bg-light">
								<button type="submit" class="btn btn-primary">Update</button>
								<button class="btn btn-danger" data-dismiss="modal" aria-label="Close">Close</button>
							</div>
							</form>
						</div>
					</div>
				</div>
				<!-- /EDIT CONTACT TYPE  -->

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


	<!-- GET ZIPCODE -->
	<script>
		$("#c_zip_val").change(function(e) {
			console.log(e.target.value)
			var zipcode = e.target.value;
			$.ajax({
				type: "POST",
				url: '<?php echo base_url("Administration/get_location_by_zipcode") ?>',
				data: {
					zipcode: zipcode
				},
				success: function(res) {
					var res = $.parseJSON(res);
					if (res.data[0] != undefined || res.data.length != 0) {
						// console.log(res.data);
						console.log(res.data[0].location_address)
						$('#c_city_val').val(res.data[0].location_city)
						$('#c_state_val').val(res.data[0].location_state)
					} else {
						$('#c_city_val').val('')
						$('#c_state_val').val('')
					}

				}

			});
		});


		// $(document).on("change", '.c_zip', function(e) {

		// 	console.log(e.target.value)
		// 	var zipcode = e.target.value;
		// 	$.ajax({
		// 		type: "POST",
		// 		url: '<?php echo base_url("Administration/get_location_by_zipcode") ?>',
		// 		data: {
		// 			zipcode: zipcode
		// 		},
		// 		success: function(res) {
		// 			var res = $.parseJSON(res);
		// 			if (res.data[0] != undefined || res.data.length != 0) {
		// 				// console.log(res.data);
		// 				console.log(res.data[0].location_address)
		// 				$('#c_city_val').val(res.data[0].location_city)
		// 				$('#c_state_val').val(res.data[0].location_state)
		// 			} else {
		// 				$('#c_city_val').val('')
		// 				$('#c_state_val').val('')
		// 			}

		// 		}

		// 	});
		// });


		$(document).on("keypress", '.phone-format', function(e) {
			// console.log('sds')
			if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
				return false;
			}
			var curchr = this.value.length;
			var curval = $(this).val();
			if (curchr == 3 && curval.indexOf("(") <= -1) {
				$(this).val("(" + curval + ")" + " ");
			} else if (curchr == 4 && curval.indexOf("(") > -1) {
				$(this).val(curval + ")-");
			} else if (curchr == 5 && curval.indexOf(")") > -1) {
				$(this).val(curval + "-");
			} else if (curchr == 9) {
				$(this).val(curval + "-");
				$(this).attr('maxlength', '14');
			}
		});
	</script>
	<!-- GET ZIPCODE -->

	<script>
		$(document).ready(function() {
			$("#save_contact").on('submit', (function(e) {
				e.preventDefault();
				var fd = new FormData(this);
				$.ajax({
					url: '<?php echo base_url("Customer/save_additional_contact_info") ?>',
					data: fd,
					type: "POST",
					contentType: false,
					processData: false,
					cache: false,
					beforeSend: function() {
						imageOverlay('#save_contact', 'show');
					},
					complete: function(data) {
						imageOverlay('#save_contact', 'hide');
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
								location.reload(true);
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



	<!-- EDIT  CONTACT DETAIL SECTION -->

	<script>
		function edit_contact_by_id(id, c_id) {

			$('#edit_additional_contacts').modal({
				backdrop: 'static',
				keyboard: false,
				show: true
			});

			var contact_id = id;

			$('#contact_id').val(contact_id)
			// console.log(contact_id, c_id);
			$.ajax({
				type: "POST",
				url: '<?php echo base_url("Customer/edit_additional_contact_details") ?>',
				data: {
					contact_id: contact_id,
					customer_id: c_id
				},
				success: function(res) {
					res = $.parseJSON(res);
					console.log(res)
					if (res.msg_type === 'success') {
						$('#get_data').html(res.html);

					} else {
						$("#msg").html(res);
						toastr.error(res.message);
					}
				},
				error: function(xhr) {
					$("#msg").html("Error: - " + xhr.status + " " + xhr.statusText);
				}
			});

			$(document).ready(function() {
				$("#update_contact").on('submit', (function(e) {
					e.preventDefault();
					var fd = new FormData(this);
					$.ajax({
						url: '<?php echo base_url("Customer/update_contact_type") ?>',
						data: fd,
						type: "POST",
						contentType: false,
						processData: false,
						cache: false,
						beforeSend: function() {
							imageOverlay('#update_contact', 'show');
						},
						complete: function(data) {
							imageOverlay('#update_contact', 'hide');
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

									location.reload(true)
									// window.location = res.redirect_link;
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





	<script>
		function get_contact_by_id(id, c_id) {

			$('#view_additional_contacts').modal({
				backdrop: 'static',
				keyboard: false,
				show: true
			});

			var contact_id = id;
			// console.log(contact_id, c_id);
			$.ajax({
				type: "POST",
				url: '<?php echo base_url("Customer/get_additional_contact_details") ?>',
				data: {
					contact_id: contact_id,
					customer_id: c_id
				},
				success: function(res) {
					res = $.parseJSON(res);
					// console.log(res.data)
					$('#c_type_val').val(res.data.contacts[0].customer_contact_type)
					$('#c_name_val').val(res.data.contacts[0].c_name)
					$('#c_email_val').val(res.data.contacts[0].c_email)
					$('#c_contact_no_val').val(res.data.contacts[0].c_contact_no)
					$('#c_zip_val_detail').val(res.data.contacts[0].c_zip)
					$('#c_state_val_detail').val(res.data.contacts[0].c_state)
					$('#c_city_val_detail').val(res.data.contacts[0].c_city)
					$('#c_address_val').val(res.data.contacts[0].c_address)
				},
				error: function(xhr) {
					$("#msg").html("Error: - " + xhr.status + " " + xhr.statusText);
				}
			});
		}
	</script>




	<script type="text/javascript">
		function validate(a) {
			var id = a.value;
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
						url: '<?= base_url('Customer/delete_additional_contact') ?>',
						data: {
							'contact_info_id': id
						}
					}).then(function(res) {
						var res = $.parseJSON(res);
						if (res.msg_type === 'success') {
							$(a).closest('tr').remove();
							swal.fire('Deleted!', 'Contact has been Deleted.', 'success');
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

</body>

</html>