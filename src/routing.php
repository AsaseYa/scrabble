<?php

use Src\Controllers\FrontController;
use Src\Controllers\GameController;


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$twigPages = new FrontController();


if ('/' === $urlPath) {
    echo $twigPages->addView('home');
} elseif ('/game' === $urlPath) {
    $gamePage = new GameController();
    echo $gamePage->addGame();
} elseif ('/about' === $urlPath) {
    echo $twigPages->addView('about');
} else {
    header('HTTP/1.1 404 Not Found');
}
