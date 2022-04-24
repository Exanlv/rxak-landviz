<?php

/**
 * @var \Rxak\App\Templating\Pages\ProjectsPage $this
 */

use Rxak\App\Templating\Components\Category;
use Rxak\App\Templating\Components\HeaderBig;

?>

<?= new HeaderBig() ?>

<?php
foreach ($this->categories as $category) {
?>
    <?= new Category($category) ?>
<?php
}
