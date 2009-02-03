SET NAMES latin1;
SET FOREIGN_KEY_CHECKS = 0;

CREATE TABLE `Members_Activation` (
  `USERID` int(11) NOT NULL default '0',
  `CODE` char(80) NOT NULL default '',
  `CONFIRMATION` tinyint(1) NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=FIXED;

insert into `Members_Activation` values('1','1d0832c4969f6a4cc8e8a8fffe083efb','1'),
 ('2','8ba6c657b03fc7c8dd4dff8e45defcd2','1');

SET FOREIGN_KEY_CHECKS = 1;
