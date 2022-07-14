<?php

declare(strict_types=1);
//MODELS
require __DIR__ . '/Models/Group.php';

//HelperModels
require __DIR__ . '/Models/Helpers/DB_Connector.php';
require __DIR__ . '/Models/Helpers/DBGroupLoader.php';

//CONTROLLERS
require __DIR__ . '/Controllers/DefaultController.php';
require __DIR__ . '/Controllers/GroupController.php';
require __DIR__ . '/Controllers/StudentController.php';
require __DIR__ . '/Controllers/TeacherController.php';
//Symfony Dotenv parses .env files to make environment variables stored in them accessible via $_SERVER or $_ENV.
require_once realpath(__DIR__ . "/vendor/autoload.php");

use Symfony\Component\Dotenv\Dotenv;
//Create dotenv object
$dotenv = new Dotenv();
//Load .env vars into superglobal $_ENV
$dotenv->load(__DIR__ . "/.env");

//Load in the header - Head,Opening of body
require __DIR__ . '/Views/header.php';

$controller = new DefaultController($_POST, $_GET);
if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'student':
            $controller = new StudentController();
            break;
        case 'teacher':
            $controller = new TeacherController();
            break;
        case 'group':
            $controller = new GroupController();
            break;
        default:
            $controller = new DefaultController();
    }
}
$controller->render();
//Load in the footer - Closing of body and document
require __DIR__ . '/Views/footer.php';
