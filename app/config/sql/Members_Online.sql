SET NAMES latin1;
SET FOREIGN_KEY_CHECKS = 0;

CREATE TABLE `Members_Online` (
  `USERID` int(11) NOT NULL default '0',
  `PASSKEY` varchar(120) NOT NULL default '',
  PRIMARY KEY  (`USERID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


SET FOREIGN_KEY_CHECKS = 1;
