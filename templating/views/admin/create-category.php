<?php

/**
 * @var \Rxak\App\Templating\Pages\Admin\CreateCategoryPage $this
 */

use Rxak\App\Templating\Components\HeaderBig;

?>

<?= new HeaderBig() ?>
<div class="px-5 mb-5">
    <div class="container-fluid px-5 position-relative pt-5">
        <form method="post" action="/admin/category/new">
            <div class="mb-3">
                <label for="CategoryName" class="form-label">Category name</label>
                <input type="text" class="form-control <?= $this->hasValidationError('name') ? 'is-invalid' : '' ?>" id="CategoryName" name="name">
            </div>
            <div class="mb-3">
                <label for="Weight" class="form-label">Weight</label>
                <input type="number" class="form-control <?= $this->hasValidationError('weight') ? 'is-invalid' : '' ?>" id="Weight" name="weight">
            </div>
            <div class="mb-3 text-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>