SET NAMES latin1;
SET FOREIGN_KEY_CHECKS = 0;

CREATE TABLE `images` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `url` varchar(120) NOT NULL default '',
  `gallery_id` int(11) NOT NULL default '0',
  `album_id` int(11) NOT NULL default '0',
  `head_shot` char(1) NOT NULL default '',
  `created` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

insert into `images` values('2','uiyuiyiuy','0','0','','0000-00-00 00:00:00');

SET FOREIGN_KEY_CHECKS = 1;
