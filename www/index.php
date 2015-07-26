<?php

// Uncomment this line if you must temporarily take down your site for maintenance.
// require __DIR__ . '/.maintenance.php';

$container = require __DIR__ . '/../app/bootstrap.php';
define('WWW_DIR', dirname(__FILE__));

$container->getByType('Nette\Application\Application')->run();
