<?php
	self::$cardsmeta = 'litrokeyboard';
	self::$headerBase = 'litrokeyboard';
	self::appendBreadCrumb('LitroKeyboard', '/litrokeyboard');
	
	$paramstr = @http_build_query($_GET, '', '&');
	
	function setButton()
	{
		return 
			'<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
		<input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="hosted_button_id" value="THSWHN2CQE8CJ">
		<table>
		<tr><td><input type="hidden" name="on0" value="LitroKeyboard &#12469;&#12452;&#12531;&#12487;&#12540;&#12479;">LitroKeyboard &#12469;&#12452;&#12531;&#12487;&#12540;&#12479;<select name="os0">
			<option value="(1)&#12514;&#12494;&#12463;&#12525;&#12539;mini">(1)&#12514;&#12494;&#12463;&#12525;&#12539;mini ¥200 JPY</option>
			<option value="(2)&#12514;&#12494;&#12463;&#12525;&#12539;reguler">(2)&#12514;&#12494;&#12463;&#12525;&#12539;reguler ¥500 JPY</option>
			<option value="(3)&#12459;&#12521;&#12540;&#12539;reguler">(3)&#12459;&#12521;&#12540;&#12539;reguler ¥1,000 JPY</option>
			<option value="(4)&#12459;&#12521;&#12540;&#12539;full">(4)&#12459;&#12521;&#12540;&#12539;full ¥5,000 JPY</option>
			<option value="(5)&#12459;&#12521;&#12540;&#12539;mini">(5)&#12459;&#12521;&#12540;&#12539;mini ¥777 JPY</option>
		</select>
		<input type="hidden" name="currency_code" value="JPY">
		<input type="image" src="http://bitchunk.kemono.jp/images/common/button_donate.png" border="0" name="submit" alt="PayPal - オンラインでより安全・簡単にお支払い">
		<input type="hidden" name="charset" value="utf-8">
		<img alt="" border="0" src="https://www.paypalobjects.com/ja_JP/i/scr/pixel.gif" width="1" height="1">
		</td></tr>
		</table></form>
			';
	}
	// self::$donateButton = setButton();
