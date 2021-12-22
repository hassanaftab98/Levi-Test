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
												<h5 class="card-title">Create Package</h5>
											</div>
											<form action="#" method="POST" id="create_package">
												<div class="row g-4">
													<div class="col-sm-4">
														<div class="form-group">
															<div class="form-control-wrap">
																<div class="form-icon form-icon-left">
																	<em class="icon ni ni-layer"></em>
																</div>
																<input type="text" class="form-control" name="package_name" id="package_name" placeholder="Package Name">
															</div>
														</div>
													</div>
													<div class="col-sm-4">
														<div class="form-group">
															<div class="form-control-wrap">
																<div class="form-icon form-icon-left">
																	<em class="icon ni ni-sign-dollar"></em>
																</div>
																<input type="text" class="form-control" name="package_price" id="package_price" placeholder="Price: $ 0.00">
															</div>
														</div>
													</div>
													<div class="col-sm-4">
														<div class="form-group">
															<div class="form-control-wrap">
																<div class="form-icon form-icon-left">
																	<em class="icon ni ni-sign-dollar"></em>
																</div>
																<input type="text" class="form-control" name="package_discount" id="package_discount" placeholder="Discount: $ 0.00">
															</div>
														</div>
													</div>
												</div>
												<hr size="1" style="width: 100%;">
												<div class="nk-block-head nk-block-head-line">
													<h6 class="title overline-title text-base">Products</h6>
												</div>

												<div class="row g-4">
													<div class="col-sm-3">
														<div class="form-group">
															<div class="form-control-wrap">
																<div class="form-control-wrap">
																	<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Select Product" name="product" id="product">
																		<option value="0">Select Product</option>
																		<option value="1">Product 1</option>
																		<option value="2">Product 2</option>
																		<option value="3">Product 3</option>
																	</select>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="form-group">
															<div class="form-control-wrap">
																<div class="form-control-wrap">
																	<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Select Category" name="category" id="category">
																		<option value="0">Select Category</option>
																		<option value="1">Category 1</option>
																		<option value="2">Category 2</option>
																		<option value="3">Category 3</option>
																	</select>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="form-group">
															<div class="form-control-wrap">
																<div class="form-control-wrap">
																	<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Select Variation" name="variation" id="variation">
																		<option value="0">Select Variation</option>
																		<option value="1">Variation 1</option>
																		<option value="2">Variation 2</option>
																		<option value="3">Variation 3</option>
																	</select>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-2">
														<div class="form-group">
															<a class="btn btn-primary add_more" href="#"><em class="icon ni ni-plus"></em></a>
														</div>
													</div>
												</div>

												<div class="row g-4">
													<div class="col-lg-12">
														<table class="table">
															<thead class="thead-dark">
															<tr>
																<th scope="col">#</th>
																<th scope="col">Name</th>
																<th scope="col">Category</th>
																<th scope="col">Price</th>
																<th scope="col">Default Product</th>
																<th scope="col">Action</th>
															</tr>
															</thead>
															<tbody>
															<tr>
																<th scope="row">1</th>
																<td>Mark</td>
																<td>Otto</td>
																<td>@mdo</td>
																<td></td>
																<td>
																	<button type="button" onclick="validate(this)" value="" class="btn btn-xs btn-danger"><span class="icon ni ni-trash"></span></button>
																</td>
															</tr>
															<tr>
																<th scope="row">2</th>
																<td>Jacob</td>
																<td>Thornton</td>
																<td>@fat</td>
																<td>

																</td>
																<td>
																	<button type="button" onclick="validate(this)" value="" class="btn btn-xs btn-danger"><span class="icon ni ni-trash"></span></button>
																</td>
															</tr>
															<tr>
																<th scope="row">3</th>
																<td>Larry</td>
																<td>the Bird</td>
																<td>@twitter</td>
																<td></td>
																<td>
																	<button type="button" onclick="validate(this)" value="" class="btn btn-xs btn-danger"><span class="icon ni ni-trash"></span></button>
																</td>
															</tr>
															</tbody>
														</table>
													</div>
												</div>

												<hr size="1" style="width: 100%;">
												<div class="nk-block-head nk-block-head-line">
													<h6 class="title overline-title text-base">Services</h6>
												</div>

												<div class="row g-4">
													<div class="col-sm-3">
														<div class="form-group">
															<div class="form-control-wrap">
																<div class="form-control-wrap">
																	<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Select Service" name="service_1" id="service_1">
																		<option value="0">Select Type</option>
																		<option value="1">Type 1</option>
																		<option value="2">Type 2</option>
																		<option value="3">Type 3</option>
																	</select>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="form-group">
															<div class="form-control-wrap">
																<div class="form-control-wrap">
																	<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Select Service" name="service_2" id="service_2">
																		<option value="0">Select Service</option>
																		<option value="1">Service 1</option>
																		<option value="2">Service 2</option>
																		<option value="3">Service 3</option>
																	</select>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="form-group">
															<div class="form-control-wrap">
																<div class="form-control-wrap">
																	<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Select Category" name="service_3" id="service_3">
																		<option value="0">Select Category</option>
																		<option value="1">Category 1</option>
																		<option value="2">Category 2</option>
																		<option value="3">Category 3</option>
																	</select>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="form-group">
															<a class="btn btn-primary add_more" href="#"><em class="icon ni ni-plus"></em></a>
														</div>
													</div>
												</div>
												<div class="row g-4">
													<div class="col-lg-12">
														<table class="table">
															<thead class="thead-dark">
															<tr>
																<th scope="col">#</th>
																<th scope="col">Name</th>
																<th scope="col">Category</th>
																<th scope="col">Price</th>
																<th scope="col">Action</th>
															</tr>
															</thead>
															<tbody>
															<tr>
																<th scope="row">1</th>
																<td>Mark</td>
																<td>Otto</td>
																<td>@mdo</td>
																<td>
																	<button type="button" onclick="validate(this)" value="" class="btn btn-xs btn-danger"><span class="icon ni ni-trash"></span></button>
																</td>
															</tr>
															<tr>
																<th scope="row">2</th>
																<td>Jacob</td>
																<td>Thornton</td>
																<td>@fat</td>
																<td>
																	<button type="button" onclick="validate(this)" value="" class="btn btn-xs btn-danger"><span class="icon ni ni-trash"></span></button>
																</td>
															</tr>
															<tr>
																<th scope="row">3</th>
																<td>Larry</td>
																<td>the Bird</td>
																<td>@twitter</td>
																<td>
																	<button type="button" onclick="validate(this)" value="" class="btn btn-xs btn-danger"><span class="icon ni ni-trash"></span></button>
																</td>
															</tr>
															</tbody>
														</table>
													</div>
												</div>

												<hr size="1" style="width: 100%;">

												<div class="row g-4">
													<input type="hidden" name="business_id" value="1" />
													<div class="col-12">
														<div class="form-group">
															<a class="btn btn-primary" onclick="$('#second_tab').trigger('click')"  href="#tabItem6"><span>Next</span></a>
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
		$("#add_vendor").on('submit', (function (e) {
			e.preventDefault();
			var fd = new FormData(this);
			$.ajax({
				url: '<?php echo base_url("Vendor/save_vendor") ?>',
				data: fd,
				type: "POST",
				contentType: false,
				processData: false,
				cache: false,
				beforeSend: function(){
					imageOverlay('#add_vendor','show');
				},
				complete:function(data){
					imageOverlay('#add_vendor','hide');
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


<script>
	$(document).ready(function(){
		$('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
			localStorage.setItem('activeTab', $(e.target).attr('href'));
		});
		var activeTab = localStorage.getItem('activeTab');
		if(activeTab){
			$('#myTab a[href="' + activeTab + '"]').tab('show');
		}
	});
</script>


<script type="text/javascript">

	var i = 0;
	$(".add_more").click(function(e){

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
<?php foreach ($contact_types as $row): ?>
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
<input type="text" class="form-control" name="peron" id="person" placeholder="Name">
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
		NioApp.Select2.init = function () {
			NioApp.Select2('.form-select');
		}
	});

	$(document).on('click', '.remove', function(e){
		e.preventDefault();
		var id = this.getAttribute('val');
		$("#"+id).remove();
	});

</script>


</body>
</html>
