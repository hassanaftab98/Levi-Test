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

                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <ul class="nav nav-tabs mt-n3">
                                                    <li class="nav-item">
                                                        <a class="nav-link active " data-toggle="tab" href="#tabItem5"><em class="icon ni ni-user-circle"></em><span>Business Information</span></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link " data-toggle="tab" href="#tabItem6"><em class="icon ni ni-file-text"></em><span>Documents</span></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link " data-toggle="tab" href="#tabItem7"><em class="icon ni ni-notes"></em><span>Admin Notes</span></a>
                                                    </li>

                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tabItem5">

                                                        <!--													<div class="card-inner">-->
                                                        <div class="nk-block">
                                                            <div class="nk-block-head">
                                                                <h5 class="title">Business Details</h5>
                                                                <!-- <?php if (!empty($business_detail['business_logo'])) : ?>
                                                                    <img src="<?= base_url('uploads/business_logos/' . $business_detail['business_logo']); ?>" alt="Company Logo" />
                                                                <?php endif; ?> -->
                                                            </div><!-- .nk-block-head -->
                                                            <div class="profile-ud-list">
                                                                <div class="profile-ud-item">
                                                                    <div class="profile-ud wider">
                                                                        <span class="profile-ud-label">Business Name</span>
                                                                        <span class="profile-ud-value"><?= $business_detail['business_name']; ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-ud-item">
                                                                    <div class="profile-ud wider">
                                                                        <span class="profile-ud-label">Business Email</span>
                                                                        <span class="profile-ud-value"><?= $business_detail['business_email']; ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-ud-item">
                                                                    <div class="profile-ud wider">
                                                                        <span class="profile-ud-label">Contact No</span>
                                                                        <span class="profile-ud-value"><?= $business_detail['business_contact_no'] ?></span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-ud-item">
                                                                    <div class="profile-ud wider">
                                                                        <span class="profile-ud-label">City</span>
                                                                        <span class="profile-ud-value"><?= $business_detail['business_city']; ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-ud-item">
                                                                    <div class="profile-ud wider">
                                                                        <span class="profile-ud-label">State</span>
                                                                        <span class="profile-ud-value"><?= $business_detail['business_state']; ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-ud-item">
                                                                    <div class="profile-ud wider">
                                                                        <span class="profile-ud-label">Zipcode</span>
                                                                        <span class="profile-ud-value"><?= $business_detail['business_zipcode']; ?></span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-ud-item">
                                                                    <div class="profile-ud wider">
                                                                        <span class="profile-ud-label">Business Address</span>
                                                                        <span class="profile-ud-value"><?= $business_detail['business_address']; ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-ud-item">
                                                                    <div class="profile-ud wider">
                                                                        <span class="profile-ud-label">Website</span>
                                                                        <span class="profile-ud-value"><?= $business_detail['business_website']; ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-ud-item">
                                                                    <div class="profile-ud wider">
                                                                        <span class="profile-ud-label">Tax Status</span>
                                                                        <span class="profile-ud-value"><?= $business_detail['tax_status']; ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-ud-item">
                                                                    <div class="profile-ud wider">
                                                                        <span class="profile-ud-label">Tax ID</span>
                                                                        <span class="profile-ud-value"><?= $business_detail['business_tax_id']; ?></span>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .profile-ud-list -->
                                                        </div><!-- .nk-block -->

                                                        <div class="nk-block">
                                                            <div class="nk-block-head nk-block-head-line">
                                                                <h6 class="title overline-title text-base"><b>Package Detail</b></h6>
                                                            </div><!-- .nk-block-head -->

                                                            <div class="profile-ud-list">
                                                                <div class="profile-ud-item">
                                                                    <div class="profile-ud wider">
                                                                        <span class="profile-ud-label">Package Type</span>
                                                                        <span class="profile-ud-value"><?= $subscription['sub_package']; ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-ud-item">
                                                                    <div class="profile-ud wider">
                                                                        <span class="profile-ud-label">Status</span>
                                                                        <?php if ($subscription['status'] == 'active') { ?>
                                                                            <span class="profile-ud-value"><span class="badge badge-success"><?= $subscription['status']; ?> </span> </span>

                                                                        <?php } else { ?>
                                                                            <span class="profile-ud-value"><span class="badge badge-warning"><?= $subscription['status']; ?> </span> </span>


                                                                        <?php } ?>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-ud-item">
                                                                    <div class="profile-ud wider">
                                                                        <span class="profile-ud-label">Start Date</span>
                                                                        <span class="profile-ud-value"><?= $subscription['start_date'] ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-ud-item">
                                                                    <div class="profile-ud wider">
                                                                        <span class="profile-ud-label">End Date</span>
                                                                        <span class="profile-ud-value"><?= $subscription['end_date']; ?></span>
                                                                    </div>
                                                                </div>

                                                            </div><!-- .profile-ud-list -->


                                                        </div><!-- .nk-block -->
                                                        <div class="nk-block">
                                                            <div class="nk-block-head nk-block-head-line">
                                                                <h6 class="title overline-title text-base">Business Contact Information</h6>
                                                            </div><!-- .nk-block-head -->
                                                            <div class="card card-preview animated fadeIn">
                                                                <div class="card-inner">
                                                                    <table class="table">
                                                                        <thead class="thead-dark">
                                                                            <tr>
                                                                                <th scope="col">SNO#</th>
                                                                                <th scope="col">Title</th>
                                                                                <th scope="col">Name</th>
                                                                                <th scope="col">Email</th>
                                                                                <th scope="col">Contact</th>

                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                            <?php for ($i = 0; $i < count($business_contacts); $i++) : ?>
                                                                                <tr>
                                                                                    <th scope="row"> <?= $i + 1; ?> </th>
                                                                                    <td><?= $business_contacts[$i]['person_title']; ?></td>
                                                                                    <td><?= $business_contacts[$i]['person_name']; ?></td>
                                                                                    <td><?= $business_contacts[$i]['person_email']; ?></td>
                                                                                    <td><?= $business_contacts[$i]['person_contact_no']; ?></td>


                                                                                </tr>
                                                                            <?php endfor ?>

                                                                        </tbody>
                                                                    </table>

                                                                </div>
                                                            </div>

                                                            <!-- <div class="profile-ud-item">
																	<div class="profile-ud wider">
																		<span class="profile-ud-label">School Attended</span>
																		<span class="profile-ud-value"><?= $business_detail->school_attended ?></span>
																	</div>
																</div>
																<div class="profile-ud-item">
																	<div class="profile-ud wider">
																		<span class="profile-ud-label">Degree of Interest</span>
																		<span class="profile-ud-value"><?= $business_detail->degree; ?></span>
																	</div>
																</div>
																<div class="profile-ud-item">
																	<div class="profile-ud wider">
																		<span class="profile-ud-label">Program of Interest</span>
																		<span class="profile-ud-value"><?= $business_detail->program; ?></span>
																	</div>
																</div>
																<div class="profile-ud-item">
																	<div class="profile-ud wider">
																		<span class="profile-ud-label">business_detail Date</span>
																		<span class="profile-ud-value"><?= date('M-d-Y h:i:sa', strtotime($business_detail->created_at)); ?></span>
																	</div>
																</div>
																<div class="profile-ud-item">
																	<div class="profile-ud wider">
																		<span class="profile-ud-label">business_detail Status</span>
																		<span class="profile-ud-value">
																	<label class="badge <?= $business_detail->label; ?>"><?= $business_detail->reg_status; ?></label>
																</span>
																	</div>
																</div> -->
                                                        </div><!-- .nk-block -->

                                                    </div>
                                                    <div class="tab-pane" id="tabItem6">



                                                    </div>

                                                    <div class="tab-pane" id="tabItem7">

                                                        <div class="tab-content">
                                                            <div class="nk-block">
                                                                <div class="nk-block-head nk-block-head-sm nk-block-between">
                                                                    <h5 class="title">Admin Note</h5>
                                                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalForm"><em class="icon ni ni-plus-c"></em>&nbsp;Add Note</button>
                                                                </div><!-- .nk-block-head -->
                                                                <div class="bq-note">
                                                                    <?php foreach ($business_notes as $note) : ?>
                                                                        <div class="bq-note-item">
                                                                            <div class="bq-note-text">
                                                                                <p><?= $note->note_description; ?></p>
                                                                            </div>
                                                                            <div class="bq-note-meta">
                                                                                <span class="bq-note-added">Added on <span class="date"><?= date('M, d-Y', strtotime($note->added_at)); ?></span> at <span class="time"><?= date('h:i:sa', strtotime($note->added_at)); ?></span></span>
                                                                                <span class="bq-note-sep sep">|</span>
                                                                                <span class="bq-note-by">By <span><?= $note->added_by; ?></span></span>
                                                                                <button onclick="validate(this)" value="<?= $note->business_note_id; ?>" class="link link-sm link-danger">Delete Note</button>
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
                                                <input type="radio" id="private" value="2" name="customRadio" class="custom-control-input">
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
                            <input type="hidden" name="business_id" value="<?= $business_detail['business_id'];  ?>">
                            <div class="modal-footer bg-light">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button class="btn btn-danger" data-dismiss="modal" aria-label="Close">Close</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /ADD NEW NOTE -->


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
                        url: '<?= base_url('Business/delete_note') ?>',
                        data: {
                            'note_id': id
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
	$(document).ready(function () {
		$("#add_note").on('submit', (function (e) {
			e.preventDefault();
			var fd = new FormData(this);
			$.ajax({
				url: '<?php echo base_url("Business/save_note") ?>',
				data: fd,
				type: "POST",
				contentType: false,
				processData: false,
				cache: false,
				beforeSend: function(){
					imageOverlay('#add_note','show');
				},
				complete:function(data){
					imageOverlay('#add_note','hide');
				},
				success: function (res) {
					var res = $.parseJSON(res);
					if (res.msg_type === 'success') {
						NioApp.Toast(res.message, 'success', {position: 'top-right', icon: 'auto', ui: ''});
						setTimeout(function(){
							location.reload();
							//window.location = res.redirect_link;
						}, 2000);

					} else {
						var temp = res.message.split("<p>");
						var temp2 = temp;
						$.each(temp2, function( index, value ) {
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
<!--ADD STATUS END-->


</body>

</html>