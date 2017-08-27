<?php 
	#error_reporting(E_ALL);
	$link = mysql_connect('127.0.0.1', 'root', '');
#	$link = mysql_connect('localhost', 'co-778.it.3919.c', '9UI6tEwe');
	$db_selected = mysql_select_db('youtube', $link);
#	$db_selected = mysql_select_db('co_778_it_3919_com', $link);
	mysql_query("set names utf8",$link); 
#	mysql_close($link);
 ?>