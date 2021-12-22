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
                                                    <h3 class="nk-block-title page-title">Manage Package Items</h3>

                                                </div><!-- .nk-block-head-content -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalForm"><em class="icon ni ni-plus"></em></button>
                                            </div><!-- .nk-block-between -->
                                        </div><!-- .nk-block-head -->
                                        <div class="card card-preview animated fadeIn">
                                            <div class="card-inner">
                                                <table class="datatable-init table">
                                                    <thead>
                                                        <tr>
                                                            <th>Sno#</th>
                                                            <th>Package</th>
                                                            <th>Item</th>
                                                            <th>Item Des</th>
                                                            <th>Quantity</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <?php for ($i = 0; $i < count($package_items); $i++) : ?>

                                                            <tr>
                                                                <td><?= $i + 1; ?></td>

                                                                <td><?= $package_items[$i]['package_name'] ?> </td>
                                                                <td><?= $package_items[$i]['item_name'] ?> </td>
                                                                <td><?= $package_items[$i]['item_description'] ?> </td>
                                                                <td><?= $package_items[$i]['item_qty'] ?> </td>

                                                                <td>
                                                                    <a onclick="get_package_item_byId(<?= $package_items[$i]['package_item_id'] ?>)" class="btn btn-xs btn-warning"><span class="icon ni ni-edit"></span></a>
                                                                    <button type="button" class="btn btn-xs btn-danger"><span class="icon ni ni-trash"></span></button>
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



    <!-- ADD Item in PACKAGE -->
    <div class="modal fade" tabindex="-1" id="modalForm">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Package Item</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST" id="add_package_item" class="form-validate is-alter">
                        <div class="form-group">
                            <label class="form-label" for="full-name">Item Name</label>
                            <div class="form-control-wrap">
                                <select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Select Item" name="item_id" id="item_id">
                                    <option value="">Select Item</option>
                                    <?php for ($i = 0; $i < count($items); $i++) : ?>
                                        <option value="<?= $items[$i]['item_id']; ?>"> (<?= $items[$i]['item_name']; ?>)</option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email-address">Qty</label>

                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="item_qty" id="item_qty" placeholder="Qty">
                            </div>

                        </div>
                     
                    <input type="hidden" name="package_id" value="<?= $package_id; ?>" >
                </div>
                <div class="modal-footer bg-light">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button class="btn btn-danger" data-dismiss="modal" aria-label="Close">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /ADD Item in PACKAGE -->


    <!-- EDIT Item in PACKAGE -->
    <div class="modal fade" tabindex="-1" id="update_package_item_model">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Package_item</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST" id="update_package_detail" class="form-validate is-alter">
                        <div id="get_data">

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
    <!-- /EDIT Item in PACKAGE -->




    <!-- JavaScript -->


    <!-- JavaScript -->
    <?php $this->load->view('backend/includes/scripts'); ?>
    <!-- /JavaScript -->


    
<script>
		$(document).ready(function() {
			$("#add_package_item").on('submit', (function(e) {
				e.preventDefault();
				var fd = new FormData(this);
				$.ajax({
					url: '<?php echo base_url("Administration/add_package_item") ?>',
					data: fd,
					type: "POST",
					contentType: false,
					processData: false,
					cache: false,
					beforeSend: function() {
						imageOverlay('#add_package_item', 'show');
					},
					complete: function(data) {
						imageOverlay('#add_package_item', 'hide');
					},
					success: function(res) {
						var res = $.parseJSON(res);
						if (res.msg_type == 'success') {
							NioApp.Toast(res.message, 'success', {
								position: 'top-right',
								icon: 'auto',
								ui: ''
							});
							setTimeout(function() {
								location.reload();
								// window.location = res.redirect_link;
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
		});
	</script>





<script>
	function get_package_item_byId(id)
	{

		$('#update_package_item_model').modal({
			backdrop: 'static',
			keyboard: false,
			show: true
		});

		var package_item_id = id;
		$.ajax({
			type: "POST",
			url: '<?php echo base_url("Administration/get_package_item") ?>',
			data: {package_item_id : package_item_id},
			success: function (res) {
                $('#get_data').html(res);
			},
			error: function (xhr) {
				$("#msg").html("Error: - " + xhr.status + " " + xhr.statusText);
			}
		});

		$(document).ready(function () {
		$("#update_package_detail").on('submit', (function (e) {
			e.preventDefault();
			var fd = new FormData(this);
			$.ajax({
				url: '<?php echo base_url("Administration/save_edit_package") ?>',
				data: fd,
				type: "POST",
				contentType: false,
				processData: false,
				cache: false,
				beforeSend: function(){
					imageOverlay('#update_package_detail','show');
				},
				complete:function(data){
					imageOverlay('#update_package_detail','hide');
				},
				success: function (res) {
					var res = $.parseJSON(res);
					if (res.msg_type === 'success') {
						NioApp.Toast(res.message, 'success', {position: 'top-right', icon: 'auto', ui: ''});
						setTimeout(function(){
							window.location = res.redirect_link;
						}, 2000);

					} else {
						$("#msg").html(res);
						NioApp.Toast('<h5>' + res.message + '</h5>', 'error', {position: 'top-right', icon: 'auto', ui: ''});
					}
				},
				error: function (xhr) {
					$("#msg").html("Error: - " + xhr.status + " " + xhr.statusText);
				}
			});
		}));
	});
	}

</script>


</body>

</html>
