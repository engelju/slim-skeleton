<?php
/**
 * @author    Julie Engel <entwicklung@metanet.ch>
 * @copyright Copyright (c) 2015, METANET AG
 */

session_start();

/**
 * Check and include composers autoload.php
 */
$autoloadFile = __DIR__ . '/../vendor/autoload.php';

if (file_exists($autoloadFile) === false)
	die('Please run "composer install" first');

require_once $autoloadFile;

/**
 * Boot up the slim framework
 */
$app = new \Slim\Slim([
	'view' => new Slim\Views\Twig()	
]);

$view = $app->view();
$view->setTemplatesDirectory(__DIR__ . '/views');
$view->parserExtensions = [
	new Slim\Views\TwigExtension()	
];

require_once __DIR__ . '/routes.php';