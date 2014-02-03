		<div class="mainbox">
			<p>TOTHKUAで使用されているサウンドを載せていく予定です。(※音量注意)</p>
			<div class="soundBox">
<?php foreach($contents as $file){ ?>
				<p><span style="vertical-align:middle;"><?php echo $file['title']; ?></span>
				<audio src="<?php echo $file['path']; ?>"  controls>音声を再生するには、audioタグをサポートしたブラウザが必要です。</audio></p>
<?php } ?>
			</div>
		</div>
