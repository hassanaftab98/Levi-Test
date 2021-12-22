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

                <?php for ($i = 0; $i < count($vendor); $i++) : ?>
                    <tr>
                        <td><?= $i + 1; ?></td>
                        <td><?= $vendor[$i]['vendor_first_name'] . ' ' . $vendor[$i]['vendor_last_name']  ?></td>
                        <td><?= $vendor[$i]['vendor_primary_email']; ?></td>
                        <td><?= $vendor[$i]['vendor_primary_contact_no']; ?></td>
                        <td><?= $vendor[$i]['crew_type']; ?></td>

                        <td align="center">
                            <a href="<?= base_url('vendor/price-list/' . $vendor[$i]['vendor_id']) ?>" class="btn btn-xs btn-success"><span class="icon ni ni-plus"></span></a>
                            <a href="<?= base_url('vendor/detail/' . $vendor[$i]['vendor_id']) ?>" class="btn btn-xs btn-info"><span class="icon ni ni-eye"></span></a>
                            <a href="<?= base_url('vendor/edit/' . $vendor[$i]['vendor_id']) ?>" class="btn btn-xs btn-warning"><span class="icon ni ni-edit"></span></a>
                            <button type="button" onclick="validate(this)" value="<? //= $menu_items[$i]['id']; 
                                                                                    ?>" class="btn btn-xs btn-danger"><span class="icon ni ni-trash"></span></button>
                        </td>
                    </tr>

                <?php endfor; ?>

            </tbody>
        </table>
    </div>
</div><!-- .card-preview -->