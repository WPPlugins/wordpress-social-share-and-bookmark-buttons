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

	$html_to_display .= '<div style="position: relative; top: 0px; left: -5px; width: 76px; height: 80px; font-weight: bold; font-family: arial,helvetica,sans-serif; font-size: 8pt; color: #000000; text-decoration: none;">';


	$html_to_display .= '<img src="http://www.delicious.com/static/img/delicious.small.gif" height="10" width="10" alt="Delicious" style="position: relative; font-weight: bold; top: 30px; left: -4px; font-family: arial,helvetica,sans-serif; font-size: 8pt; color: #000000; text-decoration: none; margin-left: 0px;" /> ';
	$html_to_display .= '<a href="http://www.delicious.com/save" onclick="window.open(\'http://www.delicious.com/save?v=5&noui&jump=close&url=\'+'.$url_to_reference.'+\'&title=\'+'.get_bloginfo("name").', \'delicious\',\'toolbar=no,width=550,height=550\'); return false;" style="position: relative; top: 30px; left: -8px; width: 80px; height: 80px; font-weight: bold; font-family: arial,helvetica,sans-serif; font-size: 8pt; color: #000000; text-decoration: none; margin-left: 3px;"> Delicious !</a>';

	$html_to_display .= '</div>';

	$html_to_display .= '</body>';
	$html_to_display .= '</html>';


  	echo $html_to_display;
}




display_html($data_mysql['social_facebook_wssabb_blog_url']);






?>
