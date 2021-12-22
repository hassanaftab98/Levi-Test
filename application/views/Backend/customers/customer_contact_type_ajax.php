<div class="form-group">
    <div class="form-control-wrap">
        <select class="form-select form-control form-control" data-search="on" data-placeholder="Type" name="contact_type" id="contact_type">
            <!-- <option value="">Type</option> -->
            <?php foreach ($contact_types as $row) : ?>
                <option value="<?= $row->contact_type_id; ?>" <?php if ($customer_contact_type[0]['contact_type_id'] === $row->contact_type_id) {
                                                                    echo 'selected';
                                                                } ?>><?= $row->contact_type; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
</div>

<div class="form-group">
    <!-- <label class="form-label" for="full-name">Type</label> -->
    <div class="form-control-wrap">
        <input type="text" class="form-control caps" id="person_title" name="person_title" value="<?= $customer_contact_type[0]['person_name'] ?>" placeholder="Person Title">
    </div>
</div>
<div class="form-group">
    <!-- <label class="form-label" for="full-name">Type</label> -->
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="person_email" name="person_email" value="<?= $customer_contact_type[0]['person_email'] ?>" placeholder="Email">
    </div>
</div>
<div class="form-group">
    <!-- <label class="form-label" for="full-name">Type</label> -->
    <div class="form-control-wrap">
        <input type="text" class="form-control phone-format" id="person_contact_no" name="person_contact_no" value="<?= $customer_contact_type[0]['person_contact_no'] ?>" placeholder="Contact No">
    </div>
</div>