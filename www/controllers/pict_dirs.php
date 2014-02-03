<?php
	if(@$_GET['method'] == 'dirname'){
		$title = array(
			'tothkua' => 'TOTHKUA',
			'pitmap' => 'PITMAP',
			'litrokeyboard' => 'LitroKeyboard',
			'common' => 'その他',
		);
		
		foreach($title as $id => $name){
			$info = array();
			$info['id'] = $id;
			$info['title'] = $name;
			$dirs[] = $info;
		}
		echo json_encode($dirs);
	}else if(@$_GET['method'] == 'thumbs'){
		$id = $_GET['id'];
		if(empty($id)){
			echo json_encode(false);
			exit;
		}
		
		// $images = glob(PICT_PATH. $id. '/{*.gif,*.jpg,*.png}', array());
		$images = glob(PICT_PATH. $id. '/*/thumb.jpg');
		$dirs = array();
		foreach($images as $name){
			$info = array();
			$info['id'] = $id;
			$info['src'] = '/pictures/?id='. $id. '&sub='. basename(dirname($name)). '&name='. basename(str_replace(".jpg", "", $name));
			$dirs[] = $info;
		}
		echo json_encode($dirs);
	}
	exit;
?>