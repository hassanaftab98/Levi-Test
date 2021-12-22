<div class="form-group">
    <label class="form-label" for="full-name">Item Name</label>
    <div class="form-control-wrap">
        <select class="form-select form-control " data-search="on" data-placeholder="Select Item" name="item_id" id="item_id">
            <option value="">Select Item</option>
            <?php for ($i = 0; $i < count($items); $i++) : ?>
                <option value="<?= $items[$i]['item_id']; ?>" <?php if ($package_items[0]['item_id'] == $items[$i]['item_id']) {
                                                                    echo 'selected';
                                                                } ?>> (<?= $items[$i]['item_name']; ?>)</option>
                <?php endfor; ?>
        </select>
    </div>
</div>

<div class="form-group">
    <label class="form-label" for="email-address">Qty</label>

    <div class="form-control-wrap">
        <input type="text" class="form-control" name="item_qty" id="item_qty" placeholder="Qty" value="<?= $package_items[0]['item_qty'] ?>">
    </div>

</div>