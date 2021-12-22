<!DOCTYPE html>
<html lang="zxx" class="js">



<!-- HEAD -->
<?php $this->load->view('Backend/includes/head'); ?>
<!-- /HEAD -->

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
									<div class="nk-block-head nk-block-head-sm">
										<div class="nk-block-between">
											<div class="nk-block-head-content">
												<h3 class="nk-block-title page-title">Vendor Price List</h3>

											</div><!-- .nk-block-head-content -->
											<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#vendor_price"><em class="icon ni ni-plus-c"></em>&nbsp;Add</button>
										</div><!-- .nk-block-between -->
									</div><!-- .nk-block-head -->
									<div class="card card-preview animated fadeIn">
										<div class="card-inner">
											<table class="datatable-init table">
												<thead>
												<tr>
													<th>Sno#</th>
													<th>Vendor</th>
													<th>Item</th>
													<th>Description</th>
													<th>Price</th>
													<th>Action</th>
												</tr>
												</thead>
												<tbody>
												  <?php for($i=0; $i<count($price_list); $i++): ?>
												  <tr>
													  <td><?= $i+1; ?></td>
													  <td><?= $price_list[$i]['vendor_first_name'].' '.$price_list[$i]['vendor_last_name'] ?></td>
													  <td><?= $price_list[$i]['item_name']; ?></td>
													  <td><?= $price_list[$i]['item_description']; ?></td>
													  <td><?= $price_list[$i]['price']; ?></td>
													  <td>
														  <a href="#" onclick="get_vendor_price_data(<?= $price_list[$i]['price_list_id']; ?>)" data-toggle="modal" data-target="#update_price" class="btn btn-xs btn-warning"><span class="icon ni ni-edit"></span></a>
														  <button type="button" onclick="validate(this)" value="<?= $price_list[$i]['price_list_id']; ?>" class="btn btn-xs btn-danger"><span class="icon ni ni-trash"></span></button>
													  </td>
												   </tr>
												<?php endfor; ?>
												</tbody>
											</table>
										</div>
									</div><!-- .card-preview -->
								</div> <!-- nk-block -->

							</div><!-- .components-preview -->
						</div>
					</div>
				</div>
			</div>
			<!-- content @e -->

			<!-- ADD VENDOR PRICE  -->
			<div class="modal fade" tabindex="-1" id="vendor_price">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add Vendor Price</h5>
							<a href="#" class="close" data-dismiss="modal" aria-label="Close">
								<em class="icon ni ni-cross"></em>
							</a>
						</div>
						<div class="modal-body">
							<form action="#" method="POST" id="save_vendor_price" class="form-validate is-alter">
								<div class="form-group">
									<!--<label class="form-label" for="Label">Items</label>-->
									<div class="form-control-wrap">
										<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Select Item" name="item_id" id="status">
											<option value="1">Select Item</option>
											<?php for ($i=0; $i<count($items); $i++): ?>
												<option value="<?= $items[$i]['item_id']?>"><?= $items[$i]['item_name']?></option>
											<?php endfor; ?>
										</select>
									</div>
								</div>

								<div class="form-group">
									<!--<label class="form-label" for="default-03">Price</label>-->
									<div class="form-control-wrap">
										<div class="form-icon form-icon-left">
											<em class="icon ni ni-sign-dollar"></em>
										</div>
										<input type="text" class="form-control" name="price" id="price" value=""  placeholder="Price" >
									</div>
								</div>

								<div class="form-group">
									<!--<label class="form-label" for="default-03">Description</label>-->
									<div class="form-control-wrap">
										<div class="form-icon form-icon-left">
											<em class="icon ni ni-notes"></em>
										</div>
										<input type="text" class="form-control" name="description" id="description"  value="" placeholder="Description" readonly >
									</div>
								</div>


								<div class="form-group">
									<!--<label class="form-label" for="Note Type">Taxable</label>-->
									<div class="preview-block">
										<div class="custom-control custom-radio">
											<input type="radio" id="taxable" value="1"  name="customRadio" class="custom-control-input" disabled>
											<label class="custom-control-label" for="taxable">Taxable (Yes)</label>

										</div>

										<div class="custom-control custom-radio" style="margin-left: 10px;">
											<input type="radio" id="nontaxable" value="0" name="customRadio" class="custom-control-input" disabled>
											<label class="custom-control-label" for="nontaxable">Taxable (No)</label>

										</div>
									</div>
								</div>



								<div class="form-group">
									<!--<label class="form-label" for="cf-default-textarea">Admin Note</label>-->
									<div class="form-control-wrap">
										<textarea class="form-control form-control-sm" name="admin_note" id="cf-default-textarea" placeholder="Write your note."></textarea>
									</div>
								</div>

						</div>
						<input type="hidden" id="vendor_id" name="vendor_id" value="<?= $vendor_id; ?>" />
						<div class="modal-footer bg-light">
							<button type="submit" class="btn btn-primary">Save</button>
							<button  class="btn btn-danger" data-dismiss="modal" aria-label="Close">Close</button>
						</div>
						</form>
					</div>
				</div>
			</div>
			<!-- /ADD VENDOR PRICE -->


			<!-- EDIT VENDOR PRICE  -->
			<div class="modal fade" tabindex="-1" id="update_price">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Edit Vendor Price</h5>
							<a href="#" class="close" data-dismiss="modal" aria-label="Close">
								<em class="icon ni ni-cross"></em>
							</a>
						</div>
						<div class="modal-body">
							<form action="#" method="POST" id="update" class="form-validate is-alter">
								<div class="form-group">
									<!--<label class="form-label" for="Label">Items</label>-->
									<div class="form-control-wrap">
										<div class="form-icon form-icon-left">
											<em class="icon ni ni-camera"></em>
										</div>
										<input type="text" class="form-control" name="item_name" id="item_name" value=""  placeholder="Item Name" disabled >
									</div>
								</div>

								<div class="form-group">
									<!--<label class="form-label" for="default-03">Price</label>-->
									<div class="form-control-wrap">
										<div class="form-icon form-icon-left">
											<em class="icon ni ni-sign-dollar"></em>
										</div>
										<input type="text" class="form-control" name="price1" id="price1" value=""  placeholder="Price" >
									</div>
								</div>

								<div class="form-group">
									<!--<label class="form-label" for="default-03">Description</label>-->
									<div class="form-control-wrap">
										<div class="form-icon form-icon-left">
											<em class="icon ni ni-notes"></em>
										</div>
										<input type="text" class="form-control" name="description" id="item_description"  value="" placeholder="Description" readonly >
									</div>
								</div>


								<div class="form-group">
									<!--<label class="form-label" for="Note Type">Taxable</label>-->
									<div class="preview-block">
										<div class="custom-control custom-radio">
											<input type="radio" id="item_taxable" value="1"  name="customRadio" class="custom-control-input" disabled>
											<label class="custom-control-label" for="item_taxable">Taxable (Yes)</label>

										</div>

										<div class="custom-control custom-radio" style="margin-left: 10px;">
											<input type="radio" id="item_nontaxable" value="0" name="customRadio" class="custom-control-input" disabled>
											<label class="custom-control-label" for="item_nontaxable">Taxable (No)</label>

										</div>
									</div>
								</div>



								<div class="form-group">
									<!--<label class="form-label" for="cf-default-textarea">Admin Note</label>-->
									<div class="form-control-wrap">
										<textarea class="form-control form-control-sm" name="admin_note" id="item_notes" placeholder="Write your note."></textarea>
									</div>
								</div>

						</div>
						<input type="hidden" name="price_list_id" id="price_list_id" value="">
						<div class="modal-footer bg-light">
							<button type="submit" class="btn btn-primary">Update</button>
							<button  class="btn btn-danger" data-dismiss="modal" aria-label="Close">Close</button>
						</div>
						</form>
					</div>
				</div>
			</div>
			<!-- /EDIT VENDOR PRICE -->


			<!-- footer @s -->
			<?php $this->load->view('Backend/includes/footer'); ?>
			<!-- footer @e -->
		</div>
		<!-- wrap @e -->
	</div>
	<!-- main @e -->
