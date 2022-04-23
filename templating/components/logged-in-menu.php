<?php

/**
 * @var \Rxak\App\Templating\Components\LoggedInMenu $this
 */
?>

<div class="dropdown position-absolute end-0 top-0">
    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
        <?= $this->user->username ?>
    </a>

    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <li><a class="dropdown-item" href="/admin/project">Projects</a></li>
    </ul>
</div>
