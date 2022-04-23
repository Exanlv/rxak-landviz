<?php

/**
 * @var \Rxak\App\Templating\Pages\LoginPage $this
 */

use Rxak\App\Templating\Components\HeaderBig;
use Rxak\Framework\Session\MessageBag;
use Rxak\Framework\Templating\Components\Csrf;

?>

<?= new HeaderBig() ?>

<div class="px-5 mb-5">
    <div class="container-fluid px-5">
        <h1 class="text-center">Login</h1>

        <?php
        if (MessageBag::getInstance()->exists('landviz.login_error')) {
        ?>
            <div class="alert alert-danger">
                <strong>Error!</strong> <?= MessageBag::getInstance()->get('landviz.login_error') ?>
            </div>
        <?php
        }
        ?>

        <form action="login" method="post">
            <?= new Csrf() ?>
            <label for="#username" class="text-left w-100 font-weight-bold">Username:</label>
            <input class="form-control" type="text" name="username" id="username" placeholder="Username">
            <br>
            <label for="#password" class="text-left w-100 font-weight-bold">Password:</label>
            <input class="form-control" type="password" name="password" id="password" placeholder="Password">
            <br>
            <input class="form-control btn btn-success" type="submit" value="Login">
        </form>
    </div>
</div>