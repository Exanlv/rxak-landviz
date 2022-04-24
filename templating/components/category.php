<?php

/**
 * @var \Rxak\App\Templating\Components\Category $this
 */

use Rxak\App\Templating\Components\CardGroup;

?>

<div class="px-5 mb-5">
    <div class="container-fluid px-5 text-center">
        <h1><?= $this->category->name ?></h1>

        <?= new CardGroup($this->cards) ?>
    </div>
</div>