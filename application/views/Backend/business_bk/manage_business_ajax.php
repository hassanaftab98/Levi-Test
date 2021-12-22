<div class="card card-preview animated fadeIn">
    <div class="card-inner">
        <table class="table data-table">
            <thead>
                <tr>
                    <th>Sno#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Vendor Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php for ($i = 0; $i < count($business); $i++) : ?>
                    <tr>
                        <td><?= $i + 1; ?></td>
                        <td><?= $business[$i]['business_name'] ?></td>
                        <td><?= $business[$i]['business_email']; ?></td>
                        <td><?= $business[$i]['business_contact_no']; ?></td>
                        <td><?= $business[$i]['business_website']; ?></td>

                        <td align="center">
                        <a href="<?= base_url('manage/manage-invoices/' . $business[$i]['business_id']) ?>" class="btn btn-xs btn-success" >Inv</span></a>

                        <a href="<?= base_url('manage/subscriptions/' . $business[$i]['business_id']) ?>" class="btn btn-xs btn-success">Subs</span></a>
        
                            <a href="<?= base_url('business/detail/' . $business[$i]['business_id']) ?>" class="btn btn-xs btn-info"><span class="icon ni ni-eye"></span></a>
                            <a href="<?= base_url('business/edit/' . $business[$i]['business_id'])  ?>" class="btn btn-xs btn-warning"><span class="icon ni ni-edit"></span></a>
                            <button type="button" onclick="validate(this)" value="<?= $business[$i]['business_id']; ?>" class="btn btn-xs btn-danger"><span class="icon ni ni-trash"></span></button>
                        </td>
                    </tr>

                <?php endfor; ?>

            </tbody>
        </table>
    </div>
</div><!-- .card-preview -->