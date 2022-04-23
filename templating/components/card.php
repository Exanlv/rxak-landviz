<?php

/**
 * @var \Rxak\App\Templating\Components\Card $this
 */
?>

<div class="col mb-3">
    <div class="card h-100">
        <div class="card-header bg-light">
            <h5 class="card-title"><?= $this->name ?></h5>
        </div>
        <div class="card-body p-5">
            <img src="<?= $this->image ?>" class="card-img" alt="<?= $this->name ?>">
        </div>
        <div class="card-body">
            <p class="card-text"><?= $this->description ?></p>
        </div>
        <div class="card-footer">
            <small class="text-muted">
                <?= (count($this->languages) === 1 ? 'Project language: ' : 'Project languages: ') . implode(', ', $this->languages) ?>
            </small>
        </div>
    </div>
</div>