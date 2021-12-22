<div class="form-group">
	<label class="form-label" for="full-name">Name</label>
	<div class="form-control-wrap">
		<input type="text" class="form-control" name="name" id="name" value="<?= $package->package_name ?>">
	</div>
</div>
<div class="form-group">
	<label class="form-label" for="email-address">Package Description</label>

	<div class="form-control-wrap">
		<input type="text" class="form-control" name="package_description" id="" placeholder="Description" value="<?= $package->package_description ?>">
	</div>

</div>
<div class="form-group">
	<label class="form-label" for="email-address">Price</label>
	<div class="form-control-wrap">
		<input type="number" class="form-control" name="package_price" id="package_price" value="<?= $package->package_price ?>">
	</div>

</div>
<div class="form-group">
	<label class="form-label" for="gender">Taxable</label>
	<div class="preview-block">
		<div class="custom-control custom-radio">
			<input type="radio" id="yes" value="1" name="package_taxable" class="custom-control-input" <?php if ($package->package_taxable == '1') { ?> checked <?php } ?>>
			<label class="custom-control-label" for="yes">Yes</label>

		</div>

		<div class="custom-control custom-radio" style="margin-left: 10px;">
			<input type="radio" id="no" value="0" name="package_taxable" class="custom-control-input" <?php if ($package->package_taxable == '0') { ?> checked <?php } ?>>
			<label class="custom-control-label" for="no">No</label>

		</div>
	</div>
</div>

<input type="hidden" name="package_id" value="<?= $package->package_id ?>" />