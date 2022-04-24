<?php

/**
 * @var \Rxak\App\Templating\Pages\Admin\Category\Index $this
 */

use Rxak\App\Templating\Components\HeaderBig;

?>

<?= new HeaderBig() ?>

<div class="px-5 mb-5">
    <div class="container-fluid px-5 position-relative pt-5">
        <a href="/admin/category/new" class="position-absolute end-0 top-0">New</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category name</th>
                    <th scope="col">Weight</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                /**
                 * @var \Rxak\App\Models\Category $category
                 */
                foreach ($this->categories as $category) {
                ?>
                    <tr>
                        <th scope="row"><?= $category->id ?></th>
                        <td><?= $category->name ?></td>
                        <td><?= $category->weight ?></td>
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