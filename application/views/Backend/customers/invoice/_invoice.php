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
													<h5 class="card-title">Create Invoice</h5>
												</div>
												<form action="#" method="POST" id="invoice">
													<div class="row g-4">
														<div class="col-sm-4">
															<div class="form-group">
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-calendar"></em>
																	</div>
																	<input type="text" class="form-control date-picker" name="due_date" id="due_date" placeholder="Due Date">
																</div>
															</div>
														</div>
														<div class="col-sm-4">
															<div class="form-group">
																<div class="form-control-wrap">
																	<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Select Event" name="event" id="event">
																		<option value="">Select Event</option>
																		<option value="1">Event 1</option>
																		<option value="2">Event 2</option>
																		<option value="3">Event 3</option>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-sm-4">
															<div class="form-group">
																<div class="form-control-wrap">
																	<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Select Contract Type" name="contract_type" id="contract_type">
																		<option value="">Select Contract Type</option>
																		<option value="1">Contract Type 1</option>
																		<option value="2">Contract Type 2</option>
																		<option value="3">Contract Type 3</option>
																	</select>
																</div>
															</div>
														</div>
													</div>
													<div class="row g-4">
														<div class="col-sm-4">
															<div class="form-group">
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-sign-dollar"></em>
																	</div>
																	<input type="number" class="form-control" name="sub_total" id="sub_total" placeholder="Sub Total" readonly />
																</div>
															</div>
														</div>
														<div class="col-sm-4">
															<div class="form-group">
																<div class="form-control-wrap">
																	<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Discount Type" name="total_discount_type" id="total_discount_type">
																		<option value="">Discount Type</option>
																		<option value="%">Percentage (%)</option>
																		<option value="$">Fixed Amount ($)</option>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-sm-4">
															<div class="form-group">
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-sign-dollar"></em>
																	</div>
																	<input type="number" class="form-control" name="total_discount_value" id="total_discount_value" placeholder="Discount Value">
																</div>
															</div>
														</div>
													</div>
													<div class="row g-4">
														<div class="col-sm-4">
															<div class="form-group">
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-sign-dollar"></em>
																	</div>
																	<input type="text" class="form-control" name="total_discount_amount" id="total_discount_amount" placeholder="Total Discount Amount" readonly />
																</div>
															</div>
														</div>
														<div class="col-sm-4">
															<div class="form-group">
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-sign-dollar"></em>
																	</div>
																	<input type="text" class="form-control" name="grand_total" id="grand_total" placeholder="Grand Total" readonly />
																</div>
															</div>
														</div>
													</div>

													<hr size="1" style="width: 100%;">
													<div class="nk-block-head nk-block-head-line">
														<h6 class="title overline-title text-base">Packages</h6>
													</div>
													<div class="row mt-2">
														<div class="col-12">
															<table id="detailTable" class="table rounded" style="border: 1px solid #cfd1d3;">
																<thead class="thead-dark">
																	<tr>
																		<th>Package</th>
																		<th>Price</th>
																		<th>Disc Type</th>
																		<th>Disc Value</th>
																		<th>Disc</th>
																		<th>Sub Total</th>
																		<th>Actions</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td style="width: 25%;">
																			<select onchange="setUnits()" class="form-select form-control form-control-lg" data-search="on" data-placeholder="Select Package" name="package" id="package">
																				<option value="">Select Package</option>
																				<?php for ($i = 0; $i < count($packages); $i++) : ?>
																					<option value="<?= $packages[$i]['package_id']; ?>"><?= $packages[$i]['package_name']; ?></option>
																				<?php endfor; ?>
																			</select>
																		</td>
																		<td style="width: 15%;">
																			<input type="text" class="form-control" name="pkg_total" id="pkg_total" placeholder="$0.00" readonly />
																		</td>
																		<td style="width: 10%;">
																			<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Type" name="pkg_discount_type" id="pkg_discount_type">
																				<option value="">Type</option>
																				<option value="%">%</option>
																				<option value="$">$</option>
																			</select>
																		</td>
																		<td style="width: 10%;">
																			<input type="number" onchange="discount()" class="form-control" name="pkg_discount_value" id="pkg_discount_value" placeholder="Disc">
																		</td>
																		<td style="width: 10%;">
																			<input type="number" class="form-control" name="pkg_disc_amount" id="pkg_disc_amount" placeholder="Disc" readonly />
																		</td>
																		<td style="width: 15%;vertical-align: middle;text-align: center; ">
																			<input type="number" class="form-control" name="pkg_subtotal" id="pkg_subtotal" placeholder="$0.00" readonly />
																		</td>
																		<td style="width: 10%;vertical-align: middle;text-align: center;">
																			<a class="btn btn-primary btn-xs" onclick="addRow()" href="#" style="padding: 4px;"><em class="icon ni ni-plus"></em></a>
																			<a class="btn btn-danger btn-xs remove" href="#" style="padding: 4px;"><em class="icon ni ni-delete"></em></a>
																		</td>
																	</tr>

																</tbody>
															</table>
														</div>
													</div>
													<hr size="1" style="width: 100%;">
													<div class="nk-block-head nk-block-head-line">
														<h6 class="title overline-title text-base">Items</h6>
													</div>

													<div class="row g-4">
														<div class="col-sm-3">
															<div class="form-group">
																<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Select Item" name="item" id="item">
																	<option value="">Select Item</option>
																	<?php for ($i = 0; $i < count($items); $i++) : ?>
																		<option value="<?= $items[$i]['item_id']; ?>"><?= $items[$i]['item_name']; ?></option>
																	<?php endfor; ?>
																</select>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-camera"></em>
																	</div>
																	<input type="text" class="form-control date-picker" name="item_description" id="item_description" placeholder="Item Description" readonly />
																</div>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-sign-dollar"></em>
																	</div>
																	<input type="text" class="form-control date-picker" name="item_price" id="item_price" placeholder="Item Price" readonly />
																</div>
															</div>
														</div>
													</div>
													<div class="row g-4">
														<div class="col-sm-3">
															<div class="form-group">
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-dot"></em>
																	</div>
																	<input type="number" class="form-control" name="item_qty" id="item_qty" placeholder="Item Qty" />
																</div>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<div class="form-control-wrap">
																	<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Discount Type" name="item_discount_type" id="item_discount_type">
																		<option value="">Discount Type</option>
																		<option value="%">Percentage (%)</option>
																		<option value="$">Fixed Amount ($)</option>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-sign-dollar"></em>
																	</div>
																	<input type="number" class="form-control" name="item_discount_value" id="item_discount_value" placeholder="Discount Value">
																</div>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-sign-dollar"></em>
																	</div>
																	<input type="number" class="form-control" name="item_total" id="item_total" placeholder="Total" readonly />
																</div>
															</div>
														</div>
													</div>
													<div class="row g-4">
														<div class="col-sm-3">
															<div class="form-group">
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-sign-dollar"></em>
																	</div>
																	<input type="number" class="form-control" name="item_disc_amount" id="item_disc_amount" placeholder="Discount Amount" readonly />
																</div>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-sign-dollar"></em>
																	</div>
																	<input type="number" class="form-control" name="item_subtotal" id="item_subtotal" placeholder="Sub Total" readonly />
																</div>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<div class="form-control-wrap">
																	<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Taxable ?" name="taxable" id="taxable">
																		<option value="">Taxable ?</option>
																		<option value="1">Yes</option>
																		<option value="2">No</option>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<a class="btn btn-primary" onclick="add_item()" href="#"><em class="icon ni ni-plus"></em></a>
															</div>
														</div>
													</div>
													<div class="row g-4">
														<div class="col-md-12">
															<table id="item_inv" class="table">
																<thead class="thead-dark">

																	<tr>

																		<th scope="col">ID</th>
																		<th scope="col">Qty</th>
																		<th scope="col">Item</th>
																		<th scope="col">Description</th>
																		<th scope="col">Amount</th>
																		<th scope="col">Action</th>
																	</tr>
																</thead>
																<tbody>

																</tbody>
															</table>

														</div>
													</div>
													<hr size="1" style="width: 100%;">
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


	<!--APPEND PACKAGE ROW-->



	<script type="text/javascript">
		function addRow() {
			// console.log('chuddo')
			$('#detailTable tbody').append(`<tr>
<td style="width: 25%;">
<select onchange="setUnits();" class="form-select form-control form-control" data-search="on" data-placeholder="Select Package" name="package" id="package">
<option value="">Select Package</option>
<?php for ($i = 0; $i < count($packages); $i++) : ?>
<option value="<?= $packages[$i]['package_id']; ?>"><?= $packages[$i]['package_name']; ?></option>
<?php endfor; ?>
</select>
</td>
<td style="width: 15%;">
<input type="text" class="form-control" name="pkg_total" id="pkg_total" placeholder="$0.00" readonly />
</td>
<td style="width: 10%;">
<select class="form-select form-control form-control" data-search="on" data-placeholder="Type" name="pkg_discount_type" id="pkg_discount_type">
<option value="">Type</option>
<option value="%">%</option>
<option value="$">$</option>
</select>
</td>
<td style="width: 10%;">
<input type="number"  onchange="discount()" class="form-control" name="pkg_discount_value" id="pkg_discount_value" placeholder="Disc">
</td>
<td style="width: 10%;">
<input type="number" class="form-control" name="pkg_disc_amount" id="pkg_disc_amount" placeholder="Disc" readonly />
</td>
<td style="width: 15%;vertical-align: middle;text-align: center; ">
<input type="number" class="form-control" name="pkg_subtotal" id="pkg_subtotal" placeholder="$0.00" readonly />
</td>
<td style="width: 10%;vertical-align: middle;text-align: center;">
<a class="btn btn-primary btn-xs" onclick="addRow();" href="#" style="padding: 4px;"><em class="icon ni ni-plus"></em></a>
<a class="btn btn-danger btn-xs"  onClick="$(this).closest('tr').remove()"; href="#" style="padding: 4px;"><em class="icon ni ni-delete"></em></a>
</td>
</tr>
`);
			reload(0);
		}

		function reload(val) {
			$('#detailTable tbody tr').each(function(row, tr) {
				NioApp.Select2('.form-select');
			});
		}



		function setUnits() {
			$('#detailTable tbody tr').each(function(row, tr) {
				let package_id = $(tr).find('td:eq(0) > select').val();
				//    console.log(package_id)

				$.ajax({
					type: "POST",
					url: '<?php echo base_url("Customer/get_package_data") ?>',
					data: {
						package_id: package_id
					},
					success: function(res) {
						var res = $.parseJSON(res);
						if (res.data[0] != undefined || res.data.length != 0) {
							$(tr).find('td:eq(1) > input').val(res.data.package_price);
							$(tr).find('td:eq(5) > input').val(res.data.package_price);
						} else {
							$('#package_description').val('')
							$('#package_price').val('')
						}
					}

				});

			});


		}

		function discount() {
			$('#detailTable tbody tr').each(function(row, tr) {

				console.log(row)
				package_price = $(tr).find('td:eq(1) > input').val()
				discount_value = $(tr).find('td:eq(3) > input').val()	

				// if ($(tr).find('td:eq(2) > select').val() == "") {
				// 	alert('Please Select Discount Type')
				// 	// $(tr).find('td:eq(3) > input').val("")

				// } else {
					if($(tr).find('td:eq(2) > select').val() == "%")
					{
						price = discount_value / 100;
						amount = package_price - (price * package_price)
						$(tr).find('td:eq(5) > input').val(amount)
						$(tr).find('td:eq(4) > input').val(package_price - amount)

					}
					else{
						var amount = package_price - discount_value
						$(tr).find('td:eq(5) > input').val(amount)
						$(tr).find('td:eq(4) > input').val(package_price - amount)

					}

				// }


			});
		}
	</script>

	<!--/APPEND PACKAGE ROW-->







	<!-- GET PACKAGE DATA -->
	<script>
		// $('#pkg_discount_value').change(function(e) {

		// 	// console.log($('#pkg_discount_type  option:selected').val());

		// 	var package_price = $('#pkg_total').val()
		// 	// console.log(package_price)
		// 	var discount_value = $('#pkg_discount_value').val();
		// 	// console.log(discount_value)
		// 	if ($("#pkg_discount_type option:selected").val() == '') {
		// 		$('#pkg_subtotal').val("");
		// 		alert('Please Select Discount Type')
		// 	} else {

		// 		if ($("#pkg_discount_type option:selected").val() == '%') {
		// 			// console.log('coming in if')
		// 			var price = (discount_value / 100);
		// 			var amount = package_price - (price * package_price);
		// 			// console.log(amount)
		// 			$('#pkg_subtotal').val(amount);
		// 			$('#pkg_disc_amount').val(package_price - amount)
		// 		} else {
		// 			var amount = package_price - discount_value
		// 			$('#pkg_subtotal').val(amount)
		// 			$('#pkg_subtotal').val(amount);
		// 			$('#pkg_disc_amount').val(package_price - amount)
		// 		}
		// 	}
		// })
		// FOR PACKAGE DISCOUNT END


		//grand discount section
		$('#total_discount_value').change(function(e) {

			// console.log($('#pkg_discount_type  option:selected').val());


			var sub_total = $('#sub_total').val()

			if (sub_total == 0) {
				alert('please select items first')
				$('#total_discount_value').val(0)
			}
			// console.log(package_price)
			var discount_value = $('#total_discount_value').val();
			// console.log(discount_value)
			if ($("#total_discount_type option:selected").val() == '') {
				// $('#sub_total').val("");
				alert('Please Select Discount Type')
			} else {

				if ($("#total_discount_type option:selected").val() == '%') {
					// console.log('coming in if')
					var price = (discount_value / 100);
					var amount = sub_total - (price * sub_total);
					// console.log(amount)
					$('#grand_total').val(amount);
					$('#total_discount_amount').val(sub_total - amount)
				} else {
					var amount = sub_total - discount_value
					$('#grand_total').val(amount)
					$('#total_discount_amount').val(sub_total - amount)
				}
			}
		})


		$('#item_qty').change(function(e) {

			var item = $('#item_qty').val()
			var multiply = item * $('#item_price').val();
			var val = $('#item_total').val(multiply)

			$('#item_subtotal').val(multiply)
			// console.log(multiply)

		})

		$('#item_discount_value').change(function(e) {

			// console.log($('#pkg_discount_type  option:selected').val());

			var item_price = $('#item_total').val()
			// console.log(package_price)
			var discount_value = $('#item_discount_value').val();
			// console.log(discount_value)
			if ($("#item_discount_type option:selected").val() == '') {
				$('#item_subtotal').val("");
				alert('Please Select Discount Type')
			} else {

				if ($("#item_discount_type option:selected").val() == '%') {
					// console.log('coming in if')
					var price = (discount_value / 100);
					var amount = item_price - (price * item_price);
					// console.log(amount)
					$('#item_subtotal').val(amount);
					$('#item_disc_amount').val(item_price - amount)
				} else {
					var amount = item_price - discount_value
					$('#item_subtotal').val(amount)
					$('#item_subtotal').val(amount);
					$('#item_disc_amount').val(item_price - amount)
				}
			}
		})



		/*======= ITEM =======*/
		$("#item").change(function(e) {
			var item_id = e.target.value;
			$.ajax({
				type: "POST",
				url: '<?php echo base_url("Customer/get_item_data") ?>',
				data: {
					item_id: item_id
				},
				success: function(res) {
					var res = $.parseJSON(res);
					if (res.data[0] != undefined || res.data.length != 0) {
						$('#item_description').val(res.data.item_description)
						$('#item_price').val(res.data.item_price)
						$('#item_qty').val(1)
						$('#item_subtotal').val(res.data.item_price)
						$('#item_total').val(res.data.item_price)

					} else {
						$('#item_description').val('')
						$('#item_price').val('')
					}
				}
			});
		});
	</script>
	<!-- /GET PACKAGE DATA -->

	<!-- ADD PACKAGE INTO TABLE  -->
	<script type="text/javascript">
		/*======= ADD LOCATION ========*/
		function add_pkg() {

			var lid = $("#package option:selected").val();
			let f_price = $('#pkg_subtotal').val();
			var html = "";
			var exists = 0;
			var count = 1;
			if (lid == "") {
				NioApp.Toast('Select Package', 'error', {
					position: 'top-right',
					icon: 'auto',
					ui: ''
				});
				return false;
			}
			$('#pkg_inv tbody').find("td.id").each(function(index) {
				//console.log($(this).html());
				if ($(this).html() === lid) {
					exists = 1;
				}
			});

			html += '<tr>';
			html += '<td class="id">' + $("#package option:selected").val() + '</th>';
			html += '<td>' + $("#package_qty").val() + '</th>';
			html += '<td>' + $("#package option:selected").text() + '</td>';
			html += '<td>' + $("#package_description").val() + '</td>';
			html += '<td class="invoice_amount_app">' + $("#pkg_subtotal").val() + '</td>';
			html += '<td><a class="btn btn-xs btn-danger" onclick="removeproduct(' + lid + ',' + f_price + ')" href="#"><em class="icon ni ni-trash"></em></a></td>';
			html += '</tr>';


			if (exists !== 1) {
				total_invoice_price = Number($('#sub_total').val());
				total_invoice_price += parseInt(f_price)
				console.log(total_invoice_price)
				$('#sub_total').val(total_invoice_price);
				$("#pkg_inv tbody").append(html);

				$('#package_form').find('input').val('');
				$('#package_price').val('');
				$('#package_qty').val('');
				$('#pkg_subtotal').val('');
				$('#pkg_total').val('');
				$('#pkg_disc_amount').val('');
				$('#pkg_discount_value').val('');
				//$("#package").empty();
				// document.getElementById("package").options.val = 0;
				// $("#package").find("option:selected").prop('selected',false);
				// $('#pkg_discount_type option:selected').remove();


				NioApp.Toast('Package added successfully', 'success', {
					position: 'top-right',
					icon: 'auto',
					ui: ''
				});
			} else {
				swal.fire({
					title: "Package already exist!",
					icon: 'warning',
					text: 'If you want to make change in location date & time, please remove and add again.',
					type: "info",
					confirmButtonText: 'OK!'
				});
			}
		}

		/*======= REMOVE FROM LIST ========*/
		function removeproduct(val, price) {
			total = $('#sub_total').val()
			$('#sub_total').val(total - price);
			// console.log($('#pkg_inv tbody').find(".invoice_amount_app").html())

			$('#pkg_inv tbody').find("td.id").each(function(index) {
				if ($(this).html() == val) {
					// console.log($(this).html())
					$(this).closest('tr').remove();
					NioApp.Toast('Package deleted', 'success', {
						position: 'top-right',
						icon: 'auto',
						ui: ''
					});
				}
			});
		}

		function store_package() {
			var TableData = new Array();
			$('#pkg_inv tbody tr').each(function(row, tr) {
				TableData[row] = {
					"package_id": $(tr).find('td:eq(0)').text(),
					"package_qty": $(tr).find('td:eq(1)').text(),
					"amount": $(tr).find('td:eq(4)').text()
				}
			});
			return TableData;
		}
	</script>
	<!-- ADD PACKAGE INTO TABLE END -->

	<!-- ADD ITEM INTO TABLE -->
	<script type="text/javascript">
		/*======= ADD LOCATION ========*/
		function add_item() {
			var Iid = $("#item option:selected").val();
			let f_price = $('#item_subtotal').val();
			var html = "";
			var exists = 0;
			var count = 1;
			if (Iid == "") {
				NioApp.Toast('Select Item', 'error', {
					position: 'top-right',
					icon: 'auto',
					ui: ''
				});
				return false;
			}
			$('#item_inv tbody').find("td.id").each(function(index) {
				//console.log($(this).html());
				if ($(this).html() === Iid) {
					exists = 1;
				}
			});

			html += '<tr>';
			html += '<td class="id">' + $("#item option:selected").val() + '</th>';
			html += '<td>' + $("#item_qty").val() + '</td>';
			html += '<td>' + $("#item option:selected").text() + '</td>';
			html += '<td>' + $("#item_description").val() + '</td>';
			html += '<td>' + $("#item_subtotal").val() + '</td>';
			html += '<td><a class="btn btn-xs btn-danger" onclick="removeitem(' + Iid + ' , ' + f_price + ')" href="#"><em class="icon ni ni-trash"></em></a></td>';
			html += '</tr>';


			if (exists !== 1) {
				total_invoice_price = Number($('#sub_total').val());
				total_invoice_price += parseInt(f_price)
				// console.log(total_invoice_price)
				$('#sub_total').val(total_invoice_price);
				$("#item_inv tbody").append(html);
				$('#item_form').find('input').val('');
				$('#item_price').val('');
				$('#item_qty').val('');
				$('#item_subtotal').val('');
				$('#item_total').val('');
				$('#item_disc_amount').val('');
				$('#item_discount_value').val('');
				$('#item_description').val('');
				//$('#package_form').reset();
				NioApp.Toast('Item added successfully', 'success', {
					position: 'top-right',
					icon: 'auto',
					ui: ''
				});
			} else {
				swal.fire({
					title: "Item already exist!",
					icon: 'warning',
					text: 'If you want to make change in location date & time, please remove and add again.',
					type: "info",
					confirmButtonText: 'OK!'
				});
			}
		}

		/*======= REMOVE FORKLIFT FROM LIST ========*/
		function removeitem(val, price) {
			total = $('#sub_total').val()
			$('#sub_total').val(total - price);
			$('#item_inv tbody').find("td.id").each(function(index) {
				if ($(this).html() == val) {
					$(this).closest('tr').remove();
					NioApp.Toast('Item deleted', 'success', {
						position: 'top-right',
						icon: 'auto',
						ui: ''
					});
				}
			});
		}

		function store_item() {
			var TableData = new Array();
			$('#item_inv tbody tr').each(function(row, tr) {
				TableData[row] = {
					"item_id": $(tr).find('td:eq(0)').text(),
					"item_qty": $(tr).find('td:eq(1)').text(),
					"amount": $(tr).find('td:eq(2)').text()
				}
			});
			return TableData;
		}
	</script>
	<!-- ADD ITEM INTO TABLE END -->

	<!-- SAVE INVOICE -->
	<script>
		$(document).ready(function() {
			$("#invoice").on('submit', (function(e) {
				e.preventDefault();
				var TableData;
				var TableData2;
				TableData = store_package();
				TableData2 = store_item();
				var due_date = $("#due_date").val();
				var event = $("#event").val();
				var contract_type = $('#contract_type').val();
				if (TableData.length > 0) {
					$.ajax({
						url: '<?php echo base_url("Customer/save_invoice") ?>',
						data: {
							'data': TableData,
							'items': TableData2
						},
						type: "POST",
						beforeSend: function() {
							imageOverlay('#invoice', 'show');
						},
						complete: function(data) {
							imageOverlay('#invoice', 'hide');
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
				} else {
					NioApp.Toast('Select Date', 'error', {
						position: 'top-right',
						icon: 'auto',
						ui: ''
					});
				}
			}));
		});
	</script>
	<!-- /SAVE INVOICE -->

</body>

</html>