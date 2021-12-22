<!DOCTYPE html>
<html lang="zxx" class="js">



<!-- HEAD -->
<?php $this->load->view('Backend/includes/head'); ?>
<!-- /HEAD -->

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
                                <div class="components-preview">
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head nk-block-head-sm">
                                            <div class="nk-block-between">
                                                <div class="nk-block-head-content">
                                                    <h3 class="nk-block-title page-title">Business Invoices</h3>

                                                </div><!-- .nk-block-head-content -->
                                                <!-- <a href="<?= base_url('business/add-invoice') ?>" class="btn btn-primary">
													<em class="icon ni ni-plus"></em></a> -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalForm"><em class="icon ni ni-plus"></em></button>


                                            </div><!-- .nk-block-between -->
                                        </div><!-- .nk-block-head -->
                                        <div class="card card-preview animated fadeIn">
                                            <div class="card-inner">
                                                <table class="datatable-init table">
                                                    <thead>
                                                        <tr>
                                                            <th>Sno#</th>
                                                            <th>Invoice No</th>
                                                            <th>Due Date</th>
                                                            <th>Invoice Amount</th>
                                                            <th>Credit Amount</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?php for ($i = 0; $i < count($invoices); $i++) : ?>
                                                            <tr>
                                                                <td><?= $i + 1; ?></td>
                                                                <td><a href="#" onclick="get_invoice(<?= $invoices[$i]['invoice_id'] ?>)" data-toggle="modal" data-target="#printInvoice"><?= $invoices[$i]['invoice_no'] ?></a></td>
                                                                <td>$<?= $invoices[$i]['due_date']; ?></td>
                                                                <td>$<?= $invoices[$i]['total']; ?></td>
                                                                <td><?= $invoices[$i]['credit_amount']; ?></td>

                                                                <td><?php if ($invoices[$i]['status'] == 0) { ?>
                                                                        <span class="badge badge-danger">Pending</span>
                                                                    <?php } elseif ($invoices[$i]['status'] == 1) { ?>
                                                                        <span class="badge badge-warning">Partial Paid</span>
                                                                    <?php } else { ?>
                                                                        <span class="badge badge-success">Paid</span>

                                                                    <?php } ?>
                                                                </td>

                                                                <td align="center">
                                                                    <a onclick="get_invoice_detail_byId(<?= $invoices[$i]['invoice_id'] ?>)" data-toggle="modal" data-target="#update_status" class="btn btn-xs btn-warning"><span class="icon ni ni-sign-dollar"></span></a>
                                                                    <a onclick="get_all_paid_invoice(<?= $invoices[$i]['invoice_id'] ?>)" data-toggle="modal" data-target="#get_piad_amount" class="btn btn-xs btn-info"><span class="icon ni ni-eye"></span></a>
                                                                    <!--<a onclick="get_status_byId(<?/*= $invoices[$i]['invoice_id'] */ ?>)" data-toggle="modal" data-target="#update_status" class="btn btn-xs btn-warning"><span class="icon ni ni-edit"></span></a>-->
                                                                    <button type="button" onclick="validate(this)" value="<?= $invoices[$i]['invoice_id']; ?>" class="btn btn-xs btn-danger"><span class="icon ni ni-trash"></span></button>
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

                <div id="append_invoice">

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
    <!-- app-root @e -->
    <!-- JavaScript -->


    <!-- POP INVOICE ON MODEL -->
    <div class="modal fade" tabindex="-1" role="dialog" id="printInvoice">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-header">

                    <h5 class="modal-title">Invoice</h5>

                </div>

                <div class="card card-preview">
                    <div class="card-inner">
                        <div id="append_invoice1">

                        </div>
                    </div>
                </div>


            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- /POP INVOICE ON MODEL -->


    <!-- CREATE INVOICES -->
    <!-- Modal Trigger Code -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalForm">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-header">
                    <h5 class="modal-title">Create Invoice</h5>
                </div>
                <form id="create_invoice" action="#" method="POST" class="form-validate is-alter">
                    <div class="modal-body modal-body-lg">
                        <div class="tab-content" style="margin-top: -3rem;">
                            <div class="tab-pane active" id="personal">
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Package Name<span class="text-danger"></span></label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" name="package_name" id="package_name" value="<?= $active_sub[0]['sub_package'] ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Package Price <span class="text-danger">*</span></label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" name="package_price" id="package_price" value="$<?= $active_sub[0]['sub_package_price'] ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Discount Type </label>
                                            <select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Select Type" name="discount_type" id="discount_type">
                                                <option value="">Select Pakage</option>
                                                <option value="%">Percentage (%)</option>
                                                <option value="$">Fixed Amount ($)</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Discount Value</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" name="discount_value" id="discount_value">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Amount</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" name="amount" id="amount" value="<?= $active_sub[0]['sub_package_price'] ?>" readonly />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Due Date</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control date-picker" name="due_date" id="due_date">
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="business_id" value="<?= $business_id ?>">
                                    <input type="hidden" name="sub_package_id" value="<?= $active_sub[0]['sub_package_id'] ?>">

                                </div>

                            </div><!-- .tab-pane -->
                        </div><!-- .tab-content -->


                    </div><!-- .modal-body -->
                    <div class=" col-12 modal-footer">
                        <button type="submit" class="btn btn-primary mr-1 ">Save</button>
                        <button type="button" data-dismiss="modal" class="btn btn-danger ">Close</button>
                    </div>
                </form>

            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- /CREATE INVOICES -->


    <div class="modal fade" tabindex="-1" role="dialog" id="payinvoice">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-header">
                    <h5 class="modal-title">Add Payment</h5>

                </div>
                <form id="add_payment" action="#" method="POST">
                    <div class="modal-body modal-body-lg">
                        <div class="tab-content" style="margin-top: -3rem;">
                            <div class="tab-pane active" id="personal">
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Invoice No</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" name="invoice_no" id="invoice_no" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Invoice Amount</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" name="total" id="total" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Payment Method<span class="text-danger"></span></label>
                                            <div class="form-control-wrap">
                                                <select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Payment Method" name="payment_method" id="payment_method">
                                                    <option value="">Payment Method</option>
                                                    <?php for ($i = 0; $i < count($payment_methods); $i++) : ?>
                                                        <option value="<?= $payment_methods[$i]['method_id']; ?>"><?= $payment_methods[$i]['method_name']; ?></option>
                                                    <?php endfor; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Amount</label>
                                            <div class="form-control-wrap">
                                                <input type="number" class="form-control" name="amount" id="amount" placeholder="Enter Amount">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Remaining</label>
                                            <div class="form-control-wrap">
                                                <input type="number" class="form-control" name="remaining" id="remaining" readonly>

                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="invoice_id" id="invoice_id">
                                </div>

                            </div><!-- .tab-pane -->
                        </div><!-- .tab-content -->


                    </div><!-- .modal-body -->
                    <div class=" col-12 modal-footer">
                        <button type="submit" class="btn btn-primary mr-1 ">Save</button>
                        <button type="button" data-dismiss="modal" class="btn btn-danger ">Close</button>
                    </div>
                </form> <!-- form -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>



    <div class="modal fade" tabindex="-1" role="dialog" id="get_piad_amount">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-header">
                    <h5 class="modal-title">Get Payments</h5>
                </div>
                <form id="add_payment" action="#" method="POST">

                    <div class="card card-preview">
                        <div class="card-inner">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sno#</th>
                                            <th scope="col">Invoice No</th>
                                            <th scope="col">Paid Method</th>
                                            <th scope="col">Payment Amount</th>
                                            <th scope="col">Paid Date</th>
                                            <th scope="col">Action</th>
                                            

                                        </tr>
                                    </thead>
                                    <tbody id="get_data">


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- .card-preview -->


                    <div class=" col-12 modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-danger ">Close</button>
                    </div>
                </form> <!-- form -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>




    <!-- JavaScript -->
    <?php $this->load->view('Backend/includes/scripts'); ?>
    <!-- /JavaScript -->



    <!-- CREATE INVOICE  -->
    <script>
        $(document).ready(function() {
            $("#create_invoice").on('submit', (function(e) {
                e.preventDefault();
                var fd = new FormData(this);
                $.ajax({
                    url: '<?php echo base_url("Business/create_new_invoice") ?>',
                    data: fd,
                    type: "POST",
                    contentType: false,
                    processData: false,
                    cache: false,
                    beforeSend: function() {
                        imageOverlay('#create_invoice', 'show');
                    },
                    complete: function(data) {
                        imageOverlay('#create_invoice', 'hide');
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
                                location.reload()
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
    <!-- CREATE INVOICE END -->

    <!-- DELETE INVOICE -->
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
                        url: '<?= base_url('Business/delete_invoice') ?>',
                        data: {
                            'invoice_id': id
                        }
                    }).then(function(res) {
                        var res = $.parseJSON(res);
                        console.log(res)
                        if (res.msg_type === 'success') {
                            $(a).closest('tr').remove();
                            swal.fire('Deleted!', 'Invoice has been Deleted.', 'success');
                            setTimeout(function() {
                                location.reload(true);
                            }, 1000);

                        } else {
                            swal.fire('Error', 'Paid and Partial Invoice Cant Delete', 'error');
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
    <!-- DELETE INVOICE END -->

    <!-- ADD -->
    <script>
        console.log($("#discount_type option:selected").text())

        $('#discount_value').change(function(e) {

            var package_price = $('#package_price').val()
            package_price = package_price.replace('$', '');
            var discount_value = $('#discount_value').val();
            // console.log(package_price * 10)
            if ($("#discount_type option:selected").val() == '') {
                $('#discount_value').val("");
                alert('Please Select Discount Type')
            } else {

                if ($("#discount_type option:selected").val() == '%') {
                    var price = (discount_value / 100);
                    var amount = package_price - (price * package_price);
                    // console.log(amount)
                    $('#amount').val(amount)
                } else {
                    var amount = package_price - discount_value
                    $('#amount').val(amount)
                }
            }
        })
    </script>


    <script>
        function get_all_paid_invoice(id) {
            $('#get_piad_amount').modal({
                backdrop: 'static',
                keyboard: false,
                show: true
            })

            var invoice_id = id;
            // alert(invoice_id)
            $.ajax({
                type: "POST",
                url: '<?php echo base_url("Business/get_invoice_detail") ?>',
                data: {
                    invoice_id: invoice_id
                },
                success: function(res) {
                    var res = $.parseJSON(res);
                    console.log(res)
                    $('#get_data').html(res.html);
                },
                error: function(xhr) {
                    $("#msg").html("Error: - " + xhr.status + " " + xhr.statusText);
                }
            });
        }

        function get_invoice(id) {
            $('#printInvoice').modal({
                backdrop: 'static',
                keyboard: false,
                show: true
            })

            // console.log(id);

            $.ajax({
                url: '<?php echo base_url('Business/get_invoice_details') ?>',
                type: 'POST',
                data: {
                    invoice_id: id
                },
                success: function(res) {
                    var res = $.parseJSON(res);
                    $('#append_invoice').html(res.html)
                    $('#append_invoice1').html(res.html)
                },
                error: function(xhr) {
                    alert(xhr)
                }

            })

        }
    </script>

    <script>
        function get_invoice_detail_byId(id) {

            $('#payinvoice').modal({
                backdrop: 'static',
                keyboard: false,
                show: true
            });

            var invoice_id = id;
            $.ajax({
                type: "POST",
                url: '<?php echo base_url("Business/get_invoice") ?>',
                data: {
                    invoice_id: invoice_id
                },
                success: function(res) {
                    var res = $.parseJSON(res);
                    console.log(res)
                    $('#total').val(res.data.get_invoice[0].total)
                    $('#invoice_no').val(res.data.get_invoice[0].invoice_no)
                    $('#invoice_id').val(res.data.invoice_id)

                    // console.log(res.date.remaining_amount[0])
                    if (res.data.remaining_amount[0].invoice_amount == null) {
                        // console.log('amount is null')
                        $('#remaining').val(res.data.get_invoice[0].total)
                    } else {
                        // console.log('fuck your')
                        var total = res.data.remaining_amount[0].invoice_amount;
                        var paid = res.data.remaining_amount[0].paid_amount;
                        console.log(total - paid)
                        if ((total - paid) <= 0) {
                            console.log('amount is null')
                            $('#remaining').val(0)
                        } else {
                            // console.log('fuck your')

                            $('#remaining').val(total - paid)
                        }
                    }

                    // }
                    // $('#get_data').html(res);
                },
                error: function(xhr) {
                    $("#msg").html("Error: - " + xhr.status + " " + xhr.statusText);
                }
            });

        }
    </script>


    <!-- ADD PAYMENT -->
    <script>
        $(document).ready(function() {
            $("#add_payment").on('submit', (function(e) {
                e.preventDefault();
                var fd = new FormData(this);
                $.ajax({
                    url: '<?php echo base_url("Business/add_payment") ?>',
                    data: fd,
                    type: "POST",
                    contentType: false,
                    processData: false,
                    cache: false,
                    beforeSend: function() {
                        imageOverlay('#add_payment', 'show');
                    },
                    complete: function(data) {
                        imageOverlay('#add_payment', 'hide');
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
        });
    </script>
    <!-- ADD PAYMENT END -->



    <!-- DELETE PAID INVOICE  -->

      <script type="text/javascript">
        function delete_paid_invoice(payment_id , invoice_id) {
            // console.log(payment_id , invoice_id ) 
            var payment_id = payment_id;
            var invoice_id = invoice_id;

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
                        url: '<?= base_url('Business/delete_payment_invoice') ?>',
                        data: {
                            'payment_id': payment_id,
                            'invoice_id' : invoice_id
                        }
                    }).then(function(res) {
                        var res = $.parseJSON(res);
                        console.log(res)
                        if (res.msg_type === 'success') {
                            $(a).closest('tr').remove();
                            swal.fire('Deleted!', 'Invoice Payment has been Deleted.', 'success');
                            setTimeout(function() {
                                location.reload(true);
                            }, 1000);

                        } else {
                            swal.fire('Error', 'SomeThing Went Wrong', 'error');
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
<!-- /DELETE PAID INVOICE -->



</body>

</html>