<?php

/** Following code makes sure that WordPress bootstrap has run before continuing. */
require( $_SERVER["DOCUMENT_ROOT"].'/wp-load.php' );


global $data_mysql;

$data_mysql = get_option('social_facebook_wssabb_name');



function display_html($url_to_reference) {



	$html_to_display = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">'; 
	$html_to_display .= '<html xmlns="http://www.w3.org/1999/xhtml">';
	$html_to_display .= '<head>';
	$html_to_display .= '<title>(Type a title for your page here)</title>';
	$html_to_display .= '<meta name="GENERATOR" content="Arachnophilia 4.0">';
	$html_to_display .= '<meta name="FORMATTER" content="Arachnophilia 4.0">';
	$html_to_display .= '</head>';
	$html_to_display .= '<body>';

	$html_to_display .= '<div style="position: relative; top: 1px; left: 0px; width:76px; height:80px;">';
	$html_to_display .= '<script src="http://platform.linkedin.com/in.js" type="text/javascript"></script>';
	$html_to_display .= '<script type="IN/Share" data-url="'.$url_to_reference.'" data-counter="top"></script>';
	$html_to_display .= '</div>';

	$html_to_display .= '</body>';
	$html_to_display .= '</html>';


  	echo $html_to_display;
}




display_html($data_mysql['social_facebook_wssabb_blog_url']);






?>
