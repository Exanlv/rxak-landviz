<?php

/**
 * @var \Rxak\App\Templating\Pages\Admin\ProjectsPage $this
 */

use Rxak\App\Templating\Components\HeaderBig;

?>

<?= new HeaderBig() ?>

<div class="px-5 mb-5">
    <div class="container-fluid px-5 position-relative pt-5">
        <a href="/admin/project/new" class="position-absolute end-0 top-0">New</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Project name</th>
                    <th scope="col">Highlighted</th>
                    <th scope="col">Languages</th>
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
                    <tr>
                        <th scope="row"><?= $project->id ?></th>
                        <td><?= $project->name ?></td>
                        <td><?= $project->highlighted ? 'True' : 'False' ?></td>
                        <td><?= implode(', ', $project->languages) ?></td>
                        <td>
                            <!-- <ul>
                                <li>
                                    <a href="/admin/project/<?= $project->id ?>/edit">Edit</a>
                                    <a href="/admin/project/<?= $project->id ?>/edit">Edit</a>
                                </li>
                            </ul> -->
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>