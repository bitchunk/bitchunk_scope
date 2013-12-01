<?
	
	$contents = array();
	$mime = '.mp3';
	$files = glob(MUSIC_PATH. 'tothkua/*'. $mime);
	$titles = array(
		'stage_a' => 'ノボリアガルモノガタリ（STAGE1～5）',
		'option' => 'ジュンビチュウ！！(OPTION MODE)'
	);
	foreach($titles as $file=>$title){
		$path = MUSIC_PATH. 'tothkua/'. $file. $mime;
		if(!file_exists($path)){
			continue;
		}
		
		$contents[] = array('path' => MUSIC_URI. 'tothkua/'. $file, 'title' => $title);
	}
	// foreach($files as $path){
		// $base = basename($path, $mime);
		// $contents[] = array('path' => MUSIC_URI. 'tothkua/'. $base. $mime, 'title' => $titles[$base]);
	// }
?>