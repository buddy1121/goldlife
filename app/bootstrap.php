<?php

require __DIR__ . '/../vendor/autoload.php';

$configurator = new Nette\Configurator;

//$configurator->setDebugMode('23.75.345.200'); // enable for your remote IP
$configurator->setDebugMode('192.168.0.1');
$configurator->enableDebugger(__DIR__ . '/../log');


$configurator->setTempDirectory(__DIR__ . '/../temp');

$configurator->createRobotLoader()
	->addDirectory(__DIR__)
	->register();

$configurator->addConfig(__DIR__ . '/config/config.neon', $configurator::AUTO);
$configurator->addConfig(__DIR__ . '/config/config.local.neon');
$configurator->addConfig(__DIR__ . '/config/config.product.neon');

$container = $configurator->createContainer();

return $container;
