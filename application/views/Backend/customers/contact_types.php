<!DOCTYPE html>
<html lang="zxx" class="js">

<!-- HEAD -->
<?php $this->load->view('backend/includes/head'); ?>
<!-- /HEAD -->

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
									<div class="nk-block-head nk-block-head-sm">
										<div class="nk-block-between">
											<div class="nk-block-head-content">
												<h3 class="nk-block-title page-title">Customer Contact Types</h3>

											</div><!-- .nk-block-head-content -->
											<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalForm"><em class="icon ni ni-plus"></em></button>
										</div><!-- .nk-block-between -->
									</div><!-- .nk-block-head -->
									<div class="card card-preview">
										<div class="card-inner">
											<table class="datatable-init table">
												<thead>
												<tr>
													<th>Sno#</th>
													<th>Type</th>
													<th>Action</th>
												</tr>
												</thead>
												<tbody>

												<?php for($i=0; $i<count($types); $i++): ?>
													<tr>
														<td><?= $i+1; ?></td>
														<td><?= $types[$i]['customer_contact_type'] ?></td>
														<td align="center">
														<a onclick="get_contact_byId(<?= $types[$i]['customer_contact_type_id'] ?>)" class="btn btn-xs btn-warning"><span class="icon ni ni-edit"></span></a>
													
															<button type="button" onclick="validate(this)" value="<?= $types[$i]['customer_contact_type_id']; ?>" class="btn btn-xs btn-danger"><span class="icon ni ni-trash"></span></button>
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

			<!-- footer @s -->
			<?php $this->load->view('backend/includes/footer'); ?>
			<!-- footer @e -->

		</div>
		<!-- wrap @e -->
	</div>
	<!-- main @e -->
</div>
<!-- app-root @e -->
<!-- JavaScript -->

<!-- ADD CONTACT TYPE -->
<div class="modal fade" tabindex="-1" id="modalForm">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Contact Type</h5>
				<a href="#" class="close" data-dismiss="modal" aria-label="Close">
					<em class="icon ni ni-cross"></em>
				</a>
			</div>
			<div class="modal-body">
				<form action="#" method="POST" id="add_type" class="form-validate is-alter">
					<div class="form-group">
						<label class="form-label" for="full-name">Type</label>
						<div class="form-control-wrap">
							<input type="text" class="form-control" id="type" name="type" placeholder="Type" required>
						</div>
					</div>
			</div>
			<div class="modal-footer bg-light">
				<button type="submit" class="btn btn-primary">Save</button>
				<button  class="btn btn-danger" data-dismiss="modal" aria-label="Close">Close</button>
			</div>
			</form>
		</div>
	</div>
</div>
<!-- /ADD CONTACT TYPE  -->



<!-- EDIT CONTACT TYPE -->
<div class="modal fade" tabindex="-1" id="update_contact_type">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Contact Type</h5>
				<a href="#" class="close" data-dismiss="modal" aria-label="Close">
					<em class="icon ni ni-cross"></em>
				</a>
			</div>
			<div class="modal-body">
				<form action="#" method="POST" id="update_contact_type_detail" class="form-validate is-alter">
					<div class="form-group">
						<label class="form-label" for="full-name">Type</label>
						<div class="form-control-wrap">
							<input type="text" class="form-control" id="contact_type" name="type" placeholder="Type" required>
						</div>
					</div>
					<input type="hidden" name="contact_type_id" id="contact_type_id">
			</div>
			<div class="modal-footer bg-light">
				<button type="submit" class="btn btn-primary">Save</button>
				<button  class="btn btn-danger" data-dismiss="modal" aria-label="Close">Close</button>
			</div>
			</form>
		</div>
	</div>
</div>
<!-- /EDIT CONTACT TYPE  -->


<!-- JavaScript -->
<?php $this->load->view('backend/includes/scripts'); ?>
<!-- /JavaScript -->

<script type="text/javascript">
	function validate(a)
	{
		var id= a.value;
		console.log(id)
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
					url: '<?= base_url('Administration/delete_contact_type')?>',
					data: {'contact_type_id': id}
				}).then(function(res){
					var res = $.parseJSON(res);
					if(res.msg_type === 'success') {
						$(a).closest('tr').remove();
						swal.fire('Deleted!', 'Route has been Deleted.', 'success');
						setTimeout(function(){
							location.reload();
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
		function get_contact_byId(id) {

			$('#update_contact_type').modal({
				backdrop: 'static',
				keyboard: false,
				show: true
			});	

			


			console.log(id)
			var contumer_contact_type_id = id;
			$.ajax({
				type: "POST",
				url: '<?php echo base_url("Administration/edit_customer_contact_type") ?>',
				data: {
					contumer_contact_type_id: contumer_contact_type_id
				},
				success: function(res) {
					res = $.parseJSON(res);
					console.log(res.data)
					// console.log(JSON.parse(res.data))
					$('#contact_type').val(res.data.customer_contact_type);
					$('#contact_type_id').val(res.data.customer_contact_type_id)
				},
				error: function(xhr) {
					$("#msg").html("Error: - " + xhr.status + " " + xhr.statusText);
				}
			});

			$(document).ready(function() {
				$("#update_contact_type_detail").on('submit', (function(e) {
					e.preventDefault();
					var fd = new FormData(this);
					$.ajax({
						url: '<?php echo base_url("Administration/update_contact_type") ?>',
						data: fd,
						type: "POST",
						contentType: false,
						processData: false,
						cache: false,
						beforeSend: function() {
							imageOverlay('#update_contact_type_detail', 'show');
						},
						complete: function(data) {
							imageOverlay('#update_contact_type_detail', 'hide');
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
									location.reload();
								}, 2000);

							} else {
								$("#msg").html(res);
								NioApp.Toast('<h5>' + res.message + '</h5>', 'error', {
									position: 'top-right',
									icon: 'auto',
									ui: ''
								});
							}
						},
						error: function(xhr) {
							$("#msg").html("Error: - " + xhr.status + " " + xhr.statusText);
						}
					});
				}));
			});
		}
	</script>


<!--ADD CONTACT TYPE -->
<script type="text/javascript">
	$(document).ready(function () {
		$("#add_type").on('submit', (function (e) {
			e.preventDefault();
			var fd = new FormData(this);
			$.ajax({
				url: '<?php echo base_url("Administration/save_customer_contact_type") ?>',
				data: fd,
				type: "POST",
				contentType: false,
				processData: false,
				cache: false,
				beforeSend: function(){
					imageOverlay('#add_type','show');
				},
				complete:function(data){
					imageOverlay('#add_type','hide');
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
</script>
<!--ADD CONTACT TYPE END-->

</body>

</html>
