<?php
if(!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {
	exit('Access Denied');
}



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
ALTER TABLE `cdb_hjtp_tpjles` MODIFY COLUMN `ips` VARCHAR(100);
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