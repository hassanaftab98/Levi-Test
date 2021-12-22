
	<?php for ($i = 0; $i < count($paid_invoice); $i++) : ?>
<tr>
	<td><?= $i + 1; ?></td>
	<td><?= $paid_invoice[$i]['invoice_no'] ?></td>
	<td><?= $paid_invoice[$i]['method_name']; ?></td>
	<td>$<?= $paid_invoice[$i]['paid_amount']; ?></td>
	<td><?= date('Y-m-d',strtotime($paid_invoice[$i]['added_at'])); ?></td>
	<td>
	<button type="button" onclick="delete_paid_invoice(<?= $paid_invoice[$i]['payment_id']; ?>, <?= $paid_invoice[$i]['invoice_id']; ?>)" class="btn btn-xs btn-danger"><span class="icon ni ni-trash"></span></button>
	</td>


</tr>
<?php endfor; ?>

