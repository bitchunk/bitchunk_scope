<script type="application/javascript" language="Javascript">

window.onload=function(){
	focusIFrame();
	document.getElementsByClassName('focus')[0].addEventListener('click', focusIFrame, true);
};
function focusIFrame()
{
	var 
	doc = document.getElementsByTagName('iFrame')[0]
	;
	doc.focus();
	
}

</script>
<div>
	<div align="center" style="padding-top:30px;">
		<div class="mainbox">
			<p>以前windows用に作ったPSGちっくな音が出るキーボードのブラウザ版が出来上がる予定です。(※音量注意)</p>
			<p>(ならなくなったら<span class="focus" style="font-weight:bold; vertical-align:top; cursor:pointer; background: hsl(10, 50%, 20%);">ここ</span>クリックしてみてください)</p>
			<div>
				<iframe src="/app/litrosound" scrolling="no" width="640" height="480"></iframe>
			</div>
			<p style="text-align:center;">操作</p>
			<p>Tabキー：モード切り替え（TUNE⇔NOTE）</p>
			<p>【TUNEモード】</p>
			<p>カーソルキー：TUNEパラメータの調整</p>
			<p>＜ or ＞ キー：TUNEパラメータのセット</p>
			<p>【NOTEモード】</p>
			<p>カーソルキー：NOTEカーソルの移動</p>
			<p>＞：メニューの決定　／　＜：メニューのキャンセル</p>
			<p>【CATCHモード】</p>
			<p>カーソル←・→キー：NOTEカーソルを次のNOTEをキャッチ</p>
			<p>カーソル↑・↓キー：キャッチの対象を変更</p>
			<p>＞：キャッチを保持　／　＜：キャッチを解放・【NOTEモード】に戻る</p>
			<p>【FILEモード】</p>
			<p>現在COOKIEのみの保存になります。<span style="color:hsl(0, 70%, 70%); font-size:12px;">※容量4kbyte以上は動作保証しかねます。</span></p>
			<p>【共通】</p>
			<p>スペースキー：PLAY・STOP</p>
			<p>－ or ＾(+) キー：オクターブの調整</p>
			<p>[ or ] キー：STEPの調整（デフォルト100ms）</p>
			<p>そのほか：鍵盤</p>
			<p style="text-align:center;">パラメータ（今とりあえず機能しているもの）</p>
			<p>ＶＯＬＵＭ：音量</p>
			<p>ＴＹＰＥ：波形タイプ／０～３：矩形波／４～７：三角波／８～１１：鋸波／１２～１５：ノイズ</p>
		</div>
		<p style="text-align: right;"><a href="https://plus.google.com/105818193762791602670" rel="publisher">Google+</a></p>
	</div>
</div>