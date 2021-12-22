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

									<div class="card card-preview">
										<div class="card-inner">
											<ul class="nav nav-tabs mt-n3">
												<li class="nav-item">
													<a class="nav-link active " data-toggle="tab" href="#tabItem5"><em class="icon ni ni-user"></em><span>General info</span></a>
												</li>
												<li class="nav-item">
													<a class="nav-link " data-toggle="tab" href="#tabItem6"><em class="icon ni ni-folder"></em><span>Documents</span></a>
												</li>
												<li class="nav-item">
													<a class="nav-link " data-toggle="tab" href="#tabItem7"><em class="icon ni ni-chat"></em><span>Feedbacks & Notes</span></a>
												</li>

											</ul>
											<div class="tab-content">
												<div class="tab-pane active animated fadeIn" id="tabItem5">
													<form action="#" method="POST" id="update_vendor">
														<div class="row g-4">
															<div class="col-sm-6">
																<div class="form-group">
																	<!--<label class="form-label" for="default-03">First Name</label>-->
																	<div class="form-control-wrap">
																		<div class="form-icon form-icon-left">
																			<em class="icon ni ni-user"></em>
																		</div>
																		<input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name" value="<?= $vendor['vendor_first_name'] ?>">
																	</div>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<!--<label class="form-label" for="default-03">Last Name</label>-->
																	<div class="form-control-wrap">
																		<div class="form-icon form-icon-left">
																			<em class="icon ni ni-user"></em>
																		</div>
																		<input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" value="<?= $vendor['vendor_last_name'] ?>">
																	</div>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<!--<label class="form-label" for="default-03">Primary Email</label>-->
																	<div class="form-control-wrap">
																		<div class="form-icon form-icon-left">
																			<em class="icon ni ni-mail"></em>
																		</div>
																		<input type="text" class="form-control" name="email" id="email" placeholder="Primary Email: admin@example.com" value="<?= $vendor['vendor_primary_email'] ?>" >
																	</div>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<!--<label class="form-label" for="default-03">Primary Contact No.</label>-->
																	<div class="form-control-wrap">
																		<div class="form-icon form-icon-left">
																			<em class="icon ni ni-mobile"></em>
																		</div>
																		<input type="text" class="form-control" name="contact" id="contact" placeholder="Primary No:(000)-000-0000" value="<?= $vendor['vendor_primary_contact_no'] ?>">
																	</div>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<!--<label class="form-label" for="default-03">Address 1</label>-->
																	<div class="form-control-wrap">
																		<div class="form-icon form-icon-left">
																			<em class="icon ni ni-map-pin"></em>
																		</div>
																		<input type="text" class="form-control" name="vendor_address1" id="vendor_address1" placeholder="Address 1" value="<?= $vendor['vendor_address1'] ?>">
																	</div>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<!--<label class="form-label" for="default-03">Address 2</label>-->
																	<div class="form-control-wrap">
																		<div class="form-icon form-icon-left">
																			<em class="icon ni ni-map-pin"></em>
																		</div>
																		<input type="text" class="form-control" name="vendor_address2" id="vendor_address2" placeholder="Address 2" value="<?= $vendor['vendor_address2'] ?>">
																	</div>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<!--<label class="form-label" for="default-03">ZipCode</label>-->
																	<div class="form-control-wrap">
																		<div class="form-icon form-icon-left">
																			<em class="icon ni ni-map-pin-fill"></em>
																		</div>
																		<input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="zipcode" value="<?= $vendor['vendor_zipcode'] ?>">
																	</div>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<!--<label class="form-label" for="default-03">City</label>-->
																	<div class="form-control-wrap">
																		<div class="form-icon form-icon-left">
																			<em class="icon ni ni-map-pin-fill"></em>
																		</div>
																		<input type="text" class="form-control" name="city" id="city" placeholder="City" value="<?= $vendor['vendor_city'] ?>">
																	</div>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<!--<label class="form-label" for="default-03">State</label>-->
																	<div class="form-control-wrap">
																		<div class="form-icon form-icon-left">
																			<em class="icon ni ni-map-pin-fill"></em>
																		</div>
																		<input type="text" class="form-control" name="state" id="state" placeholder="State" value="<?= $vendor['vendor_state'] ?>">
																	</div>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<!--<label class="form-label" for="default-03">Whatsapp Number</label>-->
																	<div class="form-control-wrap">
																		<div class="form-icon form-icon-left">
																			<em class="icon ni ni-whatsapp"></em>
																		</div>
																		<input type="text" class="form-control" name="whatsapp" id="whatsapp_number" placeholder="Whatsapp No: (000)-000-0000" value="<?= $vendor['whatsapp'] ?>">
																	</div>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<div class="form-control-wrap">
																		<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Select Tax Status" name="tax_status" id="tax_status">
																			<option value="">Select Tax Status</option>
																			<?php for($i = 0; $i < count($tax_type); $i++): ?>
																				<option value="<?= $tax_type[$i]['tax_status_id'] ?>" <?php if($vendor['tax_status']== $tax_type[$i]['tax_status_id'] ) { ?>
																					selected <?php } ?>
																				> <?= $tax_type[$i]['tax_status'] ?> </option>
																			<?php endfor; ?>
																		</select>
																	</div>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<!--<label class="form-label" for="default-03">Tax ID</label>-->
																	<div class="form-control-wrap">
																		<div class="form-icon form-icon-left">
																			<em class="icon ni ni-task"></em>
																		</div>
																		<input type="text" class="form-control" name="tax_id" id="tax_id" placeholder="Tax ID:" value="<?= $vendor['tax_id'] ?>">
																	</div>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<div class="form-control-wrap">
																		<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Select Vendor Type" name="vendor_type" id="vendor_type">
																			<option value="">Select Vendor Type</option>
																			<?php for($i = 0; $i < count($vendor_type); $i++): ?>
																				<option value="<?= $vendor_type[$i]['crew_type_id'] ?>" <?php if($vendor['vendor_type']== $vendor_type[$i]['crew_type_id'] ) { ?>
																					selected <?php } ?>
																				> <?= $vendor_type[$i]['crew_type']; ?> </option>
																			<?php endfor; ?>
																		</select>
																	</div>
																</div>
															</div>
															<input type="hidden" name="vendor_id" value="<?= $vendor['vendor_id'] ?>>" />
															<div class="col-12">
																<div class="form-group">
																	<button type="submit" class="btn btn-primary">Save</button>
																</div>
															</div>
														</div>
													</form>
												</div>
												<div class="tab-pane" id="tabItem6">

													<div class="tab-content">
														<div class="tab-pane active" id="file-grid-view">
															<div class="nk-files nk-files-view-grid">



															</div><!-- .nk-files -->
														</div><!-- .tab-pane -->

													</div><!-- .tab-content -->

												</div>
												<div class="tab-pane" id="tabItem7">
													<div class="tab-content">

													</div>
												</div>

											</div>
										</div>
									</div><!-- .card-preview -->

								</div>

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
<!-- JavaScript -->
<?php $this->load->view('Backend/includes/scripts'); ?>
<!-- /JavaScript -->



