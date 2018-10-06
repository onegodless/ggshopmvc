<?php
	define ("DIR", dirname(__DIR__).'/');

	include DIR.'controllers/request_info.php';
	include DIR.'controllers/router.php';

	$request = new Request_Info();
	$router = new Router($request);
	$router->takePath();

?>
