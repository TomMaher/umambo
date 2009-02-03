SET NAMES latin1;
SET FOREIGN_KEY_CHECKS = 0;

CREATE TABLE `Location` (
  `ID` int(5) NOT NULL auto_increment,
  `COUNTRY` varchar(120) NOT NULL default '',
  `CITY` varchar(120) NOT NULL default '',
  `STATE` varchar(120) NOT NULL default '',
  `ZIPCODE` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`ID`),
  UNIQUE KEY `COUNTRY` (`COUNTRY`,`CITY`,`STATE`,`ZIPCODE`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

insert into `Location` values('1','United States','Miami','FL','33180'),
 ('2','United States','Miami','FL','33179');

SET FOREIGN_KEY_CHECKS = 1;
