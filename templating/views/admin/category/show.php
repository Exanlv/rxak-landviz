<?php

/**
 * @var \Rxak\App\Templating\Pages\Admin\Category\Show $this
 */

use Rxak\App\Templating\Components\HeaderBig;

?>

<?= new HeaderBig() ?>
<div class="px-5 mb-5">
    <div class="container-fluid px-5 position-relative pt-5">
        <div class="mb-3">
            <label for="CategoryName" class="form-label">Category name</label>
            <input type="text" class="form-control" id="CategoryName" value="<?= $this->category->name ?>" disabled>
        </div>
        <div class="mb-3">
            <label for="Weight" class="form-label">Weight</label>
            <input type="number" class="form-control" id="Weight" value="<?= $this->category->weight ?>" disabled>
        </div>
    </div>
</div>