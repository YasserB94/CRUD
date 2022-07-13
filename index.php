<?php

declare(strict_types=1);
//MODELS

//CONTROLLERS
require __DIR__ . '/Controllers/defaultController.php';

//Load in the header - Head,Opening of body
require __DIR__ . '/Views/header.php';

$controller = new DefaultController($_POST, $_GET);
if (isset($_GET['page'])) {
    switch ($_GET['page']) {

        default:
            $controller = new DefaultController();
    }
}
$controller->render();
//Load in the footer - Closing of body and document

require __DIR__ . '/Views/footer.php';
