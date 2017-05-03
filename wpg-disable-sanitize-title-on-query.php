<?php
/*
Plugin Name: WPG Disable Sanitize Title On Query
Description: WPG Disable Sanitize Title On Query
Version: 0.1.0
*/

namespace Globalis\DisableSanitizeTitleOnQuery;

add_filter('sanitize_title', __NAMESPACE__.'\\force_raw_title', 999, 3);

function force_raw_title($title, $raw_title, $context) {
	if($context !== 'query' || is_admin()) {
		return $title;
	} else {
		return $raw_title;
	}
}