</div>
<!-- app-root @e -->
<!-- JavaScript -->


<!-- JavaScript -->
<?php $this->load->view('Backend/includes/scripts'); ?>
<!-- /JavaScript -->


<!--DELETE-->
<script type="text/javascript">
	function validate(a)
	{
		var id= a.value;
		swal.fire({
			title: 'Are you sure?',
			text: "You won't be able to revert this!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonText: 'Yes, delete it!'
		}).then( function(result) {
			if (result.value) {

				$.ajax({
					type: 'POST',
					url: '<?= base_url('Vendor/delete_vendor_item')?>',
					data: {'price_list_id': id}
				}).then(function(res){
					var res = $.parseJSON(res);
					if(res.msg_type === 'success') {
						$(a).closest('tr').remove();
						swal.fire('Deleted!', 'Item has been Deleted.', 'success');
						setTimeout(function(){
							location.reload(true);
						}, 1000);

					}else{
						swal.fire('Error','Ops something went wrong','error');
					}
				}, function(err){
					swal.fire('Error', err.statusText, 'error');
				});

			} else if (result.dismiss === 'cancel') {
				swal.fire(
					'Cancelled',
					'Your imaginary file is safe :)',
					'error'
				)
			}
		})
	}
</script>


<script>

	$("#status").change(function(e){
		// console.log(e.target.value)
		var item_id = e.target.value;
		$.ajax({
			type: "POST",
			url: '<?php echo base_url("Vendor/get_item_name") ?>',
			data: {item_id : item_id},
			success: function (res) {
				var res = $.parseJSON(res);
				// console.log(res.data.item_price)
				$('#price').val(res.data.item_price)
				if (res.data != undefined || res.data.length != 0)
				{
					// console.log(res.data);
					$('#price').val(res.data.item_price)
					$('#description').val(res.data.item_description)
					if (res.data.item_taxable == '1' )
					{
						document.getElementById("taxable").checked = true;
						document.getElementById("nontaxable").checked = false;
					}
					else
					{
						document.getElementById("taxable").checked = false;
						document.getElementById("nontaxable").checked = true;
					}
				}
				else
				{
					$('#price').val('')
					$('#description').val('')
				}
			}
		});
	});

