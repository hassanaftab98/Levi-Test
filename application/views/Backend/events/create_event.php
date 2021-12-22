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
												<h5 class="card-title">Create Event</h5>
											</div>
											<form action="#" method="POST" id="create_event">
												<div class="row g-4">
													<div class="col-sm-3">
														<div class="form-group">
															<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Event Type" name="event_type" id="event_type">
																<option value="">Select Event Type</option>
																<?php for ($i = 0; $i < count($event_types); $i++) : ?>
																	<option value="<?= $event_types[$i]['event_type_id']; ?>"><?= $event_types[$i]['event_type'] ?></option>
																<?php endfor; ?>
															</select>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="form-group">
															<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Select Customer" name="customer_id" id="customer_id">
																<option value="">Select Customer</option>
																<?php for ($i = 0; $i < count($customers); $i++) : ?>
																	<option value="<?= $customers[$i]['customer_id']; ?>"><?= $customers[$i]['customer_first_name'].' '.$customers[$i]['customer_last_name']; ?></option>
																<?php endfor; ?>
															</select>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="form-group">
															<div class="form-control-wrap">
																<div class="form-icon form-icon-left">
																	<em class="icon ni ni-user"></em>
																</div>
																<input type="text" class="form-control" name="event_name" id="event_name" placeholder="Event Name">
															</div>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="form-group">
															<div class="form-control-wrap">
																<div class="form-icon form-icon-left">
																	<em class="icon ni ni-calendar"></em>
																</div>
																<input type="text" class="form-control date-picker" name="event_date" id="event_date" placeholder="Event Date">
															</div>
														</div>
													</div>
												</div>
												<div class="row g-4">
													<div class="col-sm-3">
														<div class="form-group">
															<div class="form-control-wrap">
																<div class="form-icon form-icon-left">
																	<em class="icon ni ni-calendar"></em>
																</div>
																<input type="text" class="form-control" name="hebrew_date" id="hebrew_date" placeholder="Hebrew Date">
															</div>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="form-group">
															<div class="form-control-wrap">
																<div class="form-icon form-icon-left">
																	<em class="icon ni ni-calendar"></em>
																</div>
																<input type="text" class="form-control" name="event_day" id="event_day" placeholder="Event Day">
															</div>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="form-group">
															<div class="form-control-wrap">
																<div class="form-icon form-icon-left">
																	<em class="icon ni ni-clock"></em>
																</div>
																<input type="text" class="form-control" name="event_time" id="event_time" placeholder="Event Time">
															</div>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="form-group">
															<div class="form-control-wrap">
																<div class="form-icon form-icon-left">
																	<em class="icon ni ni-calendar"></em>
																</div>
																<input type="text" class="form-control date-picker" name="end_date" id="end_date" placeholder="End Date">
															</div>
														</div>
													</div>
												</div>
												<div class="row g-4">
													<div class="col-sm-3">
														<div class="form-group">
															<div class="form-control-wrap">
																<div class="form-icon form-icon-left">
																	<em class="icon ni ni-clock"></em>
																</div>
																<input type="text" class="form-control" name="end_time" id="end_time" placeholder="End Time">
															</div>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="form-group">
															<div class="form-control-wrap">
																<div class="form-icon form-icon-left">
																	<em class="icon ni ni-users"></em>
																</div>
																<input type="number" class="form-control" name="number_of_guest" id="number_of_guest" placeholder="Number Of Guest">
															</div>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="form-group">
															<div class="form-control-wrap">
																<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Referred By" name="referred_by" id="referred_by">
																	<option value="">Referred By</option>
																	<?php for ($i = 0; $i < count($customers); $i++) : ?>
																		<option value="<?= $customers[$i]['customer_id'] ?>"> <?= $customers[$i]['customer_first_name'].' '.$customers[$i]['customer_last_name']; ?> </option>
																	<?php endfor; ?>
																</select>
															</div>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="form-group">
															<div class="form-control-wrap">
																<div class="form-icon form-icon-left">
																	<em class="icon ni ni-note-add"></em>
																</div>
																<input type="text" class="form-control" name="event_notes" id="event_notes" placeholder="Notes">
															</div>
														</div>
													</div>
												</div>

												<hr size="1" style="width: 100%;">
												<div class="nk-block-head nk-block-head-line">
													<h6 class="title overline-title text-base">Event Locations</h6>
												</div>
												<div class="row g-4">
														<div class="col-sm-5">
															<div class="form-group">
																<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Select Location" name="location_id" id="location_id">
																	<option value="">Select Location</option>
																	<?php for ($i = 0; $i < count($locations); $i++) : ?>
																		<option value="<?= $locations[$i]['location_id']; ?>"><?= $locations[$i]['location_name'] ?> (<?= $locations[$i]['location_city'] ?>, <?= $locations[$i]['location_state'] ?> - <?= $locations[$i]['location_zipcode'] ?>)</option>
																	<?php endfor; ?>
																</select>
															</div>
														</div>
													    <div class="col-sm-3">
															<div class="form-group">
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-calendar"></em>
																	</div>
																	<input type="text" class="form-control date-picker" name="location_date" id="location_date" placeholder="Location Date">
																</div>
															</div>
													   </div>
													    <div class="col-sm-2">
														<div class="form-group">
															<div class="form-control-wrap">
																<input type="time" class="form-control" name="location_time" id="location_time" placeholder="Location Time">
															</div>
														</div>
													</div>
														<div class="col-sm-2">
															<div class="form-group">
																<a class="btn btn-primary" onclick="add_location()" href="#"><em class="icon ni ni-plus"></em></a>
															</div>
														</div>
													</div>
                                                <div class="row g-4">
													<div class="col-md-12">
														<table id="e_locations" class="table">
															<thead class="thead-dark">
															<tr>
																<th scope="col">ID</th>
																<th scope="col">Location</th>
																<th scope="col">Date</th>
																<th scope="col">Time</th>
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


