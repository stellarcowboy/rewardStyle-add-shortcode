function ltk_show_widget($atts) {
	extract(shortcode_atts(array(
	    'user_id'    => '0',
	    'rows'       => '1',
	    'cols'       => '6',
	    'show_frame' => 'true',
	    'padding'    => '0'
	), $atts));
	
	$out = '<div class="ltkwidget-widget" data-rows="'.$rows.'" data-cols="'.$cols.'" data-show-frame="'.$show_frame.'" data-user-id="'.$user_id.'" data-padding="'.$padding.'">
	            <script type="text/javascript" language="javascript">
	                !function(d,s,id){
	                    var e, p = /^http:/.test(d.location) ? \'http\' : \'https\';
	                    if(!d.getElementById(id)) {
	                        e     = d.createElement(s);
	                        e.id  = id;
	                        e.src = p + \'://widgets.rewardstyle.com\' + \'/js/ltkwidget.js\';
	                        d.body.appendChild(e);
	                    }
	                }(document, \'script\', \'ltkwidget-script\');
	                if(typeof(window.__ltkwidget) === \'object\'){
	                    if (document.readyState === \'complete\') {
	                        __ltkwidget.init();
	                    }
	                }
	            </script>
	            <div class="rs-adblock">
	                <img src="//assets.rewardstyle.com/images/search/350.gif" onerror="this.parentNode.innerHTML=\'Turn off your ad blocker to view content\'" />
	                <noscript>Turn on your JavaScript to view content</noscript>
	            </div>
	        </div>';
	return $out;
}
add_shortcode('show_ltk_widget', 'ltk_show_widget');
