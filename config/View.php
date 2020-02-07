<?php

class View
{
	public static function render($view,$data=null)
	{   
        if (!is_null($data) && is_array($data)) 
        {
         	
         	 extract($data);
        } 

		require_once(PATH.'/view/'.$view.'.php');
	}
}

?>