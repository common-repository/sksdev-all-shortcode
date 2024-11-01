<?php
/*
Plugin Name: Sksdev All Shortcode
Plugin URI: http://www.sksdev.com
Description: Allows you to create a div or anchor or Date by using the shortcodes, Date [showdate] and end [end-showdate], start [a] and end [end-a] and start [div] and end [end-div]. To add an id of "foo" and class of "bar", use [div id="foo" class="bar"] and href in anchor like link="any link to redirect", use [a id="foo" class="bar" link="#"].
Author: sksdev
Version: 1.0
Author URI: http://www.sksdev.com
*/


/* Current Date */ 
add_shortcode('showdate', 'sas_showdate_shortcode');
function sas_showdate_shortcode($atts) {
	extract(shortcode_atts(array('class' => '', 'id' => '', 'title' =>'', 'cp'=>'', 'arr' =>'', 'sign' =>''), $atts));
	$return = '<div';
	if (!empty($class)) $return .= ' class="'.$class.'"';
	if (!empty($id)) $return .= ' id="'.$id.'"';
	$return .= '>';
	if (!empty($cp)) $return .= $cp.' ';
	$return .= date('Y') .' ';
	if (!empty($sign)) $return .= $sign .' ';
	if (!empty($title)) $return .= $title .' ';
	if (!empty($sign)) $return .= $sign .' ';
	if (!empty($arr)) $return .= $arr;
	
	return $return;
}

/* Close Date */
add_shortcode('end-showdate', 'sas_end_showdate_shortcode');
function sas_end_showdate_shortcode($atts) {
	return '</div>';
}

/* Open Anchor */ 
add_shortcode('a', 'sas_a_shortcode');
function sas_a_shortcode($atts) {
	extract(shortcode_atts(array('class' => '', 'id' => '', 'link' => '#' ), $atts));
	$return = '<a';
	if (!empty($class)) $return .= ' class="'.$class.'"';
	if (!empty($id)) $return .= ' id="'.$id.'"';
	if (!empty($link)) $return .= ' href="'.$link.'"';	
	$return .= '>';
	return $return;
}


/* Close Anchor */
add_shortcode('end-a', 'sas_end_a_shortcode');
function sas_end_a_shortcode($atts) {
	return '</a>';
}




/* Open Div */ 
add_shortcode('div', 'sas_div_shortcode');
function sas_div_shortcode($atts) {
	extract(shortcode_atts(array('class' => '', 'id' => '' ), $atts));
	$return = '<div';
	if (!empty($class)) $return .= ' class="'.$class.'"';
	if (!empty($id)) $return .= ' id="'.$id.'"';
	$return .= '>';
	return $return;
}

/* Close Div */
add_shortcode('end-div', 'sas_end_div_shortcode');
function sas_end_div_shortcode($atts) {
	return '</div>';
}



?>