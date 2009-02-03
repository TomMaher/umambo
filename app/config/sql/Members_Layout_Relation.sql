SET NAMES latin1;
SET FOREIGN_KEY_CHECKS = 0;

CREATE TABLE `Members_Layout_Relation` (
  `pageID` int(11) NOT NULL default '0',
  `pageColumn` varchar(5) NOT NULL default '0',
  `gadgetID` varchar(11) NOT NULL default '',
  `gadgetSort` int(3) NOT NULL default '0',
  KEY `pageID` (`pageID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

insert into `Members_Layout_Relation` values('1','sort2','1','1'),
 ('1','sort1','8','0'),
 ('6','sort1','1','0'),
 ('6','sort2','8','1'),
 ('1','sort2','9','0'),
 ('6','sort2','9','2'),
 ('24','sort2','1','0'),
 ('24','sort1','8','0'),
 ('24','sort2','9','1');

SET FOREIGN_KEY_CHECKS = 1;
