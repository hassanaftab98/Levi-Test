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
                                                    <h5 class="card-title">Edit Packages</h5>
                                                </div>
                                                <form action="#" method="POST" id="edit_subscription">
                                                    <div class="row g-4">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?= $subscription_package[0]['sub_package'] ?>">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="Name">Price</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="number" class="form-control" name="price" id="price" placeholder="Price" value="<?= $subscription_package[0]['sub_package_price'] ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Type</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select" name="type" id="type" data-search="on" data-placeholder="Status">

                                                                        <option value="">Select Modules</option>
                                                                        <?php for ($i = 0; $i < count($sub_package_types); $i++) : ?>
                                                                            <option value="<?= $sub_package_types[$i]['sub_package_type_id'];?>" 
                                                                            
                                                                           <?php if ($sub_package_types[$i]['sub_package_type_id']  ==  $subscription_package[0]['sub_package_type']) {
                                                                                                echo 'selected';
                                                                                            }
                                                                                            ?>
                                                                            ><?= $sub_package_types[$i]['type_name']; ?></option>
                                                                        <?php endfor; ?>

                                                                    </select>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Modules</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select" multiple="multiple" name="modules[]" data-placeholder="Select Multiple options">
                                                                        <option value="">Select Modules</option>
                                                                        <?php for ($i = 0; $i < count($modules); $i++) : ?>
                                                                            <option value="<?= $modules[$i]['id']; ?>" <?php for ($j = 0; $j < count($subscription_package[1]); $j++) :
                                                                                                                            if ($subscription_package[1][$j]['module_id']  == $modules[$i]['id']) {
                                                                                                                                echo 'selected';
                                                                                                                            }
                                                                                                                        endfor; ?>><?= $modules[$i]['name']; ?></option>
                                                                        <?php endfor; ?>

                                                                    </select>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="pay-amount-1">Description</label>
                                                                <div class="form-control-wrap">
                                                                    <textarea class="form-control form-control-sm" name="description" id="description" placeholder="Description"><?= $subscription_package[0]['sub_package_details'] ?></textarea>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="package_id" value="<?= $subscription_package[0]['sub_package_id'] ?>">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-primary">Save</button>
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
                <!-- content @e -->
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
        $(document).ready(function() {
            /***phone number format***/

            $("#edit_subscription").keypress(function(e) {
                console.log(e.target.value)
                window.onbeforeunload = function() {
                    if ($("#add_business") !== "") {
                        return "You have made changes on this page that you have not yet confirmed. If you navigate away from this page you will lose your unsaved changes";
                    }
                }
            });
        });
        // var warning = true;
    </script>

    <script>
        $(document).ready(function() {
            $("#edit_subscription").on('submit', (function(e) {
                e.preventDefault();
                var fd = new FormData(this);
                $.ajax({
                    url: '<?php echo base_url("Business/update_subscription_package") ?>',
                    data: fd,
                    type: "POST",
                    contentType: false,
                    processData: false,
                    cache: false,
                    beforeSend: function() {
                        imageOverlay('#edit_subscription', 'show');
                    },
                    complete: function(data) {
                        imageOverlay('#edit_subscription', 'hide');
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

</html>