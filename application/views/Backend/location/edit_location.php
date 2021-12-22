
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
												<h5 class="card-title">Edit Location</h5>
											</div>
											<form action="#" method="POST" id="update_location">
												<div class="row g-4">
												
													<div class="col-lg-6">
														<div class="form-group">
															<label class="form-label" for="Name">Location Name </label>
															<div class="form-control-wrap">
																<input type="text" class="form-control" name="location_name" id="name" placeholder="Name" value="<?= $location['location_name'] ?>" >
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label class="form-label" for="Name">Location Address   </label>
															<div class="form-control-wrap">
																<input type="text" class="form-control" name="location_address" id="location_address" placeholder="Address" value="<?= $location['location_address'] ?>" >
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label class="form-label" for="pay-amount-1">Location City</label>
															<div class="form-control-wrap">
																<input type="text" class="form-control" name="location_city" id="location_city" placeholder="City" value="<?= $location['location_city'] ?>" >
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label class="form-label" for="pay-amount-1">Location State</label>
															<div class="form-control-wrap">
																<input type="text" class="form-control" name="location_state" id="location_state" placeholder="State" value="<?= $location['location_state'] ?>">
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label class="form-label" for="pay-amount-1">Location Zipcode</label>
															<div class="form-control-wrap">
																<input type="text" pattern="[0-9]{5}" class="form-control" name="location_zipcode" id="location_zipcode" placeholder="Zipcode" value="<?= $location['location_zipcode'] ?>">
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label class="form-label" for="pay-amount-1">Location Phone 1</label>
															<div class="form-control-wrap">
																<input type="text" class="form-control" name="location_phone_1" id="location_phone" placeholder="Phone 1" value="<?= $location['location_phone_1'] ?>">
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label class="form-label" for="pay-amount-1">Location Phone 2</label>
															<div class="form-control-wrap">
																<input type="text" class="form-control" name="location_phone_2" id="location_phone_2" placeholder="Phone 2" value="<?= $location['location_phone_2'] ?>">
															</div>
														</div>
													</div>
												

													<input type="hidden" name="location_id" value="<?= $location['location_id'] ?>" />

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


<!-- UPDATE Location -->

<script>
		$(document).ready(function() {
			$("#update_location").on('submit', (function(e) {
				e.preventDefault();
				var fd = new FormData(this);
				$.ajax({
					url: '<?php echo base_url("Administration/update_location") ?>',
					data: fd,
					type: "POST",
					contentType: false,
					processData: false,
					cache: false,
					beforeSend: function() {
						imageOverlay('#update_location', 'show');
					},
					complete: function(data) {
						imageOverlay('#update_location', 'hide');
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
								// location.reload();
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

</body>

</html>
