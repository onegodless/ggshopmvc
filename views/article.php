<?php

include 'header.php';

function parseDetails($article_details){
    $article_details = json_decode($article_details);
    foreach($article_details as $index){
        foreach($index as $content){
            echo $content . '<br>';
        }
    }
}

function showArticle($article_details){
    
	global $header;
	
	echo '<!DOCTYPE html>
		<html>
		<head>
			<script src="../../scripts/search.js"></script>
            <link rel="stylesheet" type="text/css" href="../../styles/index.css">
			'.$header.'
		</head>
		<body>
			<main>
				<section id="search_results"></section>
                <section id="article_details">';
	           parseDetails($article_details);                
                '</section>
			</main>
		</body>
		</html>';
	}
?>
