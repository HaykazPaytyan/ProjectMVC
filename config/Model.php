<?php 

class Model
{
	public static function create($string)
	{
		$path = PATH.'/model/'.$string.'.php';

		if (file_exists($path)) 
		{
			   
			require_once($path);
		}

		$stmt = new $string(DataBase::connect());
		return $stmt;
	}
}

?>