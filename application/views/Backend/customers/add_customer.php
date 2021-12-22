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
									<div class="nk-block nk-block-lg">
										<div class="nk-block-head">
										</div>
										<div class="card card-bordered animated fadeIn">
											<div class="card-inner">
												<div class="card-head">
													<h5 class="card-title">Add Customer</h5>
												</div>
												<form action="#" method="POST" id="add_customer">

													<div class="row g-4">
														<div class="col-sm-2">
															<div class="form-group">
																<div class="form-control-wrap">
																	<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Select Prefix" name="customer_prefix" id="customer_prefix">
																		<option value="">Select Prefix</option>
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
																	<input type="text" class="form-control caps" name="first_name" id="first_name" placeholder="First Name">
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
																	<input type="text" class="form-control caps-lastname" name="last_name" id="last_name" placeholder="Last Name">
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
																	<input type="text" class="form-control caps-companyname" name="customer_company" id="customer_company" placeholder="Company">
																</div>
															</div>
														</div>
														<div class="col-sm-2">
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
														<div class="col-sm-3">
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
														<div class="col-sm-8">
															<div class="form-group">
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-map-pin"></em>
																	</div>
																	<input type="text" class="form-control caps-address" name="customer_address1" id="customer_address1" placeholder="Address ">
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
																	<input type="text" class="form-control" name="city" id="city" placeholder="City">
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
																	<input type="text" class="form-control" name="state" id="state" placeholder="State">
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
																	<input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="zipcode">
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
																	<input type="text" class="form-control email-co" name="email" id="email" placeholder="Primary Email: admin@example.com">
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
																	<input type="text" class="form-control phone-format" name="contact" id="contact" placeholder="Primary No:(000)-000-0000">
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
																	<input type="text" class="form-control phone-format" name="whatsapp_number" id="whatsapp_number" placeholder="Whatsapp No: (000)-000-0000">
																</div>
															</div>
														</div>
													</div>

													<hr size="1" style="width: 100%;">
													<div class="nk-block-head nk-block-head-line">
														<h6 class="title overline-title text-base">Additional Contacts</h6>
													</div>
													<div id="dynamictable">
														<div class="row g-4">
															<div class="col-sm-2">
																<div class="form-group">
																	<div class="form-control-wrap">
																		<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Type" name="contact_type[]" id="contact_type[]">
																			<option value="">Type</option>
																			<?php foreach ($contact_types as $row) : ?>
																				<option value="<?= $row->contact_type_id; ?>"><?= $row->contact_type; ?></option>
																			<?php endforeach; ?>
																		</select>
																	</div>
																</div>
															</div>
															<div class="col-sm-2">
																<div class="form-group">
																	<div class="form-control-wrap">
																		<div class="form-icon form-icon-left">
																			<em class="icon ni ni-user"></em>
																		</div>
																		<input type="text" class="form-control" name="peron[]" id="person[]" placeholder="Name">
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
																		<input type="text" class="form-control phone-format" name="other_contact[]" id="other_contact[]" placeholder="Contact No">
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
														<h6 class="title overline-title text-base">Shipment Info</h6>
													</div>
													<div class="row g-4">
														<div class="col-sm-3">
															<div class="form-group">
																<!--<label class="form-label" for="default-03">First Name</label>-->
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-user"></em>
																	</div>
																	<input type="text" class="form-control" name="shipment_person_name" id="contact_person_name" placeholder="Name">
																</div>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<!--<label class="form-label" for="default-03">Last Name</label>-->
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-map-pin"></em>
																	</div>
																	<input type="text" class="form-control" name="shipment_address1" id="shipment_address1" placeholder="Address1">
																</div>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<!--<label class="form-label" for="default-03">Primary Email</label>-->
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-map-pin"></em>
																	</div>
																	<input type="text" class="form-control" name="shipment_address2" id="shipment_address2" placeholder="Address2">
																</div>
															</div>
														</div>
													</div>
													<div class="row g-4">
														<div class="col-sm-3">
															<div class="form-group">
																<!--<label class="form-label" for="default-03">Primary Contact No.</label>-->
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-map-pin"></em>
																	</div>
																	<input type="text" class="form-control" name="shipment_zipcode" id="shipment_zipcode" placeholder="Zipcode">
																</div>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<!--<label class="form-label" for="default-03">Primary Contact No.</label>-->
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-globe"></em>
																	</div>
																	<input type="text" class="form-control" name="shipment_city" id="shipment_city" placeholder="City">
																</div>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<!--<label class="form-label" for="default-03">Primary Contact No.</label>-->
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-globe"></em>
																	</div>
																	<input type="text" class="form-control" name="shipment_state" id="shipment_state" placeholder="State">
																</div>
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
																	<input type="text" class="form-control cust-name" name="name" placeholder="User Name" readonly>
																</div>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-mail"></em>
																	</div>
																	<input type="email" class="form-control accountemail" name="email" id="email" placeholder="Email" readonly>
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

													<hr size="1" style="width: 100%;">
													<div class="row g-4">
														<input type="hidden" name="business_id" value="1" />
														<div class="col-12">
															<div class="form-group">
																<button type="submit" class="btn btn-primary">Save</button>
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



	<script>
		$(document).ready(function() {
			/***phone number format***/
			$("#add_customer").keypress(function(e) {
			
				// console.log($("input:text").val())
				console.log($("input").val())
				window.onbeforeunload = function() {
					if ($("input:text").val() !== "") {
						console.log($("#add_customer")[0]);
						return "You have made changes on this page that you have not yet confirmed. If you navigate away from this page you will lose your unsaved changes";
					}
				}
			});
		});
		// var warning = true;
	</script>

	<!-- GET ZIPCODE -->
	<script>
		$("#zipcode").change(function(e) {
			// console.log(e.target.value)
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
	<!-- GET ZIPCODE -->


	<script>
		$("#shipment_zipcode").change(function(e) {
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
						$('#shipment_city').val(res.data[0].location_city)
						$('#shipment_state').val(res.data[0].location_state)
					} else {
						$('#shipment_city').val('')
						$('#shipment_state').val('')
					}

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
<select class="form-select form-control" data-search="on" data-placeholder="Type" name="contact_type[]" id="contact_type[]">
<option value="">Type</option>
<?php foreach ($contact_types as $row) : ?>
<option value="<?= $row->contact_type_id; ?>"><?= $row->contact_type; ?></option>
<?php endforeach; ?>
</select>
</div>
</div>
</div>
<div class="col-sm-2">
<div class="form-group">
<div class="form-control-wrap">
<div class="form-icon form-icon-left">
<em class="icon ni ni-user"></em>
</div>
<input type="text" class="form-control" name="peron[]" id="person[]" placeholder="Name">
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
<input type="text" class="form-control phone-format" name="other_contact[]" id="other_contact[]" placeholder="Contact No">
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
			NioApp.Select2.init = function() {
				NioApp.Select2('.form-select');
			}

		});




		$(document).on('click', '.remove', function(e) {
			e.preventDefault();
			var id = this.getAttribute('val');
			$("#" + id).remove();
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



			$('.caps').keypress(function(e) {

				// console.log($('.caps').attr('id'))
				let fn = $('.caps').val();
				const capitalStr = fn.replace(/\b\w/g, (c) => c.toUpperCase());
				$('.caps').val(capitalStr);

			});


			$('.caps').change(function(e) {

				$('.cust-name').val(e.target.value);

			});


			$('.email-co').change(function(e) {

				// console.log(e.target.value)
				// let fn = $('.email').val();
				$('.accountemail').val(e.target.value);

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
		});
	</script>


	<script>
		$(document).ready(function() {
			$("#add_customer").on('submit', (function(e) {
				e.preventDefault();
				var fd = new FormData(this);
				// console.log(fd)
				// $("input:text").val('');
				// $("#add_customer")[0].reset();
				$.ajax({
					url: '<?php echo base_url("Customer/save_customer") ?>',
					data: fd,
					type: "POST",
					contentType: false,
					processData: false,
					cache: false,
					beforeSend: function() {
						imageOverlay('#add_customer', 'show');
					},
					complete: function(data) {
						imageOverlay('#add_customer', 'hide');
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