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
													<hr size="1" style="width: 100%;">
													<div class="nk-block-head nk-block-head-line">
														<h6 class="title overline-title text-base">Invoice Detail</h6>
													</div>
													<div class="row mt-2">
														<div class="col-12">
															<table id="inv_table" class="table rounded" style="border: 1px solid #cfd1d3;">
																<thead class="thead-dark">
																	<tr>
																		<th>Due Date</th>
																		<th>Event</th>
																		<th>Contract</th>
																		<th>Disc Type</th>
																		<th>Disc Value</th>
																		<th>Disc $</th>
																		<th>Sub Total</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td style="width: 15%;">
																			<input type="text" class="form-control date-picker" name="due_date" id="due_date" placeholder="Due Date">
																		</td>
																		<td style="width: 20%;">
																			<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Select Event" name="event" id="event">
																				<option value="">Select Event</option>
																				<option value="1">Event 1</option>
																				<option value="2">Event 2</option>
																				<option value="3">Event 3</option>
																			</select>
																		</td>
																		<td style="width: 15%;">
																			<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Select Type" name="contract_type" id="contract_type">
																				<option value="">Select Type</option>
																				<option value="1">Contract Type 1</option>
																				<option value="2">Contract Type 2</option>
																				<option value="3">Contract Type 3</option>
																			</select>
																		</td>
																		<td style="width: 10%;">
																			<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Type" name="total_discount_type" id="total_discount_type">
																				<option value="">Type</option>
																				<option value="%">%</option>
																				<option value="$">$</option>
																			</select>
																		</td>
																		<td style="width: 10%;">
																			<input type="number" class="form-control" name="total_discount_value" id="total_discount_value" placeholder="Discount Value">
																		</td>
																		<td style="width: 10%;">
																			<input type="text" class="form-control" name="total_discount_amount" id="total_discount_amount" placeholder="$0.00" readonly />
																		</td>
																		<td style="width: 15%;vertical-align: middle;text-align: center; ">
																			<input type="text" class="form-control" name="grand_total" id="grand_total" placeholder="Grand Total" readonly />
																			<input type="hidden" class="form-control" name="sub_total" id="sub_total" placeholder="Grand Total" readonly />
																		</td>
																	</tr>

																</tbody>
															</table>
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
																			<select onchange="setUnits(this)" class="form-select form-control form-control-lg" data-search="on" data-placeholder="Select Package" name="package[]" id="package">
																				<option value="">Select Package</option>
																				<?php for ($i = 0; $i < count($packages); $i++) : ?>
																					<option value="<?= $packages[$i]['package_id']; ?>"><?= $packages[$i]['package_name']; ?></option>
																				<?php endfor; ?>
																			</select>
																		</td>
																		<td style="width: 15%;">
																			<input type="text" class="form-control" name="pkg_total" id="pkg_total_0" placeholder="$0.00" readonly />
																		</td>
																		<td style="width: 10%;">
																			<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Type" name="pkg_discount_type[]" id="pkg_discount_type_0">
																				<option value="">Type</option>
																				<option value="%">%</option>
																				<option value="$">$</option>
																			</select>
																		</td>
																		<td style="width: 10%;">
																			<input type="number" onchange="discount($(this))" class="form-control" name="pkg_discount_value" id="pkg_discount_value_0" placeholder="Disc">
																		</td>
																		<td style="width: 10%;">
																			<input type="number" class="form-control" name="pkg_disc_amount" id="pkg_disc_amount_0" placeholder="Disc" readonly />
																		</td>
																		<td style="width: 15%;vertical-align: middle;text-align: center; ">
																			<input type="number" class="form-control" name="pkg_subtotal" id="pkg_subtotal_0" placeholder="$0.00" readonly />
																		</td>
																		<td style="width: 10%;vertical-align: middle;text-align: center;">
																			<a class="btn btn-primary btn-xs" onclick="addRow()" href="#" style="padding: 4px;"><em class="icon ni ni-plus"></em></a>
																			<a class="btn btn-danger btn-xs remove" val="0" href="#" style="padding: 4px;"><em class="icon ni ni-delete"></em></a>
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
													<div class="row mt-2">
														<div class="col-12">
															<table id="itemTable" class="table rounded" style="border: 1px solid #cfd1d3;">
																<thead class="thead-dark">
																	<tr>
																		<th>Item</th>
																		<th>Qty</th>
																		<th>Price</th>
																		<th>Disc Type</th>
																		<th>Disc Value</th>
																		<th>Disc ($)</th>
																		<th>Sub Total</th>
																		<th>Taxable</th>
																		<th>Actions</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td style="width: 10%;">
																			<select onchange="setItems(this)" class="form-select form-control form-control-lg" data-search="on" data-placeholder="Select Item" name="item[]" id="item">
																				<option value="">Select Item</option>
																				<?php for ($i = 0; $i < count($items); $i++) : ?>
																					<option value="<?= $items[$i]['item_id']; ?>"><?= $items[$i]['item_name']; ?></option>
																				<?php endfor; ?>
																			</select>
																		</td>
																		<td style="width: 10%;">
																			<input type="number" onchange="item_qtys($(this))" class="form-control addNewRow" name="item_qty[]" id="item_qty_0" placeholder="Qty" />
																		</td>
																		<td style="width: 10%;">
																			<input type="text" class="form-control" name="item_price[]" id="item_price_0" placeholder="$0.00" readonly />
																		</td>
																		<td style="width: 10%;">
																			<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Type" name="item_discount_type[]" id="item_discount_type_0">
																				<option value="">Type</option>
																				<option value="%">(%)</option>
																				<option value="$">($)</option>
																			</select>
																		</td>
																		<td style="width: 13%;">
																			<input type="number" onchange="item_discount($(this))" class="form-control" name="item_discount_value" id="item_discount_value_0" placeholder="Disc">
																		</td>
																		<td style="width: 13%;">
																			<input type="number" class="form-control" name="item_disc_amount" id="item_disc_amount_0" placeholder="$0.00" readonly />
																		</td>
																		<td style="width: 13%;vertical-align: middle;text-align: center; ">
																			<input type="number" class="form-control" name="item_subtotal" id="item_subtotal_0" placeholder="$0.00" readonly />
																		</td>
																		<td style="width: 5%; vertical-align: middle;text-align: center; ">
																			<div class="form-check form-check-inline">
																				<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
																			</div>
																		</td>
																		<td style="width: 5%;vertical-align: middle;text-align: center;">
																			<a class="btn btn-primary btn-xs" onclick="addItemRow()" href="#" style="padding: 0px;"><em class="icon ni ni-plus-circle"></em></a>
																			<a class="btn btn-danger btn-xs remove" val="0" href="#" style="padding: 0px;"><em class="icon ni ni-cross-circle"></em></a>
																		</td>
																	</tr>

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
			var i = 1;
			$('#detailTable tbody').append(`<tr>
<td style="width: 25%;">
<select onchange="setUnits(this);" class="form-select form-control form-control" data-search="on" data-placeholder="Select Package" name="package[]" id="package_${i}">
<option value="">Select Package</option>
<?php for ($i = 0; $i < count($packages); $i++) : ?>
<option value="<?= $packages[$i]['package_id']; ?>"><?= $packages[$i]['package_name']; ?></option>
<?php endfor; ?>
</select>
</td>
<td style="width: 15%;">
<input type="text" class="form-control" name="pkg_total" id="pkg_total_${i}" placeholder="$0.00" readonly />
</td>
<td style="width: 10%;">
<select class="form-select form-control form-control" data-search="on" data-placeholder="Type" name="pkg_discount_type[]" id="pkg_discount_type_${i}">
<option value="">Type</option>
<option value="%">%</option>
<option value="$">$</option>
</select>
</td>
<td style="width: 10%;">
<input type="number"  onchange="discount($(this))" class="form-control" name="pkg_discount_value" id="pkg_discount_value_${i}" placeholder="Disc">
</td>
<td style="width: 10%;">
<input type="number" class="form-control" name="pkg_disc_amount" id="pkg_disc_amount_${i}" placeholder="Disc" readonly />
</td>
<td style="width: 15%;vertical-align: middle;text-align: center; ">
<input type="number" class="form-control total_pkg" name="pkg_subtotal" id="pkg_subtotal_${i}" placeholder="$0.00" readonly />
</td>
<td style="width: 10%;vertical-align: middle;text-align: center;">
<a class="btn btn-primary btn-xs" onclick="addRow();" href="#" style="padding: 4px;"><em class="icon ni ni-plus"></em></a>
<a    class="btn btn-danger btn-xs remove" val="${i}"  onClick="removepkg($(this))"; href="#" style="padding: 4px;"><em class="icon ni ni-delete"></em></a>
</td>
</tr>
`);
			i++;
			reload(0);
		}

		function reload(val) {
			$('#detailTable tbody tr').each(function(row, tr) {
				NioApp.Select2('.form-select');
			});
		}

		function removepkg(e) {
			var id = e.closest('tr').find('.remove').attr('val')
			package_price = e.closest('tr').find('#pkg_subtotal_' + id).val();
			console.log(package_price)
			total = $('#grand_total').val();
			$('#grand_total').val(total - package_price);
			$('#sub_total').val($('#grand_total').val())
			// console.log(e.closest('tr').find('#pkg_subtotal_1').val());
			e.closest('tr').remove();

		}



		function discount(e) {

			// console.log(e.closest('tr').html())

			var id = e.closest('tr').find('.remove').attr('val')
			grand_total = $('#grand_total').val()
			package_total = $('#pkg_subtotal_' + id).val();
			$('#grand_total').val(grand_total - package_total)
			// console.log(package_total , grand_total)

			package_price = e.closest('tr').find('#pkg_total_' + id).val()
			// grand_total = $('#grand_total').val()

			discount_value = e.closest('tr').find('#pkg_discount_value_' + id).val()
			// console.log(package_price , discount_value )
			// console.log(e.closest('tr').find('#pkg_discount_type_'+id).find(':selected').val() )
			if (e.closest('tr').find('#pkg_discount_type_' + id).find(':selected').val() == '%') {
				price = discount_value / 100;
				amount = package_price - (price * package_price)

				e.closest('tr').find('#pkg_subtotal_' + id).val(amount)
				e.closest('tr').find('#pkg_disc_amount_' + id).val(package_price - amount)
				// console.log($('#grand_total').val())
				$('#grand_total').val(Number($('#grand_total').val()) + Number($('#pkg_subtotal_' + id).val()))
				$('#sub_total').val($('#grand_total').val())
			} else {
				let amount = package_price - discount_value
				e.closest('tr').find('#pkg_subtotal_' + id).val(amount)
				e.closest('tr').find('#pkg_disc_amount_' + id).val(package_price - amount)
				$('#grand_total').val(Number($('#grand_total').val()) + Number($('#pkg_subtotal_' + id).val()))
				$('#sub_total').val($('#grand_total').val())
			}
		}







		function setUnits(e) {
			rowNo = e.value
			$('#detailTable tbody tr').each(function(row, tr) {
				// rowNO = tr;
				let package_id = $(tr).find('td:eq(0) > select').val();

				$.ajax({
					type: "POST",
					url: '<?php echo base_url("Customer/get_package_data") ?>',
					data: {
						package_id: package_id
					},
					success: function(res) {
						var res = $.parseJSON(res);

						if (package_id == rowNo) {
							$(tr).find('td:eq(0) > select').attr('disabled', 'disabled');
							$(tr).find('td:eq(1) > input').val(res.data.package_price);
							$(tr).find('td:eq(5) > input').val(res.data.package_price);

							grandtotal = Number($('#grand_total').val())
							// console.log(grandtotal)
							grandtotal += Number(res.data.package_price)
							// console.log(final)
							$('#grand_total').val(grandtotal)
							$('#sub_total').val($('#grand_total').val())

						} else {
							$('#package_description').val('')
							$('#package_price').val('')
						}
					}
				});

			});


		}
	</script>
	<!--/APPEND PACKAGE ROW-->




	<!--APPEND ITEM ROW-->

	<script type="text/javascript">
		function addItemRow() {
			// preventDefault();
			var i = 1;
			$('#itemTable tbody').append(`<tr>
<td style="width: 10%;">
<select onchange="setItems(this)" class="form-select form-control form-control jumpToNext" data-search="on" data-placeholder="Select Item" name="item" id="item_${i}">
<option value="">Select Item</option>
<?php for ($i = 0; $i < count($items); $i++) : ?>
<option value="<?= $items[$i]['item_id']; ?>"><?= $items[$i]['item_name']; ?></option>
<?php endfor; ?>
</select>
</td>
<td style="width: 10%;">
<input type="number"  onchange="item_qtys($(this))" class="form-control addNewRow" name="item_qty" id="item_qty_${i}" placeholder="Qty" />
</td>
<td style="width: 10%;">
<input type="text" class="form-control" name="item_price" id="item_price_${i}" placeholder="$0.00" readonly />
</td>
<td style="width: 10%;">
<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Type" name="item_discount_type" id="item_discount_type_${i}">
<option value="">Type</option>
<option value="%">(%)</option>
<option value="$">($)</option>
</select>
</td>
<td style="width: 13%;">
<input type="number" onchange="item_discount($(this))" class="form-control" name="item_discount_value" id="item_discount_value_${i}" placeholder="Disc">
</td>
<td style="width: 13%;">
<input type="number" class="form-control" name="item_disc_amount" id="item_disc_amount_${i}" placeholder="$0.00" readonly />
</td>
<td style="width: 13%;vertical-align: middle;text-align: center; ">
<input type="number" class="form-control" name="item_subtotal" id="item_subtotal_${i}" placeholder="$0.00" readonly />
</td>
<td style="width: 5%; vertical-align: middle;text-align: center; ">
<div class="form-check form-check-inline">
<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
</div>
</td>
<td style="width: 5%;vertical-align: middle;text-align: center;">
<a class="btn btn-primary btn-xs" onclick="addItemRow()" href="#" style="padding: 0px;"><em class="icon ni ni-plus-circle"></em></a>
<a class="btn btn-danger btn-xs remove" val="${i}"  onClick="itempkg($(this))"; href="#" style="padding: 0px;"><em class="icon ni ni-cross-circle"></em></a>
</td>
</tr>
`);
			// alert(i);
			NioApp.Select2('.form-select');
			getFocus(i);
			i++;
			// reload(0);

			NioApp.Toast('Package added successfully', 'success', {
				position: 'top-right',
				icon: 'auto',
				ui: ''
			});
		}



		function itempkg(e) {
			var id = e.closest('tr').find('.remove').attr('val')
			package_price = e.closest('tr').find('#item_subtotal_' + id).val();
			console.log(package_price)
			total = $('#grand_total').val();
			$('#grand_total').val(total - package_price);
			$('#sub_total').val($('#grand_total').val())
			// console.log(e.closest('tr').find('#pkg_subtotal_1').val());
			e.closest('tr').remove();

		}



		function item_qtys(e) {

			var id = e.closest('tr').find('.remove').attr('val')

			grand_total = $('#grand_total').val()
			package_total = $('#item_subtotal_' + id).val();
			$('#grand_total').val(grand_total - package_total)

			var qty = $('#item_qty_' + id).val();
			var sub_total = $('#item_price_' + id).val();
			$('#item_subtotal_' + id).val(sub_total * qty)
			$('#grand_total').val(Number($('#grand_total').val()) + Number($('#item_subtotal_' + id).val()))
			$('#sub_total').val($('#grand_total').val())
		}





		function setItems(e) {
			rowNo = e.value
			$('#itemTable tbody tr').each(function(row, tr) {
				let item_id = $(tr).find('td:eq(0) > select').val();
				// console.log("item_id")

				$.ajax({
					type: "POST",
					url: '<?php echo base_url("Customer/get_item_data") ?>',
					data: {
						item_id: item_id
					},
					success: function(res) {
						var res = $.parseJSON(res);
						console.log(res)

						if (item_id == rowNo) {
							console.log('ede',item_id, rowNo)
							console.log(res.data.item_id, rowNo)
							// if (res.data.item_id == rowNo) {

								if (res.data[0] != undefined || res.data.length != 0) {
									$(tr).find('td:eq(0) > select').attr('disabled', 'disabled');
									$(tr).find('td:eq(1) > input').val(1);
									$(tr).find('td:eq(2) > input').val(res.data.item_price);
									$(tr).find('td:eq(6) > input').val(res.data.item_price);
									// if()
									$(tr).find('td:eq(6) > input').val(res.data.item_price);
									$(tr).find('td:eq(7)').attr('checked', true);

									// $('.myCheckbox').prop('checked', true);
									grandtotal = Number($('#grand_total').val())
									// console.log(grandtotal)
									grandtotal += Number(res.data.item_price)
									// console.log(final)
									$('#grand_total').val(grandtotal)
									$('#sub_total').val($('#grand_total').val())
								} else {
									$('#package_description').val('')
									$('#package_price').val('')
								}
							// } else {
							// 	alert('error')
							// }
						}

					}
				});
			});
		}

		function item_discount(e) {

			var id = e.closest('tr').find('.remove').attr('val')
			grand_total = $('#grand_total').val()
			package_total = $('#item_subtotal_' + id).val();
			$('#grand_total').val(grand_total - package_total)
			// console.log(package_total , grand_total)

			item_price = $('#item_price_' + id).val()
			var qty = $('#item_qty_' + id).val();
			// package_price = e.closest('tr').find('#item_price_' + id).val()
			package_price = item_price * qty;

			// grand_total = $('#grand_total').val()

			discount_value = e.closest('tr').find('#item_discount_value_' + id).val()
			// console.log(package_price , discount_value )
			// console.log(e.closest('tr').find('#pkg_discount_type_'+id).find(':selected').val() )
			if (e.closest('tr').find('#item_discount_type_' + id).find(':selected').val() == '%') {
				price = discount_value / 100;
				amount = package_price - (price * package_price)

				e.closest('tr').find('#item_subtotal_' + id).val(amount)
				e.closest('tr').find('#item_disc_amount_' + id).val(package_price - amount)
				// console.log($('#grand_total').val())
				$('#grand_total').val(Number($('#grand_total').val()) + Number($('#item_subtotal_' + id).val()))
				$('#sub_total').val($('#grand_total').val())
			} else {
				let amount = package_price - discount_value
				e.closest('tr').find('#item_subtotal_' + id).val(amount)
				e.closest('tr').find('#item_disc_amount_' + id).val(package_price - amount)
				$('#grand_total').val(Number($('#grand_total').val()) + Number($('#item_subtotal_' + id).val()))
				$('#sub_total').val($('#grand_total').val())
			}


			// $('#itemTable tbody tr').each(function(row, tr) {

			// 	// console.log(row)
			// 	package_price = $(tr).find('td:eq(2) > input').val()
			// 	discount_value = $(tr).find('td:eq(4) > input').val()


			// 	if ($(tr).find('td:eq(3) > select').val() == "%") {
			// 		price = discount_value / 100;
			// 		amount = package_price - (price * package_price)
			// 		$(tr).find('td:eq(6) > input').val(amount)
			// 		$(tr).find('td:eq(5) > input').val(package_price - amount)
			// 	} else {
			// 		var amount = package_price - discount_value
			// 		$(tr).find('td:eq(6) > input').val(amount)
			// 		$(tr).find('td:eq(5) > input').val(package_price - amount)
			// 	}
			// 	// }
			// });
		}



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
	</script>



	<!--/APPEND ITEM ROW-->

	<script>
		$(document).ready(function() {

			$(document).on("keypress", '.addNewRow', function(event) {
				// $(".addNewRow").keypress(function(event) {
				if (event.which == 13 || event.which == 9) {
					addItemRow();
				}
			});

		})


		function getFocus(id) {
			// console.log(id)
			var jump = '#item_' + id;
			$(jump).focus();
			$(jump).select2('open');

		}

		// $(".jumpToNext").keyup(function (event) {
		//         if (event.keyCode == 13) {
		//             textboxes = $("input.jumpToNext");
		//             currentBoxNumber = textboxes.index(this);
		//             //console.log(textboxes.index(this));
		//             if (textboxes[currentBoxNumber + 1] != null) {
		//                 nextBox = textboxes[currentBoxNumber + 1];
		//                 nextBox.focus();
		//                 nextBox.select();
		//                 event.preventDefault();
		//                 return false;
		//             }
		//         }
		//     });
	</script>


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