<?php

class Request_Info
{

		private $domain;
		private $path;
		private $method;

		function __construct(){
			
			isset($_SERVER['SERVER_NAME'])?$this->domain = $_SERVER['SERVER_NAME']:null;
			isset($_SERVER['PATH_INFO'])?$this->path = $_SERVER['PATH_INFO']:null;
			isset($_SERVER['REQUEST_METHOD'])?$this->method = $_SERVER['REQUEST_METHOD']:null;
		}

		public function getDomain(){
			return $this->domain;
		}
		public function getPath(){
			return $this->path;
		}
		public function getMethod(){
			return $this->method;
		}
}
?>
