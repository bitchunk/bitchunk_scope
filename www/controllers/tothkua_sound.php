<?
	
	$contents = array();
	$mime = '.mp3';
	$files = glob(MUSIC_PATH. 'tothkua/*'. $mime);
	$titles = array('stage_a' => '地上へ登り上がる物語');
	foreach($files as $path){
		$base = basename($path, $mime);
		$contents[] = array('path' => MUSIC_URI. 'tothkua/'. $base. $mime, 'title' => $titles[$base]);
	}
?>