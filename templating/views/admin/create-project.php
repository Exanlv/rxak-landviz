<?php

/**
 * @var \Rxak\App\Templating\Pages\Admin\CreateProjectPage $this
 */

use Rxak\App\Templating\Components\HeaderBig;

?>

<?= new HeaderBig() ?>

<div class="px-5 mb-5">
    <div class="container-fluid px-5 position-relative pt-5">
        <form method="post" enctype="multipart/form-data" action="/admin/project/new">
            <div class="mb-3">
                <label for="ProjectName" class="form-label">Project name</label>
                <input type="text" class="form-control <?= $this->hasValidationError('name') ? 'is-invalid' : '' ?>" id="ProjectName" name="name">
            </div>
            <div class="mb-3">
                <label for="thumbnail" class="form-label">Thumbnail</label>
                <input type="file" class="form-control" id="thumbnail" accept="image/*" name="thumbnail">
            </div>
            <div class="mb-3">
                <label for="Description" class="form-label">Description</label>
                <textarea class="form-control <?= $this->hasValidationError('description') ? 'is-invalid' : '' ?>" id="Description" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="Languages" class="form-label">Languages (csv)</label>
                <input type="text" class="form-control <?= $this->hasValidationError('languages') ? 'is-invalid' : '' ?>" id="Languages" name="languages">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="highlighted">
                <label class="form-check-label" for="exampleCheck1">Highlighted</label>
            </div>
            <div class="mb-3 text-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>