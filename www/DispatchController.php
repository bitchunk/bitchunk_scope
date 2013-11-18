<?php
chdir(dirname(__FILE__));
require_once('./properties/common.php');
class DispatchController
{
	static function dispatch()
	{
		$uri = $_SERVER['REQUEST_URI'];
		if(!empty($uri)){
			$separate = explode('/', $uri);
			$name = $separate[1];  // 0: '/'
		}else{
			$name = 'index';
		}
		if(empty($name)){
			 $name =  'index';
		}
		
		if(count($separate) > 2){
			self::notfound();exit;
		}
		
		// switch($name){
			// case 'css': self::cssView($uri); break;
			// case 'images': self::imageView($uri); break;
			// default: self::pageView($name);
		// }
		self::pageView($name);
		
	}
	
	static function notfound()
	{
		header("HTTP/1.0 404 Not Found");
		exit;
	}
	
	static function pageView($name)
	{
		if(!file_exists(CONTROLLER_PATH. $name. '.php')){
			$name = 'index';
		}
		require_once(CONTROLLER_PATH. $name. '.php');
		require_once(VIEW_PATH. 'common/header.html');
		if($name != 'index'){
			require_once(VIEW_PATH. 'common/navigator.html');
		}
		require_once(VIEW_PATH. $name. '.html');
		require_once(VIEW_PATH. 'common/footer.html');
	}

};
DispatchController::dispatch();

?>