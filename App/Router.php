<?php
namespace App;

class Router
{
	public $string ;

	public function setStr($string)
	{
		$this -> string =$string;
	}

	public function getStr()
	{
		return $this -> string;
	}

	function run($string)
	{
		var_export($string);
	}
}
$router = new Router;