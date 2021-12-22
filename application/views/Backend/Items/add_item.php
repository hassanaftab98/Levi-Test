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
											<!--										<div class="nk-block-head-content">-->
											<!--											<h4 class="title nk-block-title">Add Menu</h4>-->
											<!--											<div class="nk-block-des">-->
											<!--												<p>You can alow display form in column as example below.</p>-->
											<!--											</div>-->
											<!--										</div>-->
										</div>
										<div class="card card-bordered animated fadeIn">
											<div class="card-inner">
												<div class="card-head">
													<h5 class="card-title">Add Items</h5>
												</div>
												<form action="#" method="POST" id="add_item">
													<div class="row g-4">
													
														<div class="col-lg-6">
															<div class="form-group">
																<label class="form-label" for="Name">Item Name </label>
																<div class="form-control-wrap">
																	<input type="text" class="form-control" name="name" id="name" placeholder="Name">
																</div>
															</div>
														</div>
														<div class="col-lg-6">
															<div class="form-group">
																<label class="form-label" for="Description">Item Description </label>
																<div class="form-control-wrap">
																	<input type="text" class="form-control" name="item_description" id="item_description  " placeholder="Item Description">
																</div>
															</div>
														</div>
														<div class="col-lg-6">
															<div class="form-group">
																<label class="form-label" for="pay-amount-1">Item Price</label>
																<div class="form-control-wrap">
																	<input type="number" class="form-control" name="item_price" id="item_price" value="0">
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="form-label" for="gender">Taxable</label>
																<div class="preview-block">
																	<div class="custom-control custom-radio">
																		<input type="radio" id="yes_tax" value="1" name="taxable" class="custom-control-input">
																		<label class="custom-control-label" for="yes_tax">Yes</label>

																	</div>

																	<div class="custom-control custom-radio" style="margin-left: 10px;">
																		<input type="radio" id="no_tax" value="0" name="taxable" class="custom-control-input">
																		<label class="custom-control-label" for="no_tax">No</label>

																	</div>
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<label class="form-label">Item Pickup Required</label>
																<div class="preview-block">
																	<div class="custom-control custom-radio">
																		<input type="radio" id="pickup_req" value="1" name="item_pickup" class="custom-control-input">
																		<label class="custom-control-label" for="pickup_req">Yes</label>

																	</div>

																	<div class="custom-control custom-radio" style="margin-left: 10px;">
																		<input type="radio" id="pickup_req_no" value="0" name="item_pickup" class="custom-control-input">
																		<label class="custom-control-label" for="pickup_req_no">No</label>

																	</div>
																</div>
															</div>
														</div>

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


	<!-- ADD item -->
	<script>
		$(document).ready(function() {
			$("#add_item").on('submit', (function(e) {
				e.preventDefault();
				var fd = new FormData(this);
				$.ajax({
					url: '<?php echo base_url("Administration/save_item") ?>',
					data: fd,
					type: "POST",
					contentType: false,
					processData: false,
					cache: false,
					beforeSend: function() {
						imageOverlay('#add_item', 'show');
					},
					complete: function(data) {
						imageOverlay('#add_item', 'hide');
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

<!-- Add item -->

</html>
