<!DOCTYPE html>
<html lang="zxx" class="js">


<!-- HEAD -->
<?php $this->load->view('backend/includes/head'); ?>
<!-- /HEAD-->

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
										<div class="nk-block-head">
										</div>
										<div class="card card-bordered animated fadeIn">
											<div class="card-inner">
												<div class="card-head">
													<h5 class="card-title">Add Business</h5>
												</div>
												<form action="#" method="POST" id="add_business">
													<div class="row g-4">
														<div class="col-sm-4">
															<div class="form-group">
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-user"></em>
																	</div>
																	<input type="text" class="form-control" name="business_name" id="business_name" placeholder="Business Name">
																</div>
															</div>
														</div>
														<div class="col-sm-4">
															<div class="form-group">
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-mail"></em>
																	</div>
																	<input type="text" class="form-control" name="business_email" id="email" placeholder="Email: admin@example.com">
																</div>
															</div>
														</div>
														<div class="col-sm-4">
															<div class="form-group">
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-mobile"></em>
																	</div>
																	<input type="text" class="form-control phone-format" name="business_contact_no" id="contact" placeholder="No: (111)-111-1111">
																</div>
															</div>
														</div>
													</div>
													<div class="row g-4">
														<div class="col-sm-4">
															<div class="form-group">
																<!--<label class="form-label" for="default-03">ZipCode</label>-->
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-map-pin-fill"></em>
																	</div>
																	<input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="zipcode">
																</div>
															</div>
														</div>
														<div class="col-sm-4">
															<div class="form-group">
																<!--<label class="form-label" for="default-03">City</label>-->
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-map-pin-fill"></em>
																	</div>
																	<input type="text" class="form-control" name="city" id="city" placeholder="City">
																</div>
															</div>
														</div>
														<div class="col-sm-4">
															<div class="form-group">
																<!--<label class="form-label" for="default-03">State</label>-->
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-map-pin-fill"></em>
																	</div>
																	<input type="text" class="form-control" name="state" id="state" placeholder="State">
																</div>
															</div>
														</div>
													</div>
													<div class="row g-4">
														<div class="col-sm-4">
															<div class="form-group">
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-map-pin"></em>
																	</div>
																	<input type="text" class="form-control" name="business_address" id="vendor_address1" placeholder="Address">
																</div>
															</div>
														</div>
														<div class="col-sm-4">
															<div class="form-group">
																<div class="form-control-wrap">
																	<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Select Tax Status" name="tax_status" id="tax_status">
																		<option value="">Select Tax Status</option>
																		<?php for ($i = 0; $i < count($tax_type); $i++) : ?>
																			<option value="<?= $tax_type[$i]['tax_status_id'] ?>"> <?= $tax_type[$i]['tax_status'] ?> </option>
																		<?php endfor; ?>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-sm-4">
															<div class="form-group">
																<!--<label class="form-label" for="default-03">Tax ID</label>-->
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-task"></em>
																	</div>
																	<input type="text" class="form-control" name="tax_id" id="tax_id" placeholder="Tax ID:">
																</div>
															</div>
														</div>
													</div>
													<div class="row g-4">
														<div class="col-sm-4">
															<div class="form-group">
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-globe"></em>
																	</div>
																	<input type="text" class="form-control" name="business_website" id="business_website" placeholder="Website: https://abc.om">
																</div>
															</div>
														</div>
														<div class="col-sm-4">
															<div class="form-group">
																<div class="form-control-wrap">
																	<div class="custom-file">
																		<input type="file" multiple class="custom-file-input" name="image" id="customFile">
																		<label class="custom-file-label" for="customFile">Logo</label>
																	</div>
																</div>
															</div>
														</div>
													</div>

													<hr size="1" style="width: 100%;">
													<div class="nk-block-head nk-block-head-line">
														<h6 class="title overline-title text-base">Contact Persons</h6>
													</div>
													<div id="dynamictable">
														<div class="row g-4">
															<div class="col-sm-2">
																<div class="form-group">
																	<div class="form-control-wrap">
																		<div class="form-icon form-icon-left">
																			<em class="icon ni ni-user"></em>
																		</div>
																		<input type="text" class="form-control" name="title[]" id="title" placeholder="Title">
																	</div>
																</div>
															</div>
															<div class="col-sm-2">
																<div class="form-group">
																	<div class="form-control-wrap">
																		<div class="form-icon form-icon-left">
																			<em class="icon ni ni-user"></em>
																		</div>
																		<input type="text" class="form-control" name="person[]" id="person" placeholder="Name">
																	</div>
																</div>
															</div>
															<div class="col-sm-3">
																<div class="form-group">
																	<div class="form-control-wrap">
																		<div class="form-icon form-icon-left">
																			<em class="icon ni ni-mail"></em>
																		</div>
																		<input type="email" class="form-control" name="other_email[]" id="other_email" placeholder="Email">
																	</div>
																</div>
															</div>
															<div class="col-sm-3">
																<div class="form-group">
																	<div class="form-control-wrap">
																		<div class="form-icon form-icon-left">
																			<em class="icon ni ni-mobile"></em>
																		</div>
																		<input type="text" class="form-control" name="other_contact[]" id="other_contact" placeholder="Contact No">
																	</div>
																</div>
															</div>
															<div class="col-sm-2">
																<div class="form-group">
																	<a class="btn btn-primary add_more" href="#"><em class="icon ni ni-plus"></em></a>
																</div>
															</div>
														</div>
													</div>

													<hr size="1" style="width: 100%;">
													<div class="nk-block-head nk-block-head-line">
														<h6 class="title overline-title text-base">Subcription Detail</h6>
													</div>

													<div class="row g-4">
														<div class="col-sm-3">
															<div class="form-group">
																<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Select Package" name="package_type" id="package_type">
																	<option value="">Select Pakage</option>
																	<?php for ($i = 0; $i < count($subscription_packages); $i++) : ?>
																		<option value="<?= $subscription_packages[$i]['sub_package_id']; ?>"><?= $subscription_packages[$i]['sub_package']; ?></option>
																	<?php endfor; ?>
																</select>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-calendar"></em>
																	</div>
																	<input type="text" class="form-control date-picker" name="start_date" id="start_date" placeholder="Start Date">
																</div>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-calendar"></em>
																	</div>
																	<input type="text" class="form-control date-picker" name="end_date" id="end_date" placeholder="End Date">
																</div>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Status" name="status" id="status">
																	<option value="">Status</option>
																	<option value="active">Active</option>
																	<option value="inactive">Inactive</option>

																</select>
															</div>
														</div>

													</div>
													<hr size="1" style="width: 100%;">
													<div class="nk-block-head nk-block-head-line">
														<h6 class="title overline-title text-base">Create Account</h6>
													</div>

													<div class="row g-4">
														<div class="col-sm-3">
															<div class="form-group">
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-user"></em>
																	</div>
																	<input type="text" class="form-control " name="name" placeholder="User Name">
																</div>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-mail"></em>
																	</div>
																	<input type="email" class="form-control" name="email" id="email" placeholder="Email">
																</div>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-lock"></em>
																	</div>
																	<input type="password" class="form-control date-picker" name="password" id="password" placeholder="Password">
																</div>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<select class="form-select form-control form-control" data-search="on" data-placeholder="Status" name="user_status">
																	<option value="">Status</option>
																	<option value="Active">Active</option>
																	<option value="Inactive">Inactive</option>

																</select>
															</div>
														</div>

													</div>

													<div class="row g-4">
														<!-- <input type="hidden" name="business_id" value="1" /> -->
														<div class="col-12">
															<div class="form-group">
																<button class="btn btn-primary" type="submit"><span>Save</span></button>
															</div>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div><!-- .nk-block -->
								</div><!-- .components-preview -->
							</div>
						</div>
					</div>
				</div>
				<!-- content @s -->

				<!-- footer @s -->
				<?php $this->load->view('Backend/includes/footer'); ?>
				<!-- footer @e -->
			</div>
			<!-- wrap @e -->
		</div>
		<!-- main @e -->
	</div>


	<!-- JavaScript -->
	<?php $this->load->view('Backend/includes/scripts'); ?>
	<!-- /JavaScript -->


	<script>
		$(document).ready(function() {
			/***phone number format***/

			$("#add_business").keypress(function(e) {
				console.log(e.target.value)
				window.onbeforeunload = function() {
					if ($("#add_business") !== "") {
						 return "You have made changes on this page that you have not yet confirmed. If you navigate away from this page you will lose your unsaved changes";
					}
				}
			});
		});
		// var warning = true;
	</script>


	<script>
		$(document).ready(function() {
			$("#add_business").on('submit', (function(e) {
				e.preventDefault();
				var fd = new FormData(this);
				$.ajax({
					url: '<?php echo base_url("Business/save_business") ?>',
					data: fd,
					type: "POST",
					contentType: false,
					processData: false,
					cache: false,
					beforeSend: function() {
						imageOverlay('#add_business', 'show');
					},
					complete: function(data) {
						imageOverlay('#add_business', 'hide');
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
								// location.reload()
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

	<script>
		$("#zipcode").change(function(e) {
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
						console.log(res.data);
						console.log(res.data[0].location_address)
						$('#city').val(res.data[0].location_city)
						$('#state').val(res.data[0].location_state)
					} else {
						$('#city').val('')
						$('#state').val('')
					}

				}

			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function() {
			/***phone number format***/
			$(".phone-format").keypress(function(e) {
				if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
					return false;
				}
				var curchr = this.value.length;
				var curval = $(this).val();
				if (curchr == 3 && curval.indexOf("(") <= -1) {
					$(this).val("(" + curval + ")" + "-");
				} else if (curchr == 4 && curval.indexOf("(") > -1) {
					$(this).val(curval + ")-");
				} else if (curchr == 5 && curval.indexOf(")") > -1) {
					$(this).val(curval + "-");
				} else if (curchr == 9) {
					$(this).val(curval + "-");
					$(this).attr('maxlength', '14');
				}
			});
		});
	</script>


	<script type="text/javascript">
		var i = 0;
		$(".add_more").click(function(e) {

			e.preventDefault();
			// var html = "";
			// html += '<div class="row g-4" id="'+i+'">';
			// html += '<div class="col-sm-3"><div class="form-group"><div class="form-control-wrap"><select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Contact Type" name="contact_type" id="contact_type"><option value="">Contact Type</option><option value="Home">Home</option><option value="Office">Office</option></select></div></div></div>';
			// html += '<div class="col-sm-3"><div class="form-group"><div class="form-control-wrap"><div class="form-icon form-icon-left"> <em class="icon ni ni-mail"></em> </div> <input type="email" class="form-control" name="other_email" id="other_email" placeholder="Email"> </div> </div> </div>';
			// html += '<div class="col-sm-3"><div class="form-group"><div class="form-control-wrap"><div class="form-icon form-icon-left"> <em class="icon ni ni-mobile"></em> </div> <input type="text" class="form-control" name="other_contact" id="other_contact" placeholder="Contact No"> </div> </div> </div>';
			// html += '<div class="col-sm-3"> <div class="form-group"> <a class="btn btn-danger remove" val="'+i+'" href="#"><em class="icon ni ni-delete"></em></a></div></div>';
			// html += '</div>';
			// i++;
			$("#dynamictable").append(`<div class="row g-4" id="${i}">
<div class="col-sm-2">
<div class="form-group">
<div class="form-control-wrap">
<div class="form-icon form-icon-left">
<em class="icon ni ni-user"></em>
</div>
<input type="text" class="form-control" name="title[]" id="title[]" placeholder="Title">
</div>
</div>
</div>
<div class="col-sm-2">
<div class="form-group">
<div class="form-control-wrap">
<div class="form-icon form-icon-left">
<em class="icon ni ni-user"></em>
</div>
<input type="text" class="form-control" name="person[]" id="person[]" placeholder="Name">
</div>
</div>
</div>
<div class="col-sm-3">
<div class="form-group">
<div class="form-control-wrap">
<div class="form-icon form-icon-left">
<em class="icon ni ni-mail"></em>
</div>
<input type="email" class="form-control" name="other_email[]" id="other_email[]" placeholder="Email">
</div>
</div>
</div>
<div class="col-sm-3">
<div class="form-group">
<div class="form-control-wrap">
<div class="form-icon form-icon-left">
<em class="icon ni ni-mobile"></em>
</div>
<input type="text" class="form-control" name="other_contact[]" id="other_contact[]" placeholder="Contact No">
</div>
</div>
</div>
<div class="col-sm-2">
<div class="form-group">
<a class="btn btn-danger remove" val="${i}" href="#"><em class="icon ni ni-delete"></em></a>
</div>
</div>
</div>`);
			i++;

		});

		$(document).on('click', '.remove', function(e) {
			e.preventDefault();
			var id = this.getAttribute('val');
			$("#" + id).remove();
		});
	</script>


</body>

</html>