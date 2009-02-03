SET NAMES latin1;
SET FOREIGN_KEY_CHECKS = 0;

CREATE TABLE `gadgets` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `title` varchar(40) NOT NULL,
  `description` varchar(255) NOT NULL,
  `url` varchar(60) NOT NULL,
  `owner` varchar(30) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


SET FOREIGN_KEY_CHECKS = 1;
