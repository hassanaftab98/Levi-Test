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
                                                    <h5 class="card-title">Add Employee</h5>
                                                </div>
                                                <form action="#" method="POST" id="">
                                                    <div class="row g-4">
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-left">
                                                                        <em class="icon ni ni-user"></em>
                                                                    </div>
                                                                    <input type="text" class="form-control" name="father_name" id="father_name" placeholder="Father's Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-left">
                                                                        <em class="icon ni ni-task"></em>
                                                                    </div>
                                                                    <input type="text" class="form-control" name="nic_no" id="nic_no" placeholder="NIC No">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Gender" name="gender" id="gender">
                                                                        <option value="">Gender</option>
                                                                        <option value="male">Male</option>
                                                                        <option value="female">Female</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-left">
                                                                        <em class="icon ni ni-calendar"></em>
                                                                    </div>
                                                                    <input type="text" class="form-control date-picker" name="dob" id="dob" placeholder="Date Of Birth">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-4">

                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-left">
                                                                        <em class="icon ni ni-user"></em>
                                                                    </div>
                                                                    <input type="number" class="form-control" name="age" id="age" placeholder="Age">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <!--<label class="form-label" for="default-03">Whatsapp Number</label>-->
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-left">
                                                                        <em class="icon ni ni-note-add"></em>
                                                                    </div>
                                                                    <input type="text" class="form-control" name="blood_group" id="blood_group" placeholder="Blood Group">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-left">
                                                                        <em class="icon ni ni-notes"></em>
                                                                    </div>
                                                                    <input type="text" class="form-control" name="remark" id="remark" placeholder="Remark">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-4">

                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <!--<label class="form-label" for="default-03">City</label>-->
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-left">
                                                                        <em class="icon ni ni-calendar"></em>
                                                                    </div>
                                                                    <input type="text" class="form-control date-picker" name="ship_date" id="ship_date" placeholder="M. Ship Date">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <!--<label class="form-label" for="default-03">State</label>-->
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-left">
                                                                        <em class="icon ni ni-cards"></em>
                                                                    </div>
                                                                    <input type="text" class="form-control" name="father_id" id="father_id" placeholder="Father's ID">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <hr size="1" style="width: 100%;">
                                                    <div class="nk-block-head nk-block-head-line">
                                                        <h6 class="title overline-title text-base">Profession</h6>
                                                    </div>

                                                    <div class="row g-4">
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" name="profession" id="profession" placeholder="Profession">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" name="organization" id="organization" placeholder="Organization">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" name="designation" id="designation" placeholder="Designation">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Emp Nature" name="emp_nature" id="emp_nature">
                                                                        <option value="">Emp Nature</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Business Name" name="business_name" id="business_name">
                                                                        <option value="">Business Name</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr size="1" style="width: 100%;">
                                                    <div class="nk-block-head nk-block-head-line">
                                                        <h6 class="title overline-title text-base">Contact (Residential)</h6>
                                                    </div>
                                                    <div class="row g-4">
                                                        <div class="col-sm-2">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-left">
                                                                        <em class="icon ni ni-globe "></em>
                                                                    </div>
                                                                    <input type="text" class="form-control" name="city" id="city" placeholder="City">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-left">
                                                                        <em class="icon ni ni-map-pin"></em>
                                                                    </div>
                                                                    <input type="text" class="form-control" name="town" id="town" placeholder="Town">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-left">
                                                                        <em class="icon ni ni-map-pin"></em>
                                                                    </div>
                                                                    <input type="text" class="form-control" name="area" id="area" placeholder="Area">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-left">
                                                                        <em class="icon ni ni-mobile"></em>
                                                                    </div>
                                                                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-left">
                                                                        <em class="icon ni ni-mail"></em>
                                                                    </div>
                                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-4">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" name="karachi_address" id="karachi_address" placeholder="Karachi Address">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" name="village" id="village" placeholder="Village">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" name="mohallah" id="mohallah" placeholder="Mohallah">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr size="1" style="width: 100%;">
                                                    <div class="nk-block-head nk-block-head-line">
                                                        <h6 class="title overline-title text-base">Qualification</h6>
                                                    </div>
                                                    <div id="dynamictable">
                                                        <div class="row g-4">
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-icon form-icon-left">
                                                                            <em class="icon ni ni-home"></em>
                                                                        </div>
                                                                        <input type="text" class="form-control" name="schood_of_attendent" id="schood_of_attendent" placeholder="School Attendent">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-icon form-icon-left">
                                                                            <em class="icon ni ni-map-pin"></em>
                                                                        </div>
                                                                        <input type="text" class="form-control" name="program" id="program" placeholder="Program">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-icon form-icon-left">
                                                                            <em class="icon ni ni-calendar"></em>
                                                                        </div>
                                                                        <input type="text" class="form-control" name="passed_year" id="yearpicker" placeholder="Passed Year">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="form-group">
                                                                    <a class="btn btn-primary add_more" href="#"><em class="icon ni ni-plus"></em></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr size="1" style="width: 100%;">
                                                    <div class="nk-block-head nk-block-head-line">
                                                        <h6 class="title overline-title text-base">Dependents</h6>
                                                    </div>
                                                    <div id="dependenttable">
                                                        <div class="row g-4">
                                                            <div class="col-sm-2">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">

                                                                        <input type="text" class="form-control" name="dependant_name" id="dependant_name" placeholder="Dependant Name">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">

                                                                        <input type="text" class="form-control" name="relation" id="relation" placeholder="Relation">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">

                                                                        <input type="text" class="form-control date-picker" name="dependant_dob" id="dependant_dob" placeholder="DOB">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">

                                                                        <input type="number" class="form-control" name="dependant_age" id="dependant_age" placeholder="Age">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Gender" name="dependent_gender" id="dependent_gender">
                                                                            <option value="">Gender</option>
                                                                            <option value="male">Male</option>
                                                                            <option value="female">Female</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="form-group">
                                                                    <a class="btn btn-primary add_more_dependant" href="#"><em class="icon ni ni-plus"></em></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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

    <script type="text/javascript">
        var j = 0;
        $(".add_more_dependant").click(function(e) {

            e.preventDefault();

            $("#dependenttable").append(`<div class="row g-4" id="remove_${j}">
            <div class="col-sm-2">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">

                                                                        <input type="text" class="form-control" name="dependant_name" id="dependant_name" placeholder="Dependant Name">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">

                                                                        <input type="text" class="form-control" name="relation" id="relation" placeholder="Relation">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">

                                                                        <input type="text" class="form-control date-picker" name="dependant_dob" id="dependant_dob" placeholder="DOB">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">

                                                                        <input type="number" class="form-control" name="dependant_age" id="dependant_age" placeholder="Age">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Gender" name="dependent_gender" id="dependent_gender_${j}">
                                                                            <option value="">Gender</option>
                                                                            <option value="male">Male</option>
                                                                            <option value="female">Female</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
<div class="col-sm-2">
<div class="form-group">
<a class="btn btn-danger remove_dependent" val="${j}" href="#"><em class="icon ni ni-delete"></em></a>
</div>
</div>
</div>`);
            j++;
                NioApp.Select2('.form-select');
                NioApp.Picker.date('.date-picker');
        });

        $(document).on('click', '.remove_dependent', function(e) {
            e.preventDefault();
            var id = this.getAttribute('val');
            $("#remove_" + id).remove();
        });
    </script>


