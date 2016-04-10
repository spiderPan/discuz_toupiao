<?php
if(!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {
	exit('Access Denied');
}



$sql = <<<EOF
CREATE TABLE IF NOT EXISTS `cdb_hjtp_tpjles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zid` int(11) NOT NULL,
  `vid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `openid` varchar(1000) NOT NULL,
  `ips` varchar(100) NOT NULL,
  `timedate` int(11) NOT NULL,
  `yuliua` int(11) DEFAULT NULL,
  `yuliub` int(11) DEFAULT NULL,
  `yuliuc` varchar(1000) DEFAULT NULL,
  `yuliud` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 ;
EOF;
runquery($sql);

$sql = <<<EOF
CREATE TABLE IF NOT EXISTS `cdb_hjtp_votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(1000) NOT NULL,
  `pic` varchar(1000) NOT NULL,
  `icon` varchar(1000) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `tpnub` int(11) NOT NULL DEFAULT '1',
  `ipnubs` int(11) NOT NULL DEFAULT '0',
  `wxgzts` varchar(1000) NOT NULL,
  `wxgzurl` varchar(1000) NOT NULL,
  `zuopins` int(11) NOT NULL DEFAULT '0',
  `toupiaos` int(11) NOT NULL DEFAULT '0',
  `clicks` int(11) NOT NULL DEFAULT '0',
  `xntps` int(11) NOT NULL DEFAULT '0',
  `xnlls` int(11) NOT NULL DEFAULT '0',
  `start_time` int(11) DEFAULT NULL,
  `over_time` int(11) DEFAULT NULL,
  `vote_time` int(11) DEFAULT NULL,
  `end_time` int(11) DEFAULT NULL,
  `zpnamediy` varchar(1000) DEFAULT NULL,
  `zpmsdiy` varchar(1000) DEFAULT NULL,
  `shuomingta` varchar(1000) DEFAULT NULL,
  `shuomingca` text,
  `shuomingtb` varchar(1000) DEFAULT NULL,
  `shuomingcb` text,
  `shuomingtc` varchar(1000) DEFAULT NULL,
  `shuomingcc` text,
  `is_sh` tinyint(1) NOT NULL DEFAULT '0',
  `yuliua` int(11) DEFAULT NULL,
  `yuliub` int(11) DEFAULT NULL,
  `yuliuc` varchar(1000) DEFAULT NULL,
  `yuliud` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 ;
EOF;
runquery($sql);

/**如要防止重复报名，可以将下面两行代码复制到下面的PRIMARY KEY (`id`)后安装
,
  UNIQUE KEY `openid` (`openid`)
  */
$sql = <<<EOF
CREATE TABLE IF NOT EXISTS `cdb_hjtp_zuopins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `openid` varchar(50) NOT NULL,
  `zpname` varchar(1000) DEFAULT NULL,
  `telphone` varchar(11) DEFAULT NULL,
  `content` text,
  `pica` varchar(1000) DEFAULT NULL,
  `picb` varchar(1000) DEFAULT NULL,
  `picc` varchar(1000) DEFAULT NULL,
  `picd` varchar(1000) DEFAULT NULL,
  `pice` varchar(1000) DEFAULT NULL,
  `toupiaos` int(11) NOT NULL DEFAULT '0',
  `liulans` int(11) NOT NULL DEFAULT '0',
  `is_show` tinyint(1) NOT NULL DEFAULT '1',
  `yuliua` int(11) DEFAULT NULL,
  `yuliub` int(11) DEFAULT NULL,
  `yuliuc` varchar(1000) DEFAULT NULL,
  `yuliud` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 ;
EOF;
runquery($sql);

$sql = <<<EOF
CREATE TABLE IF NOT EXISTS `cdb_hjtp_supply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vid` int(11) NOT NULL,
  `paixu` int(11) NOT NULL DEFAULT '1',
  `bannergd` varchar(1000) DEFAULT NULL,
  `bannerpic` varchar(1000) DEFAULT NULL,
  `footgd` varchar(1000) DEFAULT NULL,
  `footpic` varchar(1000) DEFAULT NULL,
  `bgcolor` varchar(1000) DEFAULT NULL,
  `bqname` varchar(1000) DEFAULT NULL,
  `kefu` varchar(1000) DEFAULT NULL,
  `yuliua` varchar(1000) DEFAULT NULL,
  `yuliub` varchar(1000) DEFAULT NULL,
  `yuliuc` varchar(1000) DEFAULT NULL,
  `yuliud` varchar(1000) DEFAULT NULL,
  `yuliue` varchar(1000) DEFAULT NULL,
  `yuliuf` varchar(1000) DEFAULT NULL,
  `yuliug` varchar(1000) DEFAULT NULL,
  `yuliuh` varchar(1000) DEFAULT NULL,
  `yuliui` varchar(1000) DEFAULT NULL,
  `yuliuj` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 ;
EOF;
runquery($sql);

$sql = <<<EOF
ALTER TABLE `cdb_hjtp_tpjles` ADD INDEX IDX_IPS_TIMEDATE(`IPS`,`TIMEDATE`);
EOF;
runquery($sql);

$sql = <<<EOF
ALTER TABLE `cdb_hjtp_tpjles` ADD INDEX IDX_UID_TIMEDATE(`UID`,`TIMEDATE`);
EOF;
runquery($sql);

$sql = <<<EOF
ALTER TABLE `cdb_hjtp_tpjles` ADD INDEX IDX_ZID_YULIUA(`ZID`,`YULIUA`);
EOF;
runquery($sql);



$finish = TRUE;
?>