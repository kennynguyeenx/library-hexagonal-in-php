<?php

declare(strict_types=1);

use Kennynguyeenx\LibraryHexagonal\LibraryHexagonalApplication;
use Slim\App;

/** @var App $app */
try {
    $app = LibraryHexagonalApplication::createApp();
} catch (Exception $e) {
    die($e->getMessage());
}

require ROOT_FOLDER . '/configs/http-routes.php';

return $app;