<script type="text/javascript">
        var i = 0;
        $(".add_more").click(function(e) {

            e.preventDefault();

            $("#dynamictable").append(`<div class="row g-4" id="${i}">
            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-icon form-icon-left">
                                                                            <em class="icon ni ni-home"></em>
                                                                        </div>
                                                                        <input type="text" class="form-control" name="schood_of_attendent" id="schood_of_attendent" placeholder="School Attendent">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-icon form-icon-left">
                                                                            <em class="icon ni ni-map-pin"></em>
                                                                        </div>
                                                                        <input type="text" class="form-control" name="program" id="program" placeholder="Program">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-icon form-icon-left">
                                                                            <em class="icon ni ni-calendar"></em>
                                                                        </div>
                                                                        <input type="text" class="form-control" name="passed_year" id="yearpicker_${i}" placeholder="Passed Year">
                                                                    </div>
                                                                </div>
                                                            </div>
            <div class="col-sm-2">
<div class="form-group">
<a class="btn btn-danger remove" val="${i}" href="#"><em class="icon ni ni-delete"></em></a>
</div>
</div>
</div>`);

$("#yearpicker_"+i).datepicker({
            format: " yyyy", // Notice the Extra space at the beginning
            viewMode: "years",
            minViewMode: "years",
            autoclose: true
        });
            i++;
            
        });

        $(document).on('click', '.remove', function(e) {
            e.preventDefault();
            var id = this.getAttribute('val');
            $("#" + id).remove();
        });
    </script>


    <script>
        $("#yearpicker").datepicker({
            format: " yyyy", // Notice the Extra space at the beginning
            viewMode: "years",
            minViewMode: "years",
            autoclose: true
        });
    </script>





</body>

</html>