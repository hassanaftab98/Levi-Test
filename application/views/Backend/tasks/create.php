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
												<h5 class="card-title">Create Task</h5>
											</div>
											<form action="#" method="POST" id="create">
												<div class="row g-4">
													<div class="col-sm-6">
														<div class="form-group">
															<div class="form-control-wrap">
																<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Task Type" name="task_type" id="task_type">
																	<option value="">Task Type</option>
																	<?php// for ($i=0; $i<count($customers); $i++): ?>
																		<option value="<?//= $customers[$i]['customer_id']?>"><?//= $customers[$i]['customer_first_name'].' '.$customers[$i]['customer_last_name'] ?></option>
																	<?php //endfor; ?>
																</select>
															</div>
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<div class="form-control-wrap">
																<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Task Priority" name="task_priority" id="task_priority">
																	<option value="">Task Priority</option>
																	<option value="1">Low</option>
																	<option value="2">Medium</option>
																	<option value="3">High</option>
																</select>
															</div>
														</div>
													</div>
												</div>
												<div class="row g-4">
													<div class="col-sm-6">
														<div class="form-group">
															<div class="form-control-wrap">
																<div class="form-icon form-icon-left">
																	<em class="icon ni ni-calendar"></em>
																</div>
																<input type="text" class="form-control date-picker" name="start_date" id="start_date" placeholder="Start Date">
															</div>
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<div class="form-control-wrap">
																<div class="form-icon form-icon-left">
																	<em class="icon ni ni-calendar"></em>
																</div>
																<input type="text" class="form-control date-picker" name="end_date" id="end_date"  placeholder="Deadline">
															</div>
														</div>
													</div>
												</div>
												<div class="row g-4">
													<div class="col-sm-6">
														<div class="form-group">
															<div class="form-control-wrap">
																<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Assign To" name="assign_to" id="assign_to">
																	<option value="">Assign To</option>
																	<option value="1">User 1</option>
																	<option value="2">User 2</option>
																	<option value="3">User 3</option>
																</select>
															</div>
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<div class="form-control-wrap">
																<div class="form-icon form-icon-left">
																	<em class="icon ni ni-notify"></em>
																</div>
																<input type="text" class="form-control date-picker" name="reminder_date" id="reminder_date" placeholder="Set Reminder Date">
															</div>
														</div>
													</div>
												</div>
												<div class="row g-4">
													<div class="col-sm-6">
														<div class="form-group">
															<div class="form-control-wrap">
																<textarea class="form-control form-control-sm" name="appointment_desc" id="cf-default-textarea" placeholder="Appointment details."></textarea>
															</div>
														</div>
													</div>
												</div>
												<hr size="1" style="width: 100%;">

												<div class="row g-4">
													<input type="hidden" name="business_id" value="1" />
													<div class="col-12">
														<div class="form-group">
															<button type="submit" class="btn btn-primary"><span>Save</span></button>
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
		$("#create").on('submit', (function (e) {
			e.preventDefault();
			var fd = new FormData(this);
			$.ajax({
				url: '<?php echo base_url("Appointments/save_appointment") ?>',
				data: fd,
				type: "POST",
				contentType: false,
				processData: false,
				cache: false,
				beforeSend: function(){
					imageOverlay('#create','show');
				},
				complete:function(data){
					imageOverlay('#create','hide');
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
	});
</script>










</body>
</html>
