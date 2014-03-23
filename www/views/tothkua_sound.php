		<div class="mainbox">
			<p><a href="http://bitchunk.fam.cx/app/index.html#tothkua">TOTHKUA</a>で使用されているサウンドを載せていく予定です。(※音量注意)</p>
			<div class="soundBox">
<?php foreach($contents as $file){ ?>
					<p>
						<span  class="title" style="vertical-align:middle;"><?php echo $file['title']; ?></span>
						<audio controls src="<?php echo $file['path']; ?>" >音声を再生するには、audioタグをサポートしたブラウザが必要です。</audio>
						<input type="hidden" name="category" value="<?php echo $file['category']; ?>" />
					</p>
<?php } ?>
			</div>
			<div class="introduction">
				<p>★このサウンドはLitroKeyboardで作成しています。</p>
				<a href="http://bitchunk.fam.cx/app/index.html#litrokeyborad"><img src="/images/appicon/ltkbicon_old.png" width="64", height="64"></a>
			</div>
		</div>
