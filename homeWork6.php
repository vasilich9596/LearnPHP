<?php
$array =[3,5,2,7,9];
$title = '<h3>Title List </h3>';
$type = '<ul>';
	function nameF($array,$title,$type): string
	{
		$result = $title;
		$result .=$type;
		foreach ($array as $value) {
			$result .='<li>'.$value.'</li>';
		}
		$result .= '</ul>';
		return $result;
	}
	print_r(nameF($array,$title,$type));