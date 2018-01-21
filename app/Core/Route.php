<?php
namespace App\Core; 
use App\Core\View;
/**
* route
*/
class Route
{
	static private $uri = array();
	static private $_method = array();
	static private $count = -1;
	function __construct(){
		
	}

	// add route
	public static function add($uri, $method = null)
	{	
		self::$count += 1;
		self::$uri += array(
			self::$count => '/' . trim($uri,'/'),
		);
		//var_dump(self::$uri);
		if($method != null){
			// $this->_method[] = $method;
			self::$_method[] = $method;
		}

		
		self::submit();
		return self::$uri = array();

	}

	// run route
	private static function submit()
	{

		
		$uriGetParam = isset($_GET['uri']) ? '/' . $_GET['uri'] : '/';

		$getParam = isset($_GET['param']) ? $_GET['param'] : '';
		//echo $uriGetParam;
		foreach(self::$uri as $key => $value)
		{	

			$value = explode('/', $value);

			$value = '/'.$value[1];

			if(preg_match("#^$value$#", $uriGetParam)){
				//echo $value;	
				
				if(is_string(self::$_method[$key])){
					$useMethod = self::$_method[$key];

					// check controller and function of controller
					if(strpos($useMethod, '::') == true){
						// get name function of controller
						$function = substr( $useMethod,  strpos($useMethod, '::')+2 , strlen($useMethod) );
						
						// get name of controller
						$useMethod = substr( $useMethod,  0 , strlen($useMethod) - strlen($function)-2);
						
						if($getParam == NULL){
							$useMethod = new $useMethod() ;
							$useMethod->$function();
						}else{
							$useMethod = new $useMethod() ;
							$useMethod->$function($getParam);
							
						}
					}else
						new $useMethod() ;
				}else
					call_user_func(self::$_method[$key]);
			}
		}
		
	}


	// compare url server and route register
	
	function getRequestURL(){
		// get name folder project
		$basename =  basename(dirname(dirname(dirname(__FILE__))));
		
		//get url server
		$url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
		$url = substr( $url,  strlen($basename)+1 , strlen($url));
		// echo $url;
		//var_dump(in_array($url, self::$uri));
		if(in_array($url, self::$uri) == false){
			error_reporting(0);
			@ini_set('display_errors', 0);
			$location = 'Location:/'.$basename.'/404.php';
			header($location);
		}else{
			header('Location:');
		}

		return $url;
	}
}






?>
