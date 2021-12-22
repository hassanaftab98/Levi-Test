
	<?php for ($i = 0; $i < count($package_items); $i++) : ?>
<tr>
	<td><?= $i + 1; ?></td>
	<td><?= $package_items[$i]['item_name'] ?></td>
	<td><?= $package_items[$i]['package_name']; ?></td>
	<td>$<?= $package_items[$i]['item_description']; ?></td>
	<!-- <td><?= date('Y-m-d',strtotime($package_items[$i]['added_at'])); ?></td> -->



</tr>
<?php endfor; ?>