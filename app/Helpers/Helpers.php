<?php

if (!function_exists('get_page_from_url')) {

    function get_page_from_url($url)
	{
		$url_components = parse_url($url);
		parse_str($url_components['query'],$params);
		return $params['page'];
	}
}

if (!function_exists('get_imploded_attribute')) {

    function get_imploded_attribute(array $array, $attribute)
	{
		$imploded = [];
		foreach ($array as $item) {
			$imploded[] = $item[$attribute];
		}

		return implode(', ',$imploded);
	}
}
