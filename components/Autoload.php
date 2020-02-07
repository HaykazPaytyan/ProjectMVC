<?php 

function autoload($className)
{
	$classPaths = array('config','controller','model');

	foreach ($classPaths as $key => $paths) {

		 $file = PATH.'/'.$paths.'/'.$className.'.php';

		 if (file_exists($file)) {
		 	       
		 	 require_once($file);
		 }
	}
}


spl_autoload_register('autoload');



?>