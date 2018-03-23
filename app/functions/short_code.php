<?php
function th_get_site_url(){
	return get_home_url();
}
add_shortcode('site_urls','th_get_site_url');
?>