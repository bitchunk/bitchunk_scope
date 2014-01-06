<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo "bitchunk | ケモノ系創作サイト"; ?></title>

<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Expires" content="Thu, 01 Dec 1994 16:00:00 GMT">

<meta name="description" content="個人創作サイト。オリジナルのケモノキャラクターを中心とする絵、ゲーム、Web開発等総合創作物が置いてあります">
<meta name="keywords" content="ケモノ,いたち,イタチ,鼬" />
<meta name="ROBOTS" content="NOINDEX,NOFOLLOW" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="author" content="しふたろう">

<?php
 if(!empty(DispatchController::$cardsmeta)){
	require_once(VIEW_PATH . 'cardsmeta/'. DispatchController::$cardsmeta. '.html');
}else{
	require_once(VIEW_PATH . 'cardsmeta/'. DispatchController::$DEFAULT_CARDSMETA. '.html');
}
?>

<!-- <meta name="viewport" content="width=device-width; initial-scale=1.0"> -->

<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
<link rel="stylesheet" href="css/common.css" />

<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-46774451-2']);
  _gaq.push(['_setDomainName', 'kemono.jp']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<header>
	<h1>bitchunk</h1>
</header>

