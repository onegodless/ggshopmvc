<?php

require DIR.'views/index.php';
require DIR.'views/singup.php';
require DIR.'models/getarticle.php';
require DIR.'views/article.php';

class Router
{
	public $request;

	function __construct($request){
		$this->request = $request;
	}
	
	public function takePath(){
		global $request;
		$path = $request->getPath();
		switch($path){
			case '/singup':
				showSingup();
				break;
			case '/article':
			    $model_article = getArticle();
			     showArticle($model_article);
			    break;
			default:
				showIndex();
		}
	}

}
?>
