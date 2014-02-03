<?php
chdir(dirname(__FILE__));
require_once ('./properties/common.php');
class DispatchController {
	static $DEFAULT_CARDSMETA = 'common';
	static $cardsmeta = null;
	
	static function dispatch() {
		$uri = $_SERVER['REQUEST_URI'];
		$get = $_GET;
		if (!empty($uri)) {
			$separate = explode('/', $uri);
			$name = $separate[1];
			// 0: '/'
		} else {
			$name = 'index';
		}
		if (empty($name)) {
			$name = 'index';
		}
		
		if(!empty($get['app'])){
			$name = $get['app'];
			self::appView($name);
			exit ;
			
		}
		
		if (count($separate) > 2) {echo $uri;
			self::notfound();
			exit ;
		}
		
		// switch($name) {
			// case 'css' :
				// self::cssView($uri);
				// break;
			// case 'images' :
				// self::imageView($uri);
				// break;
			// case 'music' :
				// self::outputMusic($uri);
			// default :
				// self::pageView($name);
		// }
		
		$info = parse_url($name);
		self::pageView($info['path']);
		exit ;
	}

	static function notfound() {
		header("HTTP/1.0 404 Not Found");
		exit ;
	}
	
	static function appView($name){
		if (file_exists(CONTROLLER_PATH . $name . '.php')) {
			require_once (CONTROLLER_PATH . $name . '.php');
		}
		if (!file_exists(APP_PATH. $name)) {
			self::pageView('index');
		}
		require_once (APP_PATH. $name. '/index.php');
	}

	static function pageView($name) {
		if (!file_exists(CONTROLLER_PATH . $name . '.php')) {
			$name = 'index';
		}
		require_once (CONTROLLER_PATH . $name . '.php');
		require_once (VIEW_PATH . 'common/header.php');
		if ($name != 'index') {
			require_once (VIEW_PATH . 'common/navigator.php');
		}
		require_once (VIEW_PATH . $name . '.php');
		require_once (VIEW_PATH . 'common/footer.php');
	}


};
DispatchController::dispatch();
?>