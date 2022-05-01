<?php

/**
 * @var \Rxak\App\Templating\Pages\Admin\Project\Show $this
 */

use Rxak\App\Templating\Components\HeaderBig;

?>

<?= new HeaderBig() ?>

<div class="px-5 mb-5">
    <div class="container-fluid px-5 position-relative pt-5">
        <div class="mb-3">
            <label for="ProjectName" class="form-label">Project name</label>
            <input type="text" class="form-control" id="ProjectName" name="name" value="<?= $this->project->name ?>" disabled>
        </div>
        <div class="mb-3">
            <label for="thumbnail" class="form-label">Thumbnail</label>
            <img src="<?= $this->project->image ?>" class="d-block" width="200">
        </div>
        <div class="mb-3">
            <label for="Description" class="form-label">Description</label>
            <textarea class="form-control" id="Description" name="description" disabled><?= $this->project->description ?></textarea>
        </div>
        <div class="mb-3">
            <label for="Languages" class="form-label">Languages (csv)</label>
            <input type="text" class="form-control" id="Languages" name="languages" value="<?= implode(', ', $this->project->languages) ?>" disabled>
        </div>
        <div class="mb-3">
            <label for="Url" class="form-label">Url</label>
            <input type="text" class="form-control" id="Url" name="url" value="<?= $this->project->url ?>" disabled>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="highlighted" <?= $this->project->highlighted ? 'checked' : '' ?> disabled>
            <label class="form-check-label" for="exampleCheck1">Highlighted</label>
        </div>
    </div>
</div>