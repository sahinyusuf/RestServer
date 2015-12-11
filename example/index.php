<?php

require __DIR__ . '/../source/RestServer.php';
require 'TestController.php';

$server = new \OS\RestServer('debug');
$server->addClass('TestController');
$server->handle();
