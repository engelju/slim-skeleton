<?php
/**
 * @author    Julie Engel <entwicklung@metanet.ch>
 * @copyright Copyright (c) 2015, METANET AG
 */

use jeng\Models\User;

$app->get('/', function() use ($app) {
	$app->render('home.html', [
		'user' => new User()
	]);
});

$app->get('/private', function() {
	echo "piss off!";
});