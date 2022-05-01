<?php

/**
 * @var \Rxak\App\Templating\Pages\Admin\Project\Create $this
 */

use Rxak\App\Templating\Components\HeaderBig;
use Rxak\Framework\Templating\Components\Csrf;

?>

<?= new HeaderBig() ?>

<div class="px-5 mb-5">
    <div class="container-fluid px-5 position-relative pt-5">
        <form method="post" enctype="multipart/form-data" action="/admin/project/new">
            <?= new Csrf() ?>
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
            <div class="mb-3">
                <label for="Url" class="form-label">Url</label>
                <input type="text" class="form-control <?= $this->hasValidationError('url') ? 'is-invalid' : '' ?>" id="Url" name="url">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="highlight" name="highlighted">
                <label class="form-check-label" for="highlight">Highlighted</label>
            </div>
            <div class="mb-3">
                <label class="form-label" for="category">Category</label>
                <select class="form-select <?= $this->hasValidationError('languages') ? 'is-invalid' : '' ?>" name="category">
                    <?php
                    /**
                     * @var \Rxak\App\Models\Category $category
                     */
                    foreach ($this->categories as $category) {
                    ?>
                        <option value="<?= $category->id ?>"><?= $category->name ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3 text-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>