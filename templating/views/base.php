<?php

/**
 * @var \Rxak\App\Templating\Pages\BasePage $this
 */

use Rxak\App\Templating\Components\LoggedInMenu;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Landviz</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom css -->
    <link rel="stylesheet" type="text/css" href="<?= pub('assets/css/fonts.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= pub('assets/css/main.css') ?>">
</head>

<body>
    <div class="container-lg py-4">
        <header class="pb-3 mb-4 border-bottom position-relative">
            <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                <img src="<?= pub('assets/img/logo-gray.svg') ?>" height="32" class="me-3" />
                <span class="fs-4">Landviz.nl</span>
            </a>
            <?= new LoggedInMenu() ?>
        </header>
        
        <?= $this->body ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>