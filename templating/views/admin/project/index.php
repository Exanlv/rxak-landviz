<?php

/**
 * @var \Rxak\App\Templating\Pages\Admin\Project\Index $this
 */

use Rxak\App\Templating\Components\HeaderBig;
use Rxak\Framework\Templating\Components\Csrf;
use Rxak\Framework\Templating\Components\Method;

?>

<?= new HeaderBig() ?>

<div class="px-5 mb-5">
    <div class="container-fluid px-5 position-relative pt-5">
        <a href="/admin/project/new" class="position-absolute end-0 top-0">New</a>
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Project name</th>
                    <th scope="col">Languages</th>
                    <th scope="col">Category</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                /**
                 * @var \Rxak\App\Models\Project $project
                 */
                foreach ($this->projects as $project) {
                ?>
                    <tr class="<?= $project->highlighted ? 'table-warning' : '' ?>">
                        <th scope="row"><?= $project->id ?></th>
                        <td><?= $project->name ?></td>
                        <td><?= implode(', ', $project->languages) ?></td>
                        <td><?= $project->category?->name ?></td>
                        <td>
                            <a class="btn btn-outline-dark mx-1 bg-light" href="/admin/project/<?= $project->id ?>">View</a>
                            <a class="btn btn-outline-dark mx-1 bg-light" href="/admin/project/<?= $project->id ?>/edit">Edit</a>
                            <form method="post" class="d-inline-block mx-1" action="/admin/project/<?= $project->id ?>">
                                <?= new Method('DELETE') ?>
                                <?= new Csrf() ?>
                                <input type="submit" class="btn btn-outline-dark bg-light" value="Delete">
                            </form>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>