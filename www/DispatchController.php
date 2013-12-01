<?php
chdir(dirname(__FILE__));
require_once ('./properties/common.php');
class DispatchController {
	static function dispatch() {
		$uri = $_SERVER['REQUEST_URI'];
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
		self::pageView($name);
		exit ;
	}

	static function notfound() {
		header("HTTP/1.0 404 Not Found");
		exit ;
	}

	static function pageView($name) {
		if (!file_exists(CONTROLLER_PATH . $name . '.php')) {
			$name = 'index';
		}
		require_once (CONTROLLER_PATH . $name . '.php');
		require_once (VIEW_PATH . 'common/header.html');
		if ($name != 'index') {
			require_once (VIEW_PATH . 'common/navigator.html');
		}
		require_once (VIEW_PATH . $name . '.html');
		require_once (VIEW_PATH . 'common/footer.html');
	}

	static function outputMusic($uri) {
		$path = MUSIC_PATH . str_replace(self::$DIRNAME . '/', "", $uri);
		//-music
		if (!file_exists($path)) {
			self::notfound();
			exit ;
		}
		// header("Pragma: public");
		// header("Expires: 0");
		// header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		// header("Cache-Control: public");
		// header("Content-Description: File Transfer");
		header("Content-Type: " . self::$CONTENT_TYPE);
		echo $path;
		exit ;

	}

};
DispatchController::dispatch();
?>