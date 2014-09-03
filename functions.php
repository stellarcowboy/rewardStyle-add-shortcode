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

function shopthepost_show_widget($atts) {
    extract(shortcode_atts(array(
        'id'    => '0',
        'adblock'  => 'Turn off your ad blocker to view content',
        'enableJs' => 'Turn on your JavaScript to view content'
    ), $atts));

    $out = '<div class="shopthepost-widget" data-widget-id="'.$id.'">
                <script type="text/javascript" language="javascript">
                    !function(d,s,id){
                        var e, p = /^http:/.test(d.location) ? \'http\' : \'https\';
                        if(!d.getElementById(id)) {
                            e     = d.createElement(s);
                            e.id  = id;
                            e.src = p + \'://widgets.rewardstyle.com/js/shopthepost.js\';
                            d.body.appendChild(e);
                        }
                        if(typeof window.__stp === \'object\') if(d.readyState === \'complete\') {
                            window.__stp.init();
                        }
                    }(document, \'script\', \'shopthepost-script\');
                </script>
                <div class="rs-adblock">
                    <img src="//assets.rewardstyle.com/images/search/350.gif" style="width:15px;height:15px;" onerror="this.parentNode.innerHTML=\''.$enableJs.'\'" />
                    <noscript>'.$adblock.'</noscript>
                </div>
            </div>';
    return $out;
}
add_shortcode('show_shopthepost_widget', 'shopthepost_show_widget');