<script>

	$(document).ready(function () {
		$("#update_vendor").on('submit', (function (e) {
			e.preventDefault();
			var fd = new FormData(this);
			$.ajax({
				url: '<?php echo base_url("Vendor/update_vendor") ?>',
				data: fd,
				type: "POST",
				contentType: false,
				processData: false,
				cache: false,
				beforeSend: function(){
					imageOverlay('#update_vendor','show');
				},
				complete:function(data){
					imageOverlay('#update_vendor','hide');
				},
				success: function (res) {
					var res = $.parseJSON(res);
					if (res.msg_type === 'success') {
						NioApp.Toast(res.message, 'success', {position: 'top-right', icon: 'auto', ui: ''});
						setTimeout(function(){
							window.location = res.redirect_link;
						}, 2000);

					} else {
						var temp = res.message.split("<p>");
						var temp2 = temp;
						$.each(temp2, function( index, value ) {
							console.log(value);
							if(typeof value !== "undefined")
							{
								if(value){
									NioApp.Toast('<h5>' + value + '</h5>', 'error', {position: 'top-right', icon: 'auto', ui: ''});
								}
							}
						});

					}
				},
				error: function (xhr) {
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

	$("#zipcode").change(function(e){
		console.log(e.target.value)
		var zipcode = e.target.value;
		$.ajax({
			type: "POST",
			url: '<?php echo base_url("Administration/get_location_by_zipcode") ?>',
			data: {zipcode : zipcode},
			success: function (res) {
				var res = $.parseJSON(res);
				if (res.data[0] != undefined || res.data.length != 0)
				{
					console.log(res.data);
					console.log(res.data[0].location_address)
					$('#city').val(res.data[0].location_city)
					$('#state').val(res.data[0].location_state)
				}
				else
				{
					$('#city').val('')
					$('#state').val('')
				}

			}

		});
	});

</script>
</body>
</html>
