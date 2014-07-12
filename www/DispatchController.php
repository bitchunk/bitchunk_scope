<?php
chdir(dirname(__FILE__));
require_once('./properties/common.php');
//ま
class DispatchController {
	static $DEFAULT_CARDSMETA = 'common';
	static $cardsmeta = null;
	static $additionalScripts = array();
	static $donateButton = '';
	static $headerBase = 'common';
	static $breadcrumb = array(array('name' => 'Top', 'link' => '/'));
	
	static function dispatch() {
		$uri = $_SERVER['REQUEST_URI'];
		$get = $_GET;
		$match = array();
		
		preg_match('/\/([^\s\/]*)\/?([^\s\/\?]*)?/', $uri, $match);
		
		if (!empty($match[0])) {
			$separate = explode('/', $uri);
			$name = $match[1];
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
		
//		var_dump($uri, $match);
		
		// $seplen = count($separate);
		// if($seplen - intval(empty($separate[$seplen - 1])) > 2) {
			// self::notfound();
			// exit ;
		// }
		
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
	
	static function appendJS($filename)
	{
		if(!is_array($filename)){
			$filename = array($filename);
		}
		foreach($filename as $file){
			self::$additionalScripts[] = $file;
		}
	}
	
	static function appendBreadCrumb($str, $link){
		array_push(self::$breadcrumb, array('name' => $str, 'link' => $link));
	}
	
	static function outputBreadCrumb(){
		$str = "";
		foreach(self::$breadcrumb as $index=>$row){
			if($index > 0){
				$str .= '&nbsp;➡&nbsp;';
			}
			if($index == count(self::$breadcrumb) - 1){
				$str .= '<span class="breadcrumb">'. $row['name']. '</span>';
			}else{
				$str .= '<a href="'. $row['link']. '" ><span class="breadcrumb">'. $row['name']. '</span></a>';
			}
		}
		return $str;
	}
	


};
DispatchController::dispatch();
?>