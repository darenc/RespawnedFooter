<?php

class RespawnedFooter_Listener {

	public static function templateHook($hookName, &$contents, array $hookParams, XenForo_Template_Abstract $template) {

		switch ($hookName) {
			case 'page_container_breadcrumb_bottom':
				$contents .= <<<EXTRA
<!-- amazon & paypal -->
<div class="smallfont" style="text-align:center">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post"> 
<input type="hidden" name="cmd" value="_xclick"> 
<input type="hidden" name="business" value="daren@chandisingh.com"> 
<input type="hidden" name="item_name" value="Respawned Forums"> 
<input type="hidden" name="item_number" value="1"> 
<input type="hidden" name="no_shipping" value="1"> 
<input type="hidden" name="no_note" value="1"> 

<input type="hidden" name="currency_code" value="GBP"> 
<input type="hidden" name="tax" value="0"> 
<input type="hidden" name="lc" value="GB"> 
<A HREF="http://www.amazon.co.uk/exec/obidos/redirect-home?tag=respawned-21&site=amazon" target="_blank"><IMG SRC="http://www.respawned.co.uk/forums3.6/images/misc/uk_wh_logo2.gif" alt="In Association with Amazon.co.uk" BORDER="0"></A> <input type="image" src="https://www.paypal.com/en_US/i/btn/x-click-but04.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!"> 
</form>
</div> 
EXTRA;
				break;
			case 'footer':
				$contents .= <<<EXTRA
<div style="text-align:center">
<script type="text/javascript"><!--
google_ad_client = "pub-8105094307677865";
google_ad_width = 728;
google_ad_height = 90;
google_ad_format = "728x90_as";
google_ad_type = "text_image";
google_ad_channel ="";
google_color_border = "B4D0DC";
google_color_bg = "ECF8FF";
google_color_link = "0000CC";
google_color_url = "008000";
google_color_text = "6F6F6F";
//--></script> 
<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
</div> 
EXTRA;
				break;
		}
	}
}
