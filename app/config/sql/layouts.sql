SET NAMES latin1;
SET FOREIGN_KEY_CHECKS = 0;

CREATE TABLE `layouts` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `member_id` int(11) NOT NULL,
  `title` varchar(120) NOT NULL,
  `default` char(1) NOT NULL,
  `type` char(1) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


SET FOREIGN_KEY_CHECKS = 1;
