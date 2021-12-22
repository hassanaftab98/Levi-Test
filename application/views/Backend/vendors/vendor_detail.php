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
													<a href="<?= base_url('vendor/manage') ?>" class="btn btn-primary"> <em class="icon ni ni-chevron-back"></em> Back</a>
												</div><!-- .nk-block-head-content -->
											</div><!-- .nk-block-between -->
										</div><!-- .nk-block-head -->

										<div class="card card-preview">
											<div class="card-inner">
												<ul class="nav nav-tabs mt-n3">
													<li class="nav-item">
														<a class="nav-link active " data-toggle="tab" href="#tabItem5"><em class="icon ni ni-user-circle"></em><span>General Info</span></a>
													</li>
													<li class="nav-item">
														<a class="nav-link " data-toggle="tab" href="#tabItem6"><em class="icon ni ni-file-text"></em><span>Attachments</span></a>
													</li>
													<li class="nav-item">
														<a class="nav-link " data-toggle="tab" href="#tabItem7"><em class="icon ni ni-notes"></em><span>Admin Notes</span></a>
													</li>
													<li class="nav-item">
														<a class="nav-link " data-toggle="tab" href="#tabItem8"><em class="icon ni ni-sign-dollar"></em><span>Price List</span></a>
													</li>
												</ul>
												<div class="tab-content">
													<div class="tab-pane active animated fadeIn" id="tabItem5">
														<!--													<div class="card-inner">-->
														<div class="nk-block">
															<div class="nk-block-head nk-block-head-line">
																<h6 class="title overline-title text-base">Vendor Details</h6>
															</div>
															<div class="profile-ud-list">
																<div class="profile-ud-item">
																	<div class="profile-ud wider">
																		<span class="profile-ud-label">First Name</span>
																		<span class="profile-ud-value"><?= $detail['vendor_first_name']; ?></span>
																	</div>
																</div>
																<div class="profile-ud-item">
																	<div class="profile-ud wider">
																		<span class="profile-ud-label">Last Name</span>
																		<span class="profile-ud-value"><?= $detail['vendor_last_name']; ?></span>
																	</div>
																</div>
																<div class="profile-ud-item">
																	<div class="profile-ud wider">
																		<span class="profile-ud-label">Primary Email</span>
																		<span class="profile-ud-value"><?= $detail['vendor_primary_email']; ?></span>
																	</div>
																</div>
																<div class="profile-ud-item">
																	<div class="profile-ud wider">
																		<span class="profile-ud-label">Primary Number</span>
																		<span class="profile-ud-value"><?= $detail['vendor_primary_contact_no'] ?></span>
																	</div>
																</div>
																<div class="profile-ud-item">
																	<div class="profile-ud wider">
																		<span class="profile-ud-label">Address 1</span>
																		<span class="profile-ud-value"><?= $detail['vendor_address1']; ?></span>
																	</div>
																</div>
																<div class="profile-ud-item">
																	<div class="profile-ud wider">
																		<span class="profile-ud-label">Address 2</span>
																		<span class="profile-ud-value"><?= $detail['vendor_address2'] ?></span>
																	</div>
																</div>
																<div class="profile-ud-item">
																	<div class="profile-ud wider">
																		<span class="profile-ud-label">City</span>
																		<span class="profile-ud-value"><?= $detail['vendor_city'] ?></span>
																	</div>
																</div>
																<div class="profile-ud-item">
																	<div class="profile-ud wider">
																		<span class="profile-ud-label">State</span>
																		<span class="profile-ud-value"><?= $detail['vendor_state'] ?></span>
																	</div>
																</div>
																<div class="profile-ud-item">
																	<div class="profile-ud wider">
																		<span class="profile-ud-label">ZipCode</span>
																		<span class="profile-ud-value"><?= $detail['vendor_zipcode'] ?></span>
																	</div>
																</div>
															</div><!-- .profile-ud-list -->
														</div><!-- .nk-block -->
														<div class="nk-block">
															<div class="nk-block-head nk-block-head-line">
																<h6 class="title overline-title text-base">Additional Contacts</h6>
															</div><!-- .nk-block-head -->
															<div class="row g-4">

																<div class="col-12">
																	<table class="table">
																		<thead class="thead-dark">
																			<tr>
																				<th scope="col">Sno#</th>
																				<th scope="col">Person Name</th>
																				<th scope="col">Title</th>
																				<th scope="col">Email</th>
																				<th scope="col">Contact</th>
																			</tr>
																		</thead>
																		<tbody>
																			<?php for ($i = 0; $i < count($contacts); $i++) : ?>
																				<tr>
																					<th scope="row"><?= $i + 1; ?></th>
																					<td><?= $contacts[$i]['contact_person_name']; ?></td>
																					<td><?= $contacts[$i]['contact_type']; ?></td>
																					<td><?= $contacts[$i]['contact_person_email'] ?></td>
																					<td><?= $contacts[$i]['contact_person_number'] ?></td>
																				</tr>
																			<?php endfor; ?>

																		</tbody>
																	</table>
																</div>
															</div>
														</div><!-- .nk-block -->


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
															<div class="nk-block">
																<div class="nk-block-head nk-block-head-sm nk-block-between">
																	<h5 class="title">Admin Notes & Feedbacks</h5>
																	<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalForm"><em class="icon ni ni-plus-c"></em>&nbsp;Add Note</button>
																</div><!-- .nk-block-head -->
																<div class="bq-note">
																	<?php foreach ($vendor_notes as $note) : ?>
																		<div class="bq-note-item">
																			<div class="bq-note-text">
																				<p><?= $note->note_description; ?></p>
																			</div>
																			<div class="bq-note-meta">
																				<span class="bq-note-added">Added on <span class="date"><?= date('M, d-Y', strtotime($note->added_at)); ?></span> at <span class="time"><?= date('h:i:sa', strtotime($note->added_at)); ?></span></span>
																				<span class="bq-note-sep sep">|</span>
																				<span class="bq-note-by">By <span><?= $note->added_by; ?></span></span>
																				<button onclick="validate(this)" value="<?= $note->vendor_note_id; ?>" class="link link-sm link-danger">Delete Note</button>
																			</div>
																		</div>
																	<?php endforeach; ?>
																</div><!-- .bq-note -->
															</div>
														</div>

													</div>
													<div class="tab-pane animated fadeIn" id="tabItem8">
														<div class="tab-content">
															<div class="nk-block">
																<div class="nk-block-head nk-block-head-sm nk-block-between">
																	<h5 class="title"></h5>
																	<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#vendor_price"><em class="icon ni ni-plus-c"></em>&nbsp;Add</button>
																</div><!-- .nk-block-head -->
																<table class="datatable-init table">
																	<thead>
																		<tr>
																			<th>Sno#</th>
																			<th>Name</th>
																			<th>Description</th>
																			<th>Price</th>
																			<th>Taxable</th>
																			<th>Pickup Required</th>
																			<th>Action</th>
																		</tr>
																	</thead>
																	<tbody>


																	</tbody>
																</table>
															</div>
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


				<!-- ADD NEW NOTE -->
				<div class="modal fade" tabindex="-1" id="modalForm">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add New Note</h5>
								<a href="#" class="close" data-dismiss="modal" aria-label="Close">
									<em class="icon ni ni-cross"></em>
								</a>
							</div>
							<div class="modal-body">
								<form action="#" method="POST" id="add_note" class="form-validate is-alter">

									<div class="form-group">
										<label class="form-label" for="cf-default-textarea">Admin Note</label>
										<div class="form-control-wrap">
											<textarea class="form-control form-control-sm" name="admin_note" id="cf-default-textarea" placeholder="Write your note."></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="form-label" for="Note Type">Note Type</label>
										<div class="preview-block">
											<div class="custom-control custom-radio">
												<input type="radio" id="public" value="1" name="customRadio" onclick="enabled('public')" class="custom-control-input">
												<label class="custom-control-label" for="public">Public</label>

											</div>

											<div class="custom-control custom-radio" style="margin-left: 10px;">
												<input type="radio" id="private" value="2" checked  name="customRadio" onclick="enabled('private')" class="custom-control-input">
												<label class="custom-control-label" for="private">Private</label>

											</div>
										</div>
									</div>
									<div class="preview-block">
										<label class="form-label" for="Send Cred">Send Note Notification</label>
										<style>
											.userswitch {
												display: flex;
											}
										</style>
										<div class="custom-control custom-switch userswitch">
											<input type="checkbox" class="custom-control-input" id="customSwitch2" name="my-checkbox" disabled>
											<label class="custom-control-label" for="customSwitch2"></label>
										</div>
									</div>
							</div>
							<input type="hidden" name="vendor_id" value="<?= $detail['vendor_id']; ?>">
							<div class="modal-footer bg-light">
								<button type="submit" class="btn btn-primary">Save</button>
								<button class="btn btn-danger" data-dismiss="modal" aria-label="Close">Close</button>
							</div>
							</form>
						</div>
					</div>
				</div>
				<!-- /ADD NEW NOTE -->

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
								<form action="#" method="POST" id="add_note" class="form-validate is-alter">
									<div class="form-group">
										<!--<label class="form-label" for="Label">Items</label>-->
										<div class="form-control-wrap">
											<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Select Status" name="status" id="status">
												<option value="1">Select Status</option>
												<?php for ($i = 0; $i < count($items); $i++) : ?>
													<option value="<?= $items[$i]['item_id'] ?>"><?= $items[$i]['item_name'] ?></option>
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
											<input type="text" class="form-control" name="price" id="price" placeholder="Price">
										</div>
									</div>

									<div class="form-group">
										<!--<label class="form-label" for="default-03">Description</label>-->
										<div class="form-control-wrap">
											<div class="form-icon form-icon-left">
												<em class="icon ni ni-notes"></em>
											</div>
											<input type="text" class="form-control" name="description" id="description" placeholder="Description">
										</div>
									</div>


									<div class="form-group">
										<!--<label class="form-label" for="Note Type">Taxable</label>-->
										<div class="preview-block">
											<div class="custom-control custom-radio">
												<input type="radio" id="public" value="1" checked name="customRadio" class="custom-control-input">
												<label class="custom-control-label" for="public">Taxable (Yes)</label>

											</div>

											<div class="custom-control custom-radio" style="margin-left: 10px;">
												<input type="radio" id="private" value="2" name="customRadio" class="custom-control-input">
												<label class="custom-control-label" for="private">Taxable (No)</label>

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
							<div class="modal-footer bg-light">
								<button type="submit" class="btn btn-primary">Save</button>
								<button class="btn btn-danger" data-dismiss="modal" aria-label="Close">Close</button>
							</div>
							</form>
						</div>
					</div>
				</div>
				<!-- /ADD VENDOR PRICE -->

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
	<?php $this->load->view('backend/includes/scripts'); ?>
	<!-- /JavaScript -->


	<script>


		function enabled(value)
		{
			// alert(value)
			if(value == 'private')
			{
				$('#customSwitch2').attr('disabled',true);
			}
			else
			{
				$('#customSwitch2').attr('disabled',false);
			}
		}
		
	</script>

	<!-- DELETE NOTE -->
	<script type="text/javascript">
		function validate(a) {
			var id = a.value;
			swal.fire({
				title: 'Are you sure?',
				text: "You won't be able to revert this!",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonText: 'Yes, delete it!'
			}).then(function(result) {
				if (result.value) {

					$.ajax({
						type: 'POST',
						url: '<?= base_url('Vendor/delete_vendor_note') ?>',
						data: {
							'vendor_note_id': id
						}
					}).then(function(res) {
						var res = $.parseJSON(res);
						if (res.msg_type === 'success') {
							//$(a).closest('tr').remove();
							swal.fire('Deleted!', 'Note has been Deleted.', 'success');
							setTimeout(function() {
								location.reload();
							}, 1000);
						} else {
							swal.fire('Error', 'Ops something went wrong', 'error');
						}
					}, function(err) {
						swal.fire('Error', err.statusText, 'error');
					});

				} else if (result.dismiss === 'cancel') {
					swal.fire(
						'Cancelled',
						'Your data is safe :)',
						'error'
					)
				}
			})
		}
	</script>
	<!-- /DELETE NOTE -->

	<!--ADD STATUS -->
	<script type="text/javascript">
		$(document).ready(function() {
			$("#add_note").on('submit', (function(e) {
				e.preventDefault();
				var fd = new FormData(this);
				$.ajax({
					url: '<?php echo base_url("Vendor/save_vendor_note") ?>',
					data: fd,
					type: "POST",
					contentType: false,
					processData: false,
					cache: false,
					beforeSend: function() {
						imageOverlay('#add_note', 'show');
					},
					complete: function(data) {
						imageOverlay('#add_note', 'hide');
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
								//window.location = res.redirect_link;
							}, 2000);

						} else {
							var temp = res.message.split("<p>");
							var temp2 = temp;
							$.each(temp2, function(index, value) {
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
	<!--ADD STATUS END-->

</body>

</html>