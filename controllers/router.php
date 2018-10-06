<?php

include  DIR.'views/index.php';
include DIR.'views/singup.php';

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
			default:
				showIndex();
				
		}
	}

}
?>
