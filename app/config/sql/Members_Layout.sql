SET NAMES latin1;
SET FOREIGN_KEY_CHECKS = 0;

CREATE TABLE `Members_Layout` (
  `pageID` int(11) NOT NULL auto_increment,
  `USERID` varchar(120) NOT NULL default '',
  `pageTitle` varchar(120) NOT NULL default '',
  `pageDefault` char(1) NOT NULL default '',
  `pageType` char(1) NOT NULL default '',
  PRIMARY KEY  (`pageID`),
  KEY `url` (`USERID`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1 PACK_KEYS=0;

insert into `Members_Layout` values('1','2','Portfolio','','2'),
 ('6','1','Portfolio','','2'),
 ('24','4','Portfolio','','2');

SET FOREIGN_KEY_CHECKS = 1;
