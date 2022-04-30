<?php

/**
 * @var \Rxak\App\Templating\Pages\HomePage $this
 */

use Rxak\App\Templating\Components\CardGroup;
use Rxak\App\Templating\Components\HeaderBig;

?>

<?= new HeaderBig() ?>

<div class="px-5 mb-5">
    <div class="container-fluid px-5 text-center">
        <h1>Welcome</h1>
        <p>
            Hey! I'm Max. I started getting into programming late 2016<br>
            <br>
            I'm a backend developer experienced in Javascript, Typescript, PHP, Java, Python and SQL.
            I also know my way around HTML and CSS and some light photo editing.
            As for frameworks, I've worked with Laravel, Angular, Fastify and jQuery.<br>
            <br>
            Check out my GitHub profile <a href="https://github.com/Exanlv" target="_blank">here!</a>
        </p>
    </div>
</div>

<div class="px-5 mb-5">
    <div class="container-fluid px-5 text-center">
        <h1>Highlighted Projects</h1>

        <?= new CardGroup($this->cards) ?>

        <br />

        <a href="/projects">View more</a>
    </div>
</div>

<script src="/assets/snow.js"></script>
