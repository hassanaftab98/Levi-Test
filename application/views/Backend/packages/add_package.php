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
													<h5 class="card-title">Add Package</h5>
												</div>
												<form action="#" method="POST" id="add_package">
													<div class="row g-4">
													
														<div class="col-lg-6">
															<div class="form-group">
																<label class="form-label" for="Name">Name </label>
																<div class="form-control-wrap">
																	<input type="text" class="form-control" name="name" id="name" placeholder="Name">
																</div>
															</div>
														</div>
														<div class="col-lg-6">
															<div class="form-group">
																<label class="form-label" for="Description">Package Description </label>
																<div class="form-control-wrap">
																	<input type="text" class="form-control" name="package_description" id="" placeholder="Description">
																</div>
															</div>
														</div>
														<div class="col-lg-6">
															<div class="form-group">
																<label class="form-label" for="pay-amount-1">Package Price</label>
																<div class="form-control-wrap">
																	<input type="number" class="form-control" name="package_price" id="item_price" value="0">
																</div>
															</div>
														</div>
														<div class="col-md-6">
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


</html>