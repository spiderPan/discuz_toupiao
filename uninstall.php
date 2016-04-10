<?php
if(!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {
	exit('Access Denied');
}
DB::query("DROP TABLE IF EXISTS ".DB::table('hjtp_zuopins')."");
DB::query("DROP TABLE IF EXISTS ".DB::table('hjtp_votes')."");
DB::query("DROP TABLE IF EXISTS ".DB::table('hjtp_tpjles')."");
DB::query("DROP TABLE IF EXISTS ".DB::table('hjtp_supply')."");
$finish = TRUE;
?>