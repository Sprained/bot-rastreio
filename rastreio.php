<?php

require __DIR__ . '/vendor/autoload.php';

use Sprained\Rastreio\Rastreio;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$rastreio = new Rastreio();