SET NAMES latin1;
SET FOREIGN_KEY_CHECKS = 0;

CREATE TABLE `Application_Network` (
  `USERID` int(11) NOT NULL default '0',
  `FRIENDID` int(11) NOT NULL default '0',
  `GROUP` varchar(190) NOT NULL default '',
  `STATUS` varchar(80) NOT NULL default '',
  `TOPNET` int(11) NOT NULL default '0',
  UNIQUE KEY `USERID` (`USERID`,`FRIENDID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

insert into `Application_Network` values('1','2','','1','0'),
 ('2','1','','1','0'),
 ('1','1','Friend','','0');

SET FOREIGN_KEY_CHECKS = 1;