<!-- GET HEBREW DATE -->
<script>

	$("#event_date").change(function(e){
		var event_date = e.target.value;
		$.ajax({
			type: "POST",
			url: '<?php echo base_url("Event/get_event_hebrew_date") ?>',
			data: {event_date : event_date},
			success: function (res) {
				var res = $.parseJSON(res);
				if (res.data[0] != undefined || res.data.length != 0)
				{
					$('#hebrew_date').val(res.data.hebrew)
					$('#event_day').val(res.data.day)
				}
				else
				{
					$('#hebrew_date').val('')
					$('#event_day').val('')
				}

			}

		});
	});

</script>
<!-- GET HEBREW -->

<!-- ADD LOCATIONS -->
<script type="text/javascript">

	/*======= ADD LOCATION ========*/
	function add_location() {
		var lid = $("#location_id option:selected").val();
		var html  = "";
		var exists = 0;
		var count = 1;
		if(lid == "")
		{
			NioApp.Toast('Select location', 'error', {position: 'top-right', icon: 'auto', ui: ''});
			return false;
		}
		$('#e_locations tbody').find("td.id").each(function(index) {
			//console.log($(this).html());
			if ($(this).html() === lid) {
				exists = 1;
			}
		});


		/*========= LOCATION DATE =========*/
		if($("#location_date").val() == "")
		{
			NioApp.Toast('Select Date', 'error', {position: 'top-right', icon: 'auto', ui: ''});
			return false;
		}

		/*========= LOCATION TIME =========*/
		if($("#location_time").val() == "")
		{
			NioApp.Toast('Select Time', 'error', {position: 'top-right', icon: 'auto', ui: ''});
			return false;
		}


	    html += '<tr>';
		html += '<td class="id">'+ $("#location_id option:selected").val() +'</th>';
		html +=	'<td>'+ $("#location_id option:selected").text() +'</td>';
		html +=	'<td>'+ $("#location_date").val() +'</td>';
		html +=	'<td>'+ $("#location_time").val() +'</td>';
		html +=	'<td><a class="btn btn-xs btn-danger" onclick="removeproduct('+lid+')" href="#"><em class="icon ni ni-trash"></em></a></td>';
		html += '</tr>';


		if (exists !== 1) {
			$("#e_locations tbody").append(html);
			NioApp.Toast('Location added successfully', 'success', {position: 'top-right', icon: 'auto', ui: ''});
		} else {
			swal.fire({
				title: "Location already added!",
				icon: 'warning',
				text: 'If you want to make change in location date & time, please remove and add again.',
				type: "info",
				confirmButtonText: 'OK!'
			});
		}
	}

	/*======= REMOVE FORKLIFT FROM LIST ========*/
	function removeproduct(val) {
		$('#e_locations tbody').find("td.id").each(function(index) {
			if ($(this).html() == val) {
				$(this).closest('tr').remove();
				NioApp.Toast('Location deleted', 'success', {position: 'top-right', icon: 'auto', ui: ''});
			}
		});
	}

	function store_location() {
		var TableData = new Array();
		$('#e_locations tbody tr').each(function(row, tr) {
			TableData[row] = {
				"lid": $(tr).find('td:eq(0)').text()
				, "event_location": $(tr).find('td:eq(1)').text()
				, "date": $(tr).find('td:eq(2)').text()
				, "time": $(tr).find('td:eq(3)').text()
			}
		});
		return TableData;
	}
</script>
<!-- ADD LOCATIONS END -->


<script>
	$(document).ready(function() {

		$('#customer_id').on('change', function (e) {

			var customer_name = $("#customer_id option:selected").text();

			$('#event_name').val(customer_name);

			console.log($("#customer_id option:selected").text())

		})

		$("#create_event").on('submit', (function(e) {
			e.preventDefault();
			var TableData;
			TableData = store_location();
			var customer_id = $("#customer_id").val();
			var event_type = $("#event_type").val();
			var event_title = $('#event_name').val();
			var event_date  = $('#event_date').val();
			var hebrewdate  = $('#hebrew_date').val();
			var event_day   = $('#event_day').val();
			var event_time  = $('#event_time').val();
			var end_date    = $('#end_date').val();
			var end_time    = $('#end_time').val();
			var guests      = $('#number_of_guest').val();
			var referred_by = $('#referred_by').val();
			var notes       = $('#event_notes').val();
			if(TableData.length > 0)
			{
				$.ajax({
					url: '<?php echo base_url("Event/save_event") ?>',
					data: {'data' : TableData,
						'event_type'  : event_type,
						'customer_id' : customer_id,
						'event_title' : event_title,
						'event_date'  : event_date,
						'hebrewdate'  : hebrewdate,
						'event_day'   : event_day,
						'event_time'  : event_time,
						'end_date'    : end_date,
						'end_time'    : end_time,
						'guests'      : guests,
						'referred_by' : referred_by,
						'notes'       : notes
 					},
					type: "POST",
					beforeSend: function() {
						imageOverlay('#create_event', 'show');
					},
					complete: function(data) {
						imageOverlay('#create_event', 'hide');
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
			}
			else {
				NioApp.Toast('Select Date', 'error', {position: 'top-right', icon: 'auto', ui: ''});
			}
		}));

	});
</script>

</body>

</html>
