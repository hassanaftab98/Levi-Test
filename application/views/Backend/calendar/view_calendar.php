<!DOCTYPE html>
<html lang="zxx" class="js">

<style>
    .custom-menu {
        display: none;
        z-index: 1000;
        position: absolute;
        overflow: hidden;
        border: 1px solid #CCC;
        white-space: nowrap;
        font-family: sans-serif;
        background: #FFF;
        color: #333;
        border-radius: 5px;
        padding: 0;
    }

    /* Each of the items in the list */
    .custom-menu li {
        padding: 8px 12px;
        cursor: pointer;
        list-style-type: none;
        transition: all .3s ease;
        user-select: none;
    }

    .custom-menu li:hover {
        background-color: #DEF;
    }
</style>


<!-- HEAD -->
<?php $this->load->view('backend/includes/head'); ?>
<!-- /HEAD -->

<meta charset='utf-8' />
<link href='<?= base_url() ?>assets/fullcalendar/lib/main.css' rel='stylesheet' />
<script src='<?= base_url() ?>assets/fullcalendar/lib/main.js'></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth'
        });
        calendar.render();
    });
</script>

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
                                                    <h3 class="nk-block-title page-title">View Calendar</h3>

                                                </div><!-- .nk-block-head-content -->
                                            </div><!-- .nk-block-between -->
                                        </div><!-- .nk-block-head -->
                                        <div class="card card-preview animated fadeIn">
                                            <div class="card-inner">

                                                <div class="nk-block-between" style="margin-bottom: 15px;">
                                                    <!-- <div class="nk-block-head-content"> -->
                                                    <!-- <div class="row g-4"> -->
                                                    <div class="col-md-3" style="padding-left: 0;">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <select class="form-select form-control form-control" data-search="on" data-placeholder="Business" name="business" id="business">
                                                                    <option value=""> Select Business </option>
                                                                    <option value="Business 1">Business 1</option>
                                                                    <option value="Business 2">Business 2</option>
                                                                    <option value="Business 3">Business 3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3" style="padding-left: 0;">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <select class="form-select form-control form-control" data-search="on" data-placeholder="Vendor" name="vendor" id="vendor">
                                                                    <option value=""> Select Vendor </option>
                                                                    <!-- <option value="All">All</option> -->
                                                                    <?php for ($i = 0; $i < count($vendor); $i++) : ?>
                                                                        <option value="<?= $vendor[$i]['vendor_id']; ?>"><?= $vendor[$i]['vendor_first_name'] . ' ' . $vendor[$i]['vendor_last_name']  ?></option>
                                                                        <?php ?>
                                                                    <?php endfor; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3" style="padding-left: 0;">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <select class="form-select form-control form-control" data-search="on" data-placeholder="Appointment" name="appointment" id="appointment">
                                                                    <option value=""> Select Business </option>
                                                                    <option value="Appointment 1">Appointment 1</option>
                                                                    <option value="Appointment 2">Appointment 2</option>
                                                                    <option value="Appointment 3">Appointment 3</option>
                                                                    <option value="Appointment 4">Appointment 4</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3" style="padding-left: 0;">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <select class="form-select form-control form-control" data-search="on" data-placeholder="Task" name="task" id="task">
                                                                    <option value=""> Select Business </option>
                                                                    <option value="Task 1">Task 1</option>
                                                                    <option value="Task 2">Task 2</option>
                                                                    <option value="Task 3">Task 3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div><!-- .nk-block-between -->

                                                <div id='calendar'></div>


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



    <!-- ADD TAX TYPE -->
    <div class="modal fade" tabindex="-1" id="modalForm">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Tax Type</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST" id="add_tax_type" class="form-validate is-alter">
                        <div class="form-group">
                            <label class="form-label" for="full-name">Type</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                            </div>
                        </div>
                </div>
                <input type="hidden" name="business_id" value="1">
                <div class="modal-footer bg-light">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button class="btn btn-danger" data-dismiss="modal" aria-label="Close">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /ADD TAX TYPE -->


    <ul class='custom-menu'>
        <li data-action="first">First thing</li>
        <li data-action="second">Second thing</li>
        <li data-action="third">Third thing</li>
    </ul>




    <!-- JavaScript -->


    <!-- JavaScript -->
    <?php $this->load->view('backend/includes/scripts'); ?>
    <!-- /JavaScript -->



    <!-- ADD TAX TYPE -->
    <script>
        $(document).ready(function() {
            $("#add_tax_type").on('submit', (function(e) {
                e.preventDefault();
                var fd = new FormData(this);
                $.ajax({
                    url: '<?php echo base_url("Administration/save_tax_type") ?>',
                    data: fd,
                    type: "POST",
                    contentType: false,
                    processData: false,
                    cache: false,
                    beforeSend: function() {
                        imageOverlay('#add_tax_type', 'show');
                    },
                    complete: function(data) {
                        imageOverlay('#add_tax_type', 'hide');
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

    <!-- Add TAX TYPE -->


    <script type="text/javascript">
        function validate(a) {
            var id = a.value;
            // alert(id)
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
                        url: '<?= base_url('Administration/delete_tax_type') ?>',
                        data: {
                            'tax_status_id': id
                        }
                    }).then(function(res) {
                        var res = $.parseJSON(res);
                        if (res.msg_type === 'success') {
                            $(a).closest('tr').remove();
                            swal.fire('Deleted!', 'Crew has been Deleted.', 'success');
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
                        'Your imaginary file is safe :)',
                        'error'
                    )
                }
            })
        }
    </script>


    <script>
        $(document).ready(function() {


            $('#calendar').fullCalendar({
                selectable: true,
                selectConstraint: {
                    start: $.fullCalendar.moment().subtract(1, 'days'),
                    end: $.fullCalendar.moment().startOf('month').add(1, 'month')
                }
            });
        });

        // Trigger action when the contexmenu is about to be shown
        $('#calendar').bind("contextmenu", function(event) {

            // Avoid the real one
            event.preventDefault();

            // Show contextmenu
            $(".custom-menu").finish().toggle(100).

            // In the right position (the mouse)
            css({
                top: event.pageY + "px",
                left: event.pageX + "px"
            });
        });


        // If the document is clicked somewhere
        $('#calendar').bind("mousedown", function(e) {
            // If the clicked element is not the menu
            if (!$(e.target).parents(".custom-menu").length > 0) {
                // Hide it
                $(".custom-menu").hide(100);
            }
        });


        // If the menu element is clicked
        $(".custom-menu li").click(function() {

            // This is the triggered action name
            switch ($(this).attr("data-action")) {

                // A case for each action. Your actions here
                case "first":
                    $('#modalForm').modal({
                        backdrop: 'static',
                        keyboard: false,
                        show: true
                    });
                    // alert("first");
                    break;
                case "second":
                    alert("second");
                    break;
                case "third":
                    alert("third");
                    break;
            }

        });
    </script>


</body>

</html>