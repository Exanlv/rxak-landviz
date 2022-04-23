<?php

/**
 * @var \Rxak\App\Templating\Components\Card $this
 */
?>

<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12" style="padding-bottom: 2em">
    <div class="card project-card">
        <h5 class="card-header"><?= $this->name ?> </h5>
        <div class="project-card-img-container" style="padding: 2em;">
            <img class="card-img project-card-image" src="<?= $this->image ?>" alt="<?= $this->name ?>">
        </div>
        <div class="card-body">
            <p class="card-text"><?= $this->description ?></p>
            <p class="card-text card-text-small"><small class="text-muted"><?= (count($this->languages) === 1 ? 'Project language: ' : 'Project languages: ') . implode(', ', $this->languages) ?></small></p>
        </div>
    </div>
</div>