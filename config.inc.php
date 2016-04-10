<?php
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

//插件目录常量
define('HEJIN_PATH', $_G['siteurl'].'source/plugin/hejin_toupiao/');
define('HEJIN_ROOT', dirname(__FILE__));
define('HEJIN_URL', $_G['siteurl'].'plugin.php?id=hejin_toupiao');
define('SITE_URL', $_G['siteurl']);
//define('SITE_IP', '114.215.198.57');
$SELF = $_SERVER["PHP_SELF"];
$hejintoupiao = $_G['cache']['plugin']['hejin_toupiao'];
$hejinbox = $_G['cache']['plugin']['hejin_box'];

$formhash = $_G['formhash'];


if($_G['charset']=='gbk'){
	$charset = 'gb2312';
}
elseif($_G['charset']=='utf-8'){
	$charset = 'UTF-8';
}
elseif($_G['charset']=='big5'){
	$charset = 'big5';
}




?>