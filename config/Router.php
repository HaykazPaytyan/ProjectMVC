<?php

class Router
{

    // Front Controller

	private $_uri;

	public function __construct()
	{
		$this->_uri = rtrim(htmlspecialchars(filter_var($_SERVER['REQUEST_URI'],FILTER_SANITIZE_URL)),'/');
		
	}
	

	public function dispatch()
	{
		require_once(PATH.'/components/RoutesArray.php');

		foreach ($_routes as $pattern => $replacement) {
			 
			 if (preg_match("#$pattern#", $this->_uri, $matches)) {
			 	         
			 	         $stmt = preg_replace("#$pattern#", $replacement, $matches[0]);
                         
                         $stmt = explode('/', $stmt);

                         $controller = ucfirst(array_shift($stmt));

                         $controllerFile = PATH.'/controller/'.$controller.'.php';

                         $object = new $controller;

                         if (file_exists($controllerFile)) {
                                     
                                     require_once($controllerFile);
                         }else{

                         	  require_once(PATH.'/controller/404.php');
                         	  $error404 = new Error404();
                         	  $error404->index();
                         }

                         $action = array_shift($stmt);

                         call_user_func_array(array($object,$action), $stmt);

			 	         break;

			 	      

			 }

		}
	}
}


?>