SET NAMES latin1;
SET FOREIGN_KEY_CHECKS = 0;

CREATE TABLE `Applications` (
  `gadgetID` int(11) NOT NULL auto_increment,
  `gadgetInformation` text NOT NULL,
  `gadgetTitle` varchar(180) NOT NULL default '',
  `gadgetHref` varchar(180) NOT NULL default '',
  `gadgetLimitation` int(10) NOT NULL default '0',
  `gadgetImage` varchar(180) NOT NULL default '',
  `gadgetBy` varchar(150) NOT NULL default '',
  PRIMARY KEY  (`gadgetID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 ROW_FORMAT=FIXED;

insert into `Applications` values('1','Upload your own original music to the \r\nU-mambo player. Be sure you own the \r\nrightsof all the files you upload.','Comments','core/core/components/comments/full/index.php','1','none','Margi Delgado'),
 ('8','Let talent agencies communicate their\r\ninterest for your services. Allow other members to contact you directly.','Headshot','core/core/components/headshoot/full/index.php','0','none','ivanhueso'),
 ('9','Network','Network','core/core/components/network/index.php','0','','Ivan Hueso');

SET FOREIGN_KEY_CHECKS = 1;
