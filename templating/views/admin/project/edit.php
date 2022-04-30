<?php

/**
 * @var \Rxak\App\Templating\Pages\Admin\Project\Edit $this
 */

use Rxak\App\Templating\Components\HeaderBig;
use Rxak\Framework\Logging\Logger;
use Rxak\Framework\Templating\Components\Csrf;
use Rxak\Framework\Templating\Components\Method;

?>

<?= new HeaderBig() ?>

<div class="px-5 mb-5">
    <div class="container-fluid px-5 position-relative pt-5">
        <form method="post" enctype="multipart/form-data" action="/admin/project/<?= $this->project->id ?>">
            <?= new Csrf() ?>
            <?= new Method('PATCH') ?>
            <div class="mb-3">
                <label for="ProjectName" class="form-label">Project name</label>
                <input type="text" class="form-control <?= $this->hasValidationError('name') ? 'is-invalid' : '' ?>" id="ProjectName" name="name" value="<?= $this->project->name ?>">
            </div>
            <div class="mb-3">
                <label for="thumbnail" class="form-label">Thumbnail</label>
                <img src="<?= $this->project->image ?>" class="d-block mb-3" width="200">
                <input type="file" class="form-control" id="thumbnail" accept="image/*" name="thumbnail">
            </div>
            <div class="mb-3">
                <label for="Description" class="form-label">Description</label>
                <textarea class="form-control <?= $this->hasValidationError('description') ? 'is-invalid' : '' ?>" id="Description" name="description"><?= $this->project->description ?></textarea>
            </div>
            <div class="mb-3">
                <label for="Languages" class="form-label">Languages (csv)</label>
                <input type="text" class="form-control <?= $this->hasValidationError('languages') ? 'is-invalid' : '' ?>" id="Languages" name="languages" value="<?= implode(', ', $this->project->languages) ?>">
            </div>
            <div class="mb-3">
                <label for="Languages" class="form-label">Category</label>
                <select class="form-select <?= $this->hasValidationError('languages') ? 'is-invalid' : '' ?>" name="category">
                    <?php
                    /**
                     * @var \Rxak\App\Models\Category $category
                     */
                    foreach ($this->categories as $category) {
                    ?>
                        <option value="<?= $category->id ?>" <?= $category->id === $this->project->category_id ? 'selected' : '' ?>><?= $category->name ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="highlighted" <?= $this->project->highlighted ? 'checked' : '' ?>>
                <label class="form-check-label" for="exampleCheck1">Highlighted</label>
            </div>
            <div class="mb-3 text-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>