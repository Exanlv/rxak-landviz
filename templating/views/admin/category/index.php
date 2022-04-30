<?php

/**
 * @var \Rxak\App\Templating\Pages\Admin\Category\Index $this
 */

use Rxak\App\Templating\Components\HeaderBig;
use Rxak\Framework\Templating\Components\Csrf;
use Rxak\Framework\Templating\Components\Method;

?>

<?= new HeaderBig() ?>

<div class="px-5 mb-5">
    <div class="container-fluid px-5 position-relative pt-5">
        <a href="/admin/category/new" class="position-absolute end-0 top-0">New</a>
        <table class="table text-center">
            <thead>
                <tr class="">
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
                    <tr class="align-middle">
                        <th scope="row"><?= $category->id ?></th>
                        <td><?= $category->name ?></td>
                        <td><?= $category->weight ?></td>
                        <td>
                            <a class="btn btn-outline-dark mx-1 bg-light" href="/admin/category/<?= $category->id ?>">View</a>
                            <a class="btn btn-outline-dark mx-1 bg-light" href="/admin/category/<?= $category->id ?>/edit">Edit</a>
                            <form method="post" class="d-inline-block mx-1" action="/admin/category/<?= $category->id ?>">
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