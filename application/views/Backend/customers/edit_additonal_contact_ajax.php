<div class="row g-4">
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-control-wrap">
                <select class="form-select form-control form-control" data-search="on" data-placeholder="Select Type" name="c_type" id="c_type">
                    <option value="">Select Type</option>
                    <?php for ($i = 0; $i < count($types); $i++) : ?>
                        <option value="<?= $types[$i]['customer_contact_type_id'] ?>" 
                        <?php if ($contacts[0]['c_type'] == $types[$i]['customer_contact_type_id']) {
                         echo 'selected';
                        } ?>><?= $types[$i]['customer_contact_type'] ?></option>
                    <?php endfor; ?>
                </select>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-control-wrap">
                <div class="form-icon form-icon-left">
                    <em class="icon ni ni-user"></em>
                </div>
                <input type="text" class="form-control" name="c_name" id="c_name_val" placeholder="Name" value="<?= $contacts[0]['c_name'] ?>">
            </div>
        </div>
    </div>
</div>
<div class="row g-4">
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-control-wrap">
                <div class="form-icon form-icon-left">
                    <em class="icon ni ni-mail"></em>
                </div>
                <input type="text" class="form-control" name="c_email" id="c_email_val" placeholder="Email:" value="<?= $contacts[0]['c_email'] ?>">
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-control-wrap">
                <div class="form-icon form-icon-left">
                    <em class="icon ni ni-call"></em>
                </div>
                <input type="text" class="form-control phone-format" name="c_contact_no" id="c_contact_no_val" placeholder="Contact No:" value="<?= $contacts[0]['c_contact_no'] ?>">
            </div>
        </div>
    </div>
</div>
<div class="row g-4">
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-control-wrap">
                <div class="form-icon form-icon-left">
                    <em class="icon ni ni-map-pin-fill"></em>
                </div>
                <input type="text" class="form-control c_zip" name="c_zip" id="c_zip_val" placeholder="ZipCode" value="<?= $contacts[0]['c_zip'] ?>">
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-control-wrap">
                <div class="form-icon form-icon-left">
                    <em class="icon ni ni-map-pin-fill"></em>
                </div>
                <input type="text" class="form-control c_city" name="c_city" id="c_city_val" placeholder="City" value="<?= $contacts[0]['c_city'] ?>"> 
            </div>
        </div>
    </div>
</div>
<div class="row g-4">
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-control-wrap">
                <div class="form-icon form-icon-left">
                    <em class="icon ni ni-map-pin-fill"></em>
                </div>
                <input type="text" class="form-control c_state" name="c_state" id="c_state_val" placeholder="State" value="<?= $contacts[0]['c_state'] ?>">
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-control-wrap">
                <div class="form-icon form-icon-left">
                    <em class="icon ni ni-map"></em>
                </div>
                <input type="text" class="form-control" name="c_address" id="c_address_val" placeholder="Address" value="<?= $contacts[0]['c_address'] ?>">
            </div>
        </div>
    </div>
</div>


	