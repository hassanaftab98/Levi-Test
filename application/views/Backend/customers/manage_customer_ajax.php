<div class="card card-preview animated fadeIn">
    <div class="card-inner">
        <table id="tbl" class="table data-table">
            <thead>
                <tr>
                    <th>Sno#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < count($customers); $i++) : ?>
                    <tr>
                        <td><?= $i + 1; ?></td>
                        <td><?= $customers[$i]['customer_first_name'] . ' ' . $customers[$i]['customer_last_name'] ?></td>
                        <td><?= $customers[$i]['customer_primary_email']; ?></td>
                        <td><?= $customers[$i]['customer_primary_contact_no']; ?></td>
                        <td align="center">
                          
                            <a href="<?= base_url('customer/additional-contacts/' . $customers[$i]['customer_id']); ?>" class="btn btn-xs btn-primary"><span class="icon ni ni-contact"></span></a>
                            <a href="<?= base_url('customer/detail/' . $customers[$i]['customer_id']); ?>" class="btn btn-xs btn-info"><span class="icon ni ni-eye"></span></a>
                            <a href="<?= base_url('customer/edit/' . $customers[$i]['customer_id']); ?>" class="btn btn-xs btn-warning"><span class="icon ni ni-edit"></span></a>
                            <!-- <button type="button" data-toggle="modal" data-target="#exampleModal-edit" class="btn btn-xs btn-warning"><span class="icon ni ni-edit"></span></button> -->
							<button type="button" onclick="deleten(this)" value="<?= $customers[$i]['customer_id'] ?>" class="btn btn-xs btn-danger"><span class="icon ni ni-trash"></span></button>
                           
                           
                            <!-- <button type="button" class="btn btn-xs btn-danger"><span class="icon ni ni-trash"></span></button> -->
                        </td>
                    </tr>
                <?php endfor; ?>

            </tbody>
        </table>
    </div>
</div>