<?php

include 'header.php';
	
function showIndex(){
	global $header;

	echo    '<!DOCTYPE html>
		<html>
		<head>
			<script src="../scripts/search.js"></script>
			'.$header.'
		</head>
		<body>
			<main>
				<section id="search_results"></section>
			</main>
		</body>
		</html>';
	}
?>
