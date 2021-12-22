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
									<div class="nk-block-head nk-block-head-sm">
										<div class="nk-block-between">
											<a href="<?= base_url('customer/manage'); ?>" class="btn btn-primary">Back</em></a>
										</div>
									</div>
									<div class="nk-block nk-block-lg">
										<div class="nk-block-head">
										</div>
										<div class="card card-bordered animated fadeIn">
											<div class="card-inner">
												<div class="card-head">
													<h5 class="card-title">Edit Customer</h5>
												</div>
												<form action="#" method="POST" id="edit_customer">

													<div class="row g-4">
														<div class="col-sm-2">
															<div class="form-group">
																<div class="form-control-wrap">
																	<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Select Prefix" name="customer_prefix" id="customer_prefix">
																		<option value="<?= $customer[0]['customer_prefix'] ?>"><?= $customer[0]['customer_prefix'] ?></option>
																		<option value="Dr.">Dr.</option>
																		<option value="Mr.">Mr.</option>
																		<option value="Mrs.">Mrs.</option>
																		<option value="Ms.">Ms.</option>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-user"></em>
																	</div>
																	<input type="text" class="form-control caps" name="first_name" id="first_name" placeholder="First Name" value="<?= $customer[0]['customer_first_name'] ?>">
																</div>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<!--<label class="form-label" for="default-03">Last Name</label>-->
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-user"></em>
																	</div>
																	<input type="text" class="form-control caps-lastname" name="last_name" id="last_name" placeholder="Last Name" value="<?= $customer[0]['customer_last_name'] ?>">
																</div>
															</div>
														</div>
													</div>
													<div class="row g-4">
														<div class="col-sm-3">
															<div class="form-group">
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-home-alt"></em>
																	</div>
																	<input type="text" class="form-control caps-companyname" name="customer_company" id="customer_company" placeholder="Company" value="<?= $customer[0]['customer_company'] ?>">
																</div>
															</div>
														</div>
														<div class="col-sm-2">
															<div class="form-group">
																<div class="form-control-wrap">
																	<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Select Tax Status" name="tax_status" id="tax_status">
																		<option value="">Select Tax Status</option>
																		<?php for ($i = 0; $i < count($tax_type); $i++) : ?>
																			<option value="<?= $tax_type[$i]['tax_status_id'] ?>" <?php if ($customer[0]['tax_status'] == $tax_type[$i]['tax_status_id']) {
																																		echo 'selected';
																																	} ?>> <?= $tax_type[$i]['tax_status'] ?> </option>
																		<?php endfor; ?>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<!--<label class="form-label" for="default-03">Tax ID</label>-->
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-task"></em>
																	</div>
																	<input type="text" class="form-control" name="tax_id" id="tax_id" placeholder="Tax ID:" value="<?= $customer[0]['tax_id'] ?>">
																</div>
															</div>
														</div>
													</div>
													<div class="row g-4">
														<div class="col-sm-8">
															<div class="form-group">
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-map-pin"></em>
																	</div>
																	<input type="text" class="form-control caps-address" name="customer_address1" id="customer_address1" placeholder="Address" value="<?= $customer[0]['customer_address1'] ?>">
																</div>
															</div>
														</div>
													</div>

													<div class="row g-4">
														<div class="col-sm-3">
															<div class="form-group">
																<!--<label class="form-label" for="default-03">City</label>-->
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-map-pin-fill"></em>
																	</div>
																	<input type="text" class="form-control" name="city" id="city" placeholder="City" value="<?= $customer[0]['customer_city'] ?>">
																</div>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<!--<label class="form-label" for="default-03">State</label>-->
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-map-pin-fill"></em>
																	</div>
																	<input type="text" class="form-control" name="state" id="state" placeholder="State" value="<?= $customer[0]['customer_state'] ?>">
																</div>
															</div>
														</div>
														<div class="col-sm-2">
															<div class="form-group">
																<!--<label class="form-label" for="default-03">ZipCode</label>-->
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-map-pin-fill"></em>
																	</div>
																	<input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="zipcode" value="<?= $customer[0]['customer_zipcode'] ?>">
																</div>
															</div>
														</div>
													</div>
													<div class="row g-4">
														<div class="col-sm-4">
															<div class="form-group">
																<!--<label class="form-label" for="default-03">Primary Email</label>-->
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-mail"></em>
																	</div>
																	<input type="text" class="form-control" name="email" id="email" placeholder="Primary Email: admin@example.com" value="<?= $customer[0]['customer_primary_email'] ?>" readonly>
																</div>
															</div>
														</div>
														<div class="col-sm-4">
															<div class="form-group">
																<!--<label class="form-label" for="default-03">Primary Contact No.</label>-->
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-mobile"></em>
																	</div>
																	<input type="text" class="form-control phone-format" name="contact" id="contact" placeholder="Primary No:(000)-000-0000" value="<?= $customer[0]['customer_primary_contact_no'] ?>">
																</div>
															</div>
														</div>
														<div class="col-sm-4">
															<div class="form-group">
																<!--<label class="form-label" for="default-03">Whatsapp Number</label>-->
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-whatsapp"></em>
																	</div>
																	<input type="text" class="form-control phone-format" name="whatsapp_number" id="whatsapp_number" placeholder="Whatsapp No: (000)-000-0000" value="<?= $customer[0]['customer_whatsapp'] ?>">
																</div>
															</div>
														</div>
													</div>

													<hr size="1" style="width: 100%;">
													<div class="row g-4">
														<!-- <input type="hidden" name="business_id" value="1" /> -->
														<input type="hidden" name="customer_id" value="<?= $customer[0]['customer_id'] ?>" />

														<div class="col-12">
															<div class="form-group">
																<button type="submit" class="btn btn-primary">Update</button>
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
				<!-- content @e -->
				<!-- footer @s -->
				<?php $this->load->view('backend/includes/footer'); ?>
				<!-- footer @e -->
			</div>
			<!-- wrap @e -->
		</div>
		<!-- main @e -->
	</div>
	<!-- JavaScript -->
	<?php $this->load->view('backend/includes/scripts'); ?>
	<!-- /JavaScript -->

	<!-- GET ZIPCODE -->
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


		$('.caps').keypress(function(e) {

			// console.log($('.caps').attr('id'))
			let fn = $('.caps').val();
			const capitalStr = fn.replace(/\b\w/g, (c) => c.toUpperCase());
			$('.caps').val(capitalStr);

		});


		$('.caps-address').keypress(function() {
				let fn = $('.caps-address').val();
				const capitalStr = fn.replace(/\b\w/g, (c) => c.toUpperCase());
				$('.caps-address').val(capitalStr);
			});


			$('.caps-lastname').keypress(function() {


				let fn = $('.caps-lastname').val();
				const capitalStr = fn.replace(/\b\w/g, (c) => c.toUpperCase());
				$('.caps-lastname').val(capitalStr);
			});


			$('.caps-companyname').keypress(function() {


				let fn = $('.caps-companyname').val();
				const capitalStr = fn.replace(/\b\w/g, (c) => c.toUpperCase());
				$('.caps-companyname').val(capitalStr);
			});
	</script>



	<script type="text/javascript">
		$(document).ready(function() {

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
			/***phone number format***/



			$('.caps').keypress(function() {


				console.log($('.caps').attr('id'))
				let fn = $('.caps').val();
				const capitalStr = fn.replace(/\b\w/g, (c) => c.toUpperCase());
				$('.caps').val(capitalStr);

			});


			$('.cap-address').keypress(function() {


				let fn = $('.cap-address').val();
				const capitalStr = fn.replace(/\b\w/g, (c) => c.toUpperCase());
				$('.cap-address').val(capitalStr);

			});
		});
	</script>





	<script>
		$(document).ready(function() {
			$("#edit_customer").on('submit', (function(e) {
				e.preventDefault();
				var fd = new FormData(this);
				$.ajax({
					url: '<?php echo base_url("Customer/update_customer") ?>',
					data: fd,
					type: "POST",
					contentType: false,
					processData: false,
					cache: false,
					beforeSend: function() {
						imageOverlay('#edit_customer', 'show');
					},
					complete: function(data) {
						imageOverlay('#edit_customer', 'hide');
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
								window.location = res.redirect_link;
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

</html>