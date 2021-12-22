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
									<div class="nk-block-head nk-block-head-sm">
										<div class="nk-block-between">
											<a href="<?= base_url('customer/manage'); ?>" class="btn btn-primary">Back</em></a>
										</div>
									</div>
									<div class="nk-block nk-block-lg">

										<div class="card card-preview">
											<div class="card-inner">
												<ul class="nav nav-tabs mt-n3" id="CustomerTab">
													<li class="nav-item">
														<a class="nav-link active " data-toggle="tab" href="#tabItem5"><em class="icon ni ni-user-circle"></em><span>General Info</span></a>
													</li>
													<li class="nav-item">
														<a class="nav-link " data-toggle="tab" href="#tabItem6"><em class="icon ni ni-file-text"></em><span>Attachments</span></a>
													</li>
													<li class="nav-item">
														<a class="nav-link " data-toggle="tab" href="#tabItem7"><em class="icon ni ni-notes"></em><span>Admin Notes</span></a>
													</li>
													<!-- <li class="nav-item">
													<a class="nav-link " data-toggle="tab" href="#tabItem8"><em class="icon ni ni-sign-dollar"></em><span>Price List</span></a>
												</li> -->
												</ul>
												<div class="tab-content">
													<div class="tab-pane active animated fadeIn" id="tabItem5">
														<!--													<div class="card-inner">-->
														<div class="nk-block">
															<div class="nk-block-head nk-block-head-line">
																<h6 class="title overline-title text-base">Customer Details</h6>
															</div>
															<div class="profile-ud-list">
																<div class="profile-ud-item">
																	<div class="profile-ud wider">
																		<span class="profile-ud-label">First Name</span>
																		<span class="profile-ud-value"><?= $detail[0]['customer_first_name']; ?></span>
																	</div>
																</div>
																<div class="profile-ud-item">
																	<div class="profile-ud wider">
																		<span class="profile-ud-label">Last Name</span>
																		<span class="profile-ud-value"><?= $detail[0]['customer_last_name']; ?></span>
																	</div>
																</div>
																<div class="profile-ud-item">
																	<div class="profile-ud wider">
																		<span class="profile-ud-label">Primary Email</span>
																		<span class="profile-ud-value"><?= $detail[0]['customer_primary_email']; ?></span>
																	</div>
																</div>
																<div class="profile-ud-item">
																	<div class="profile-ud wider">
																		<span class="profile-ud-label">Primary Number</span>
																		<span class="profile-ud-value"><?= $detail[0]['customer_primary_contact_no'] ?></span>
																	</div>
																</div>
																<div class="profile-ud-item">
																	<div class="profile-ud wider">
																		<span class="profile-ud-label">Address 1</span>
																		<span class="profile-ud-value"><?= $detail[0]['customer_address1']; ?></span>
																	</div>
																</div>
																<!-- <div class="profile-ud-item">
																	<div class="profile-ud wider">
																		<span class="profile-ud-label">Address 2</span>
																		<span class="profile-ud-value"><?= $detail[0]['customer_address2'] ?></span>
																	</div>
																</div> -->
																<div class="profile-ud-item">
																	<div class="profile-ud wider">
																		<span class="profile-ud-label">City</span>
																		<span class="profile-ud-value"><?= $detail[0]['customer_city'] ?></span>
																	</div>
																</div>
																<div class="profile-ud-item">
																	<div class="profile-ud wider">
																		<span class="profile-ud-label">State</span>
																		<span class="profile-ud-value"><?= $detail[0]['customer_state'] ?></span>
																	</div>
																</div>
																<div class="profile-ud-item">
																	<div class="profile-ud wider">
																		<span class="profile-ud-label">ZipCode</span>
																		<span class="profile-ud-value"><?= $detail[0]['customer_zipcode'] ?></span>
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
																				<th scope="col">Title</th>
																				<th scope="col">Person Name</th>
																				<th scope="col">Email</th>
																				<th scope="col">Contact</th>
																				<th scope="col">Action</th>
																			</tr>
																		</thead>
																		<tbody>
																			<?php for ($i = 0; $i < count($contacts); $i++) : ?>
																				<tr>
																					<th scope="row"><?= $i + 1; ?></th>
																					<td><?= $contacts[$i]['contact_type'] ?></td>
																					<td><?= $contacts[$i]['person_name']; ?></td>
																					<td><?= $contacts[$i]['person_email']; ?></td>
																					<td><?= $contacts[$i]['person_contact_no'] ?></td>
																					<td>
																						<a onclick="customer_contact_type(<?= $contacts[$i]['customer_contact_id'] ?>)" data-toggle="modal" data-target="#update_contact_type" class="btn btn-xs btn-warning"><span class="icon ni ni-edit"></span></a>

																						<!-- <a onclick="customer_contact_type(<?= $contacts[$i]['customer_contact_id'] ?>)" class="btn btn-xs btn-warning"><span class="icon ni ni-edit"></span></a> -->
																						<!-- <a onclick="get_contact_byId(<?= $contacts[$i]['customer_contact_id'] ?>)" class="btn btn-xs btn-warning"><span class="icon ni ni-edit"></span></a> -->
																						<button onclick="delete_contact(this)" value="<?= $contacts[$i]['customer_contact_id']; ?>" class="btn btn-xs  btn-danger"><span class="icon ni ni-trash"></span></button>

																					</td>
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
															<div class="nk-block">
																<div class="nk-block-head nk-block-head-sm nk-block-between">
																	<h5 class="title">Document</h5>
																	<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add_doc"><em class="icon ni ni-plus-c"></em>&nbsp;Documents</button>
																</div><!-- .nk-block-head -->
																<div class="nk-files nk-files-view-grid">

																	<div class="nk-files-list">

																		<?php if (!empty($docs)) : ?>
																			<?php foreach ($docs as $row) : ?>
																				<div class="nk-file-item nk-file">
																					<div class="nk-file-info">
																						<div class="nk-file-title">
																							<div class="nk-file-icon">
																								<a class="nk-file-icon-link" href="#">
																									<span class="nk-file-icon-type">
																										<?php $extension = pathinfo($row['doc'], PATHINFO_EXTENSION); ?>

																										<?php if ($extension == 'docx') { ?>
																											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
																												<g>
																													<path d="M50,61H22a6,6,0,0,1-6-6V22l9-11H50a6,6,0,0,1,6,6V55A6,6,0,0,1,50,61Z" style="fill:#599def" />
																													<path d="M25,20.556A1.444,1.444,0,0,1,23.556,22H16l9-11h0Z" style="fill:#c2e1ff" />
																													<rect x="27" y="31" width="18" height="2" rx="1" ry="1" style="fill:#fff" />
																													<rect x="27" y="36" width="18" height="2" rx="1" ry="1" style="fill:#fff" />
																													<rect x="27" y="41" width="18" height="2" rx="1" ry="1" style="fill:#fff" />
																													<rect x="27" y="46" width="12" height="2" rx="1" ry="1" style="fill:#fff" />
																												</g>
																											</svg>

																										<?php } elseif ($extension == 'pdf') { ?>

																											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
																												<path d="M50,61H22a6,6,0,0,1-6-6V22l9-11H50a6,6,0,0,1,6,6V55A6,6,0,0,1,50,61Z" style="fill:#f26b6b" />
																												<path d="M25,20.556A1.444,1.444,0,0,1,23.556,22H16l9-11h0Z" style="fill:#f4c9c9" />
																												<path d="M46.3342,44.5381a4.326,4.326,0,0,0-2.5278-1.4289,22.436,22.436,0,0,0-4.5619-.3828A19.3561,19.3561,0,0,1,35.82,37.9536a56.5075,56.5075,0,0,0,1.3745-6.0858,2.339,2.339,0,0,0-.4613-1.8444,1.9429,1.9429,0,0,0-1.5162-.753h-.0014a1.6846,1.6846,0,0,0-1.3893.6966c-1.1493,1.5257-.3638,5.219-.1941,5.9457a12.6118,12.6118,0,0,0,.7236,2.1477,33.3221,33.3221,0,0,1-2.49,6.1052,20.3467,20.3467,0,0,0-5.9787,3.4413,2.5681,2.5681,0,0,0-.8861,1.8265,1.8025,1.8025,0,0,0,.6345,1.3056,2.0613,2.0613,0,0,0,1.3942.5313,2.2436,2.2436,0,0,0,1.4592-.5459,20.0678,20.0678,0,0,0,4.2893-5.3578,20.8384,20.8384,0,0,1,5.939-1.1858A33.75,33.75,0,0,0,42.96,47.7858,2.6392,2.6392,0,0,0,46.376,47.55,2.08,2.08,0,0,0,46.3342,44.5381ZM27.6194,49.6234a.8344.8344,0,0,1-1.0847.0413.4208.4208,0,0,1-.1666-.2695c-.0018-.0657.0271-.3147.4408-.736a18.0382,18.0382,0,0,1,3.7608-2.368A17.26,17.26,0,0,1,27.6194,49.6234ZM34.9023,30.848a.343.343,0,0,1,.3144-.1514.6008.6008,0,0,1,.4649.2389.853.853,0,0,1,.1683.6722v0c-.1638.92-.4235,2.381-.8523,4.1168-.0125-.05-.0249-.1-.037-.1506C34.6053,34.0508,34.3523,31.5779,34.9023,30.848ZM33.7231,43.5507a34.9732,34.9732,0,0,0,1.52-3.7664,21.2484,21.2484,0,0,0,2.2242,3.05A21.8571,21.8571,0,0,0,33.7231,43.5507Zm11.7054,2.97a1.3085,1.3085,0,0,1-1.6943.0887,33.2027,33.2027,0,0,1-3.0038-2.43,20.9677,20.9677,0,0,1,2.8346.3335,2.97,2.97,0,0,1,1.7406.9647C45.8377,46.1115,45.6013,46.3483,45.4285,46.5212Z" style="fill:#fff" />
																											</svg>

																										<?php } else { ?>

																											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
																												<path d="M50,61H22a6,6,0,0,1-6-6V22l9-11H50a6,6,0,0,1,6,6V55A6,6,0,0,1,50,61Z" style="fill:#755de0" />
																												<path d="M27.2223,43H44.7086s2.325-.2815.7357-1.897l-5.6034-5.4985s-1.5115-1.7913-3.3357.7933L33.56,40.4707a.6887.6887,0,0,1-1.0186.0486l-1.9-1.6393s-1.3291-1.5866-2.4758,0c-.6561.9079-2.0261,2.8489-2.0261,2.8489S25.4268,43,27.2223,43Z" style="fill:#fff" />
																												<path d="M25,20.556A1.444,1.444,0,0,1,23.556,22H16l9-11h0Z" style="fill:#b5b3ff" />
																											</svg>


																										<?php }  ?>

																									</span>
																								</a>
																							</div>
																							<div class="nk-file-name">
																								<div class="nk-file-name-text">
																									<a href="#" class="title"><?= $row['doc_title']; ?></a>
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="nk-file-actions">
																						<div class="dropdown">
																							<a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
																							<div class="dropdown-menu dropdown-menu-right">
																								<ul class="link-list-plain no-bdr">
																									<li><a href="<?php echo base_url() . 'uploads/customer_documents/' . $row['doc']; ?>" download class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
																									<li><a href="#" onclick="deleten(this)" value="<?= $row['doc_id']; ?>" class="file-dl-toast"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
																									<!-- <button type="button" onclick="deleten(this)" value="<?= $row['doc']; ?>" class="btn btn-xs btn-danger"><span class="icon ni ni-trash"></span></button> -->
																									<li> </li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div><!-- .nk-file -->
																			<?php endforeach; ?>
																		<?php endif; ?>
																	</div>
																</div><!-- .nk-files -->

															</div>
														</div>

													</div>
													<div class="tab-pane" id="tabItem7">

														<div class="tab-content">
															<div class="nk-block">
																<div class="nk-block-head nk-block-head-sm nk-block-between">
																	<h5 class="title">Admin Notes & Feedbacks</h5>
																	<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalForm"><em class="icon ni ni-plus-c"></em>&nbsp;Add Note</button>
																</div><!-- .nk-block-head -->
																<div class="bq-note">
																	<?php foreach ($customer_notes as $note) : ?>
																		<div class="bq-note-item">
																			<div class="bq-note-text">
																				<p><?= $note->note_description; ?></p>
																			</div>
																			<div class="bq-note-meta">
																				<span class="bq-note-added">Added on <span class="date"><?= date('M, d-Y', strtotime($note->added_at)); ?></span> at <span class="time"><?= date('h:i:sa', strtotime($note->added_at)); ?></span></span>
																				<span class="bq-note-sep sep">|</span>
																				<span class="bq-note-by">By <span><?= $note->added_by; ?></span></span>
																				<button onclick="validate(this)" value="<?= $note->customer_note_id; ?>" class="link link-sm link-danger">Delete Note</button>
																			</div>
																		</div>
																	<?php endforeach; ?>
																</div><!-- .bq-note -->
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
												<input type="radio" id="public" value="1" name="customRadio" class="custom-control-input">
												<label class="custom-control-label" for="public">Public</label>

											</div>

											<div class="custom-control custom-radio" style="margin-left: 10px;">
												<input type="radio" id="private" value="2" checked name="customRadio" class="custom-control-input">
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
											<input type="checkbox" class="custom-control-input" id="customSwitch2" name="my-checkbox">
											<label class="custom-control-label" for="customSwitch2"></label>
										</div>
									</div>
							</div>
							<input type="hidden" name="customer_id" value="<?= $detail[0]['customer_id']; ?>">
							<div class="modal-footer bg-light">
								<button type="submit" class="btn btn-primary">Save</button>
								<button class="btn btn-danger" data-dismiss="modal" aria-label="Close">Close</button>
							</div>
							</form>
						</div>
					</div>
				</div>
				<!-- /ADD NEW NOTE -->

				<!-- ADD NEW DOC -->
				<div class="modal fade" tabindex="-1" id="add_doc">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add New Document</h5>
								<a href="#" class="close" data-dismiss="modal" aria-label="Close">
									<em class="icon ni ni-cross"></em>
								</a>
							</div>
							<div class="modal-body">
								<form action="#" method="POST" id="add_document" class="form-validate is-alter">

									<div class="form-group">
										<!-- <label class="form-label" for="default-06">Upload Document</label> -->
										<div class="form-control-wrap">
											<div class="custom-file">
												<input type="file" name="file" class="custom-file-input" multiple="multiple" style="padding-top: 5px;">
												<!-- <input type="file" multiple="multiple" name="files[]" > -->
												<label class="custom-file-label" for="customFile">Choose file</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<!-- <label class="form-label" for="default-03">Document Title</label> -->
										<div class="form-control-wrap">
											<div class="form-icon form-icon-left">
												<em class="icon ni ni-pen"></em>
											</div>
											<input type="text" class="form-control" name="doc_title" placeholder="Document Title" id="doc_title" value="">
										</div>
									</div>

							</div>
							<input type="hidden" name="customer_id" value="<?= $detail[0]['customer_id'];  ?>">
							<div class="modal-footer bg-light">
								<button type="submit" class="btn btn-primary">Save</button>
								<button class="btn btn-danger" data-dismiss="modal" aria-label="Close">Close</button>
							</div>
							</form>
						</div>
					</div>
				</div>
				<!-- /ADD NEW DOC -->


				<!-- UPDATE CONTACT TYPE -->
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

									<div id="get_data"></div>
									<input type="hidden" name="contact_type_id" id="contact_type_id">
							</div>
							<div class="modal-footer bg-light">
								<button type="submit" class="btn btn-primary">Save</button>
								<button class="btn btn-danger" data-dismiss="modal" aria-label="Close">Close</button>
							</div>
							</form>
						</div>
					</div>
				</div>

				<!-- UPDATE CONTACT TYPE END -->


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
						url: '<?= base_url('Customer/delete_customer_note') ?>',
						data: {
							'customer_note_id': id
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



	<!-- Add DOCUMENT -->

	<script>
		$(document).ready(function() {
			$("#add_document").on('submit', (function(e) {
				e.preventDefault();
				var fd = new FormData(this);
				$.ajax({
					url: '<?php echo base_url("Customer/add_document") ?>',
					data: fd,
					type: "POST",
					contentType: false,
					processData: false,
					cache: false,
					beforeSend: function() {
						imageOverlay('#add_document', 'show');
					},
					complete: function(data) {
						imageOverlay('#add_document', 'hide');
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
								// window.location = res.redirect_link;
								location.reload()
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
			$('.select2bs4').select2({
				theme: 'bootstrap4'
			});
		});
	</script>
	<!-- /ADD DOCUMENT -->



	<!-- delete doc -->


	<script type="text/javascript">
		$(document).ready(function() {
			$('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
				localStorage.setItem('activeTab', $(e.target).attr('href'));
			});
			var activeTab = localStorage.getItem('activeTab');
			if (activeTab) {
				$('#CustomerTab a[href="' + activeTab + '"]').tab('show');
			}
		});

		// $(document).ready(function() {
		// 		window.onunload = function() {
		// 			localStorage.removeItem('activeTab');
		// 		}
		// });




		$(document).on("keypress", '.phone-format', function(e) {
			// console.log('sds')
			if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
				return false;
			}
			var curchr = this.value.length;
			var curval = $(this).val();
			if (curchr == 3 && curval.indexOf("(") <= -1) {
				$(this).val("(" + curval + ")" + " ");
			} else if (curchr == 4 && curval.indexOf("(") > -1) {
				$(this).val(curval + ")-");
			} else if (curchr == 5 && curval.indexOf(")") > -1) {
				$(this).val(curval + "-");
			} else if (curchr == 9) {
				$(this).val(curval + "-");
				$(this).attr('maxlength', '14');
			}
		});
		/***phone number format***/
		// $(".add").click(function(a) {
		function deleten(a) {
			console.log($(a).attr('value'))

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
						url: '<?= base_url('Customer/delete_business_doc') ?>',
						data: {
							'doc_id': $(a).attr('value'),
							'user_id': <?= $this->session->userdata['id']; ?>
						}
					}).then(function(res) {
						var res = $.parseJSON(res);
						if (res.msg_type === 'success') {
							$(a).closest('tr').remove();
							swal.fire('Deleted!', 'Document has been Deleted.', 'success');
							setTimeout(function() {
								location.reload();
							}, 300);
						} else {
							swal.fire('Error', 'Ops something went wrong', 'error');
						}
					}, function(err) {
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

	<!-- /delete doc -->

	<!--ADD STATUS -->
	<script type="text/javascript">
		$(document).on("keypress", '.caps', function(e) {
			// console.log($('.caps').attr('id'))
			let fn = $('.caps').val();
			const capitalStr = fn.replace(/\b\w/g, (c) => c.toUpperCase());
			$('.caps').val(capitalStr);

		});
		$(document).ready(function() {
			$("#add_note").on('submit', (function(e) {
				e.preventDefault();
				var fd = new FormData(this);
				$.ajax({
					url: '<?php echo base_url("Customer/save_customer_note") ?>',
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



		function delete_contact(a) {
			// console.log($(a).attr('value'))

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
						url: '<?= base_url('Customer/delete_customer_contact') ?>',
						data: {
							'customer_contact_id': $(a).attr('value'),
						}
					}).then(function(res) {
						var res = $.parseJSON(res);
						if (res.msg_type === 'success') {
							$(a).closest('tr').remove();
							swal.fire('Deleted!', 'Contact has been Deleted.', 'success');
							setTimeout(function() {
								location.reload();
							}, 300);
						} else {
							swal.fire('Error', 'Ops something went wrong', 'error');
						}
					}, function(err) {
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
	<!--ADD STATUS END-->



	<!-- UPDATE CUSTOMER CONTACT -->


	<script>
		function customer_contact_type(id) {

			$('#update_contact_type').modal({
				backdrop: 'static',
				keyboard: false,
				show: true
			});

			// $('#update_contact_type_detail').reset();


			// console.log(id)
			var customer_contact_id = id;
			$('#contact_type_id').val(customer_contact_id)
			$.ajax({
				type: "POST",
				url: '<?php echo base_url("Customer/get_customer_contact") ?>',
				data: {
					customer_contact_id: customer_contact_id
				},
				success: function(res) {
					var res = $.parseJSON(res);

					console.log(res)
					$('#get_data').html(res.html);
					// res = $.parseJSON(res);
					// console.log(res)
					// console.log(res.data.customer_contact_type[0].person_contact_no)
					// $('#person_contact_no').val(res.data.customer_contact_type[0].person_contact_no);
					// $('#person_name').val(res.data.customer_contact_type[0].person_title);
					// $('#person_email').val(res.data.customer_contact_type[0].person_email);
					// $('#contact_type_id').val(res.data.customer_contact_id)
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
						url: '<?php echo base_url("Customer/update_contact_type_detail") ?>',
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

	<!-- UPDATE CUSTOMER CONTACT END -->
</body>

</html>