<?php
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}
$hejintoupiao = $_G['cache']['plugin']['hejin_toupiao'];
	include_once('./source/plugin/hejin_toupiao/TieTuKu.class.php');
	define('MY_ACCESSKEY', $hejintoupiao['hjtp_accessk']);
	define('MY_SECRETKEY', $hejintoupiao['hjtp_secretkey']);
	$tcxcid = $hejintoupiao['hjtp_tcxcid'];

	$picurl = tcupload('https://gd1.alicdn.com/bao/uploaded/i1/TB16nDWIpXXXXX9XpXXXXXXXXXX_!!0-item_pic.jpg_400x400.jpg',$tcxcid);
	if($picurl){
		echo lang('plugin/hejin_toupiao', 'zhici');
	}else{
		echo lang('plugin/hejin_toupiao', 'buzhici');
	}
 function tcupload($file,$xcid){
	$ttk=new TTKClient(MY_ACCESSKEY,MY_SECRETKEY);
	 $res=$ttk->uploadFile($xcid,$file);
	$res = str_replace("{", "", $res);
	$res = str_replace("}", "", $res);
	$res = str_replace('"', "", $res);
	$array = explode(',',$res);
	$s_url = str_replace('s_url:', "", $array[7]);
	return stripslashes($s_url);
 }
?>