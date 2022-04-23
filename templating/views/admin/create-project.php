<?php

/**
 * @var \Rxak\App\Templating\Pages\Admin\CreateProjectPage $this
 */

use Rxak\App\Templating\Components\HeaderBig;

?>

<?= new HeaderBig() ?>

<div class="px-5 mb-5">
    <div class="container-fluid px-5 position-relative pt-5">
        <form>
            <div class="mb-3">
                <label for="ProjectName" class="form-label">Project name</label>
                <input type="text" class="form-control" id="ProjectName" name="name">
            </div>
            <div class="mb-3">
                <label for="thumbnail" class="form-label">Thumbnail</label>
                <input type="file" class="form-control" id="thumbnail" accept="image/*" name="thumbnail">
            </div>
            <div class="mb-3">
                <label for="Description" class="form-label">Description</label>
                <textarea class="form-control" id="Description" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="Languages" class="form-label">Languages (csv)</label>
                <input type="text" class="form-control" id="Languages" name="languages">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Highlighted</label>
            </div>
            <div class="mb-3 text-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>