</script>


<script>
	$(document).ready(function () {
		$("#save_vendor_price").on('submit', (function (e) {
			e.preventDefault();
			var fd = new FormData(this);
			$.ajax({
				url: '<?php echo base_url("Vendor/save_vendor_price") ?>',
				data: fd,
				type: "POST",
				contentType: false,
				processData: false,
				cache: false,
				beforeSend: function(){
					imageOverlay('#save_vendor_price','show');
				},
				complete:function(data){
					imageOverlay('#save_vendor_price','hide');
				},
				success: function (res) {
					var res = $.parseJSON(res);
					if (res.msg_type === 'success') {
						NioApp.Toast(res.message, 'success', {position: 'top-right', icon: 'auto', ui: ''});
						setTimeout(function(){
							location.reload(true);
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
	});

	$(document).ready(function () {
		$("#update").on('submit', (function (e) {
			e.preventDefault();
			var fd = new FormData(this);
			$.ajax({
				url: '<?php echo base_url("Vendor/update_vendor_price") ?>',
				data: fd,
				type: "POST",
				contentType: false,
				processData: false,
				cache: false,
				beforeSend: function(){
					imageOverlay('#update','show');
				},
				complete:function(data){
					imageOverlay('#update','hide');
				},
				success: function (res) {
					var res = $.parseJSON(res);
					if (res.msg_type === 'success') {
						NioApp.Toast(res.message, 'success', {position: 'top-right', icon: 'auto', ui: ''});
						setTimeout(function(){
							location.reload(true);
						}, 2000);

					} else {

						NioApp.Toast('<h5>' + res.message + '</h5>', 'error', {position: 'top-right', icon: 'auto', ui: ''});
					}
				},
				error: function (xhr) {
					$("#msg").html("Error: - " + xhr.status + " " + xhr.statusText);
				}
			});
		}));
	});

</script>


<script>
	function get_vendor_price_data(id)
	{
		$('#update_price').modal({
			backdrop: 'static',
			keyboard: false,
			show: true
		});
		var price_list_id = id;
		$.ajax({
			type: "POST",
			url: '<?php echo base_url("Vendor/price_list_by_id") ?>',
			data: {price_list_id : price_list_id},
			success: function (res) {
				var res = $.parseJSON(res);
				console.log(res.data.price)
				if (res.data != undefined || res.data.length != 0)
				{
					$('#price1').val(res.data.price)
					$('#price_list_id').val(res.data.price_list_id)
					// console.log(res.data);
					$('#item_name').val(res.data.item_name)
					$('#item_description').val(res.data.item_description)
					$('#item_notes').val(res.data.notes)
					if (res.data.item_taxable == '1' )
					{
						document.getElementById("item_taxable").checked = true;
						document.getElementById("item_nontaxable").checked = false;
					}
					else
					{
						document.getElementById("item_taxable").checked = false;
						document.getElementById("item_nontaxable").checked = true;
					}
				}
				else
				{
					$('#price').val('')
					$('#description').val('')
				}
			},
			error: function (xhr) {
				$("#msg").html("Error: - " + xhr.status + " " + xhr.statusText);
			}
		});
	}
</script>




</body>

</html>
