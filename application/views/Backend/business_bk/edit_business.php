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
												<h5 class="card-title">Edit Business Detail</h5>
											</div>
											<form action="#" method="POST" id="update_business">
												<div class="row g-4">
													<div class="col-sm-4">
														<div class="form-group">
															<div class="form-control-wrap">
																<div class="form-icon form-icon-left">
																	<em class="icon ni ni-user"></em>
																</div>
																<input type="text" class="form-control" name="business_name" id="business_name" placeholder="Business Name" value="<?= $business_detail['business_name']; ?>">
															</div>
														</div>
													</div>
													<div class="col-sm-4">
														<div class="form-group">
															<div class="form-control-wrap">
																<div class="form-icon form-icon-left">
																	<em class="icon ni ni-mail"></em>
																</div>
																<input type="text" class="form-control" name="business_email" id="email" placeholder="Email: admin@example.com" value="<?= $business_detail['business_email']; ?>">
															</div>
														</div>
													</div>
													<div class="col-sm-4">
														<div class="form-group">
															<div class="form-control-wrap">
																<div class="form-icon form-icon-left">
																	<em class="icon ni ni-mobile"></em>
																</div>
																<input type="text" class="form-control" name="business_contact_no" id="contact" placeholder="No:(000)-000-0000" value="<?= $business_detail['business_contact_no']; ?>">
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
																<input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="zipcode" value="<?= $business_detail['business_zipcode']; ?>">
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
																<input type="text" class="form-control" name="city" id="city" placeholder="City" value="<?= $business_detail['business_city']; ?>">
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
																<input type="text" class="form-control" name="state" id="state" placeholder="State" value="<?= $business_detail['business_state']; ?>">
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
																<input type="text" class="form-control" name="business_address" id="vendor_address1" placeholder="Address" value="<?= $business_detail['business_address']; ?>">
															</div>
														</div>
													</div>
													<div class="col-sm-4">
														<div class="form-group">
															<div class="form-control-wrap">
																<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Select Tax Status" name="tax_status" id="tax_status">
																	<option value="">Select Tax Status</option>
																	<?php for($i = 0; $i < count($tax_type); $i++): ?>
																		<option value="<?= $tax_type[$i]['tax_status_id'] ?>"
                                                                        
                                                                        <?php if( $business_detail['business_tax_status'] == $tax_type[$i]['tax_status_id'] ) {
                                                                         echo 'selected';   
                                                                        }?>

                                                                        > <?= $tax_type[$i]['tax_status'] ?> </option>
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
																<input type="text" class="form-control" name="tax_id" id="tax_id" placeholder="Tax ID:" value="<?= $business_detail['business_tax_id']; ?>">
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
																<input type="text" class="form-control" name="business_website" id="business_website" placeholder="Website: https://abc.om" value="<?= $business_detail['business_website']; ?>">
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
                                                    <div class="col-sm-4">
														<div class="form-group">
															<div class="form-control-wrap">
																<div class="custom-file">
                                                                <img src="<?= base_url('uploads/business_logos/' . $business_detail['business_logo']); ?>" alt="Company Logo" style="height: 45px;width: 150px;" />
																</div>
															</div>
														</div>
													</div>

												</div>
                                                <input  type="hidden" name="business_id" value="<?= $business_detail['business_id'] ?>">											
												<div class="row g-4">
													<div class="col-12">
														<div class="form-group">
															<button class="btn btn-primary" type="submit" ><span>Update</span></button>
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
	$(document).ready(function () {
		$("#update_business").on('submit', (function (e) {
			e.preventDefault();
			var fd = new FormData(this);
			$.ajax({
				url: '<?php echo base_url("Business/update_business_detail") ?>',
				data: fd,
				type: "POST",
				contentType: false,
				processData: false,
				cache: false,
				beforeSend: function(){
					imageOverlay('#update_business','show');
				},
				complete:function(data){
					imageOverlay('#update_business','hide');
				},
				success: function (res) {
					var res = $.parseJSON(res);
					if (res.msg_type === 'success') {
						NioApp.Toast(res.message, 'success', {position: 'top-right', icon: 'auto', ui: ''});
						setTimeout(function(){
							// window.location = res.redirect_link;
							location.reload()
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
