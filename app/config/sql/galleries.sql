SET NAMES latin1;
SET FOREIGN_KEY_CHECKS = 0;

CREATE TABLE `galleries` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `member_id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


SET FOREIGN_KEY_CHECKS = 1;
