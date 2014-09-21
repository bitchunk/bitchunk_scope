<script type="application/javascript" language="Javascript">
$(function(){
	var offset, win;
	$('.litro_start').click(function(){
		openLitroKeyboard($(this).attr('href') != null ? $(this).attr('href') : "" );
		return false;
	});
	
	function openLitroKeyboard(href)
	{
		var getstr = '<?php echo !empty($paramstr) ? '?'. $paramstr : ''; ?>';
		offset = $('.blackBox').offset();
		// setTimeout(function(){window.open('/app/litrosound<?php echo !empty($paramstr) ? '?'. $paramstr : ''; ?>', '')});
		win = window.open('/app/litrosound' + (getstr != '' ? getstr : href), 'litroWindow', 'width=672,height=512,menubar=no,toolbar=yes,scrollbars=no');
		$('.litro_screen').css({position:'absolute', left: offset.left, top: offset.top})
			.stop().animate({top: '-' + $('.litro_screen').css('height')}, 1280, 'easeInOutElastic')
			;
		win.document.addEventListener('load', 
			function(){
				win.document.body.style = 'overflow:hidden';
			}, false);
			
		$(window).focus(function(){
			if($('.litro_screen').css('position') != 'absolute'){
				return;
			}
			$('.litro_screen').stop().animate({top: offset.top}, 2020, 'swing', function(){
					$(this).css({position:'static', left: 'auto', top: 'auto'});
			});
		});
	}
	
});
// window.onload=function(){
	// focusIFrame();
	// document.getElementsByClassName('focus')[0].addEventListener('click', focusIFrame, true);
// };
// function focusIFrame()
// {
	// var 
	// doc = document.getElementsByTagName('iFrame')[0]
	// ;
	// doc.focus();
// 	
// }


</script>
<div align="center" style="padding-top:30px;">
	<div class="mainbox">
		<div class="plastic_lightGreen" style="padding:16px; ">
			<img class="block_left" src="/images/appicon/ltkbicon.png" width="96" height="96" />
			<ul class="block_left text_left" style="padding:8px; font-weight:bold;">
				<li><span class="font_litroGreen">LitroKeyboard</span>はブラウザで上でDTM・キーボード演奏ができます。</li>
				<li>JavascriptのWebAudioAPI・Canvasを使って動いています。</li>
			</ul>
			<hr class="clear" />
			<br />
			<table style="margin:0 auto; width:90%;">
				<thead>
					<tr style="background:hsl(220, 80%, 10%);"><th>ブラウザ</th><th>mac</th><th>win</th></tr>
				</thead>
<?php foreach($supports as $s){ ?>
				<tr style="background:hsl(240, 80%, 30%);">
					<td><?php echo $s['name']; ?></td><td><?php echo $s['mac']; ?></td><td><?php echo $s['win']; ?></td>
				</tr>
<?php } ?>
			</table>
			<ul class="" style="text-align: left; width:90%; padding:8px; margin:0 auto; ">
				<li class="font_red ok">（確認日時：2014/07/06）</li><br/>
				<li class="font_red ok">その他の環境で動作の可否など通知していただけると助かります。<br/>通知はページ下のSNSボタンでお願いします。</li>
			</ul>
		</div>
		<!-- <p>(キーの反応がなくなったら<span class="focus" style="font-weight:bold; vertical-align:top; cursor:pointer; background: hsl(10, 50%, 20%);">ここ</span>クリックしてみてください)</p> -->
		<div class="sublink plastic_blue" style="margin-top: 16px; padding:8px; 16px;">
			<p class="small" style="margin:8px; font-size:14px; text-align:left;"><span style="">デモ用に曲を打ち込んでみました。</span>（リンク先で起動して再生できます）</p>
			<p><a href="?sound_id=63647&step=22&buff=2048">デモ１起動</a></p>
			<p><a href="./litrokeyboard">通常起動にもどる</a></p>
			<p style="margin:48px auto 0 auto;">▼画像クリックで<span class="font_litroGreen">LitroKeyboard</span>起動▼</p>
		</div>
		<div class="blackBox" style="width:640px; height:480px;">
			<img class="litro_screen litro_start" style="cursor:pointer;" src="/images/common/litro_stay.png" width="640" height="480" />
			<!-- <iframe src="/app/litrosound<?php echo !empty($paramstr) ? '?'. $paramstr : ''; ?>" scrolling="no" width="640" height="480"></iframe> -->
		</div>
		<p style="text-align:center;">操作</p>
<p style="white-space: pre-wrap; line-height: 32px;"><!-- オクターブ変更： ^ (JISキーボード) or  + (USKeyboard)・ - 
決定/Next： > 
キャンセル/Back： < 
モード切り替え/Change Mode： TAB 
再生・停止/start Stop： SPACE 
カーソル移動/Move Cursor： ↑ ・ → ・ ↓ ・ ← 
 + Shift key  More Controll
  --><span class="font_red bold">【詳細はアプリ内のMANUALを参照ください。(不完全)】</span>
</p>			
		<div class="sublink plastic_blue" style="margin: 16px auto; padding:8px; 16px;">
			<h3 class="bold small" style="margin:8px; font-size:14px; text-align:left;">参考資料</p>
			<ul>
				<li class="text_right"><a href="http://www.g200kg.com/">g200kg&nbsp;Music&amp;Software</a></li>
				<li class="text_right" ><a href="http://curtaincall.weblike.jp/portfolio-web-sounder/">WEB&nbsp;SOUNDER</a></li>
				<li class="text_right" ><a href="http://www.html5.jp/">HTML5.JP</a></li>
				<li class="text_right" ><a href="http://www.h2.dion.ne.jp/~defghi/canvasMemo/canvasMemo.htm">canvas要素の基本的な使い方まとめ</a></li>
			</ul>
		</div>
		<div class="sublink plastic_milkyWhite" style="margin: 16px auto; padding:8px; 16px;">
			<h3 class="bold small" style="margin:8px; font-size:14px; text-align:left;">ソースコード</p>
			<ul>
				<li class="text_right"><a href="https://github.com/oshiimizunohuta/litrosound">github</a></li>
				<li class="text_right"><a href="http://jsdo.it/shifta_low/nB2a">jsdo.it</a></li>
			</ul>
		</div>
	</div>
	<div>
		<div class="g-page" data-width="320" data-href="//plus.google.com/u/0/105818193762791602670" data-theme="dark" data-layout="landscape" data-rel="publisher"></div>

<!-- 最後の ウィジェット タグの後に次のタグを貼り付けてください。 -->
		<script type="text/javascript">
			window.___gcfg = {
				lang : 'ja'
			};

			(function() {
				var po = document.createElement('script');
				po.type = 'text/javascript';
				po.async = true;
				po.src = 'https://apis.google.com/js/platform.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(po, s);
			})();
		</script>
	</div>
	<div style="text-align:center; margin:24px; auto;">
		<a href="https://twitter.com/share" class="twitter-share-button" data-text="[PSGなブラウザDTM | キーボード演奏 | LitroKeyboard]" data-via="shiftal_on" data-lang="ja" data-size="large" data-related="shiftal_on" data-hashtags="litrokeyboard">ツイート</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	</div>
</div>
