SET NAMES latin1;
SET FOREIGN_KEY_CHECKS = 0;

CREATE TABLE `members` (
  `id` int(10) NOT NULL auto_increment,
  `password` char(80) NOT NULL default '',
  `email` char(50) NOT NULL default '',
  `name` char(100) NOT NULL default '',
  `lastname` char(100) NOT NULL default '',
  `date` date NOT NULL default '0000-00-00',
  `display_name` char(100) NOT NULL default '',
  `gender` char(10) NOT NULL default '',
  `url` char(120) NOT NULL default '',
  `birthday` char(60) NOT NULL default '',
  `member_type` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=FIXED;

insert into `members` values('2','mp020675','mperalta75@gmail.com','Marco','Peralta','2008-07-08','Marco Peralta','male','marcoperalta','February/27/1993','1'),
 ('1','lolament0','ivanhueso@gmail.com','Ivan','Hueso','2008-07-26','Ivan Hueso','male','ivanhueso','August/29/1986','2'),
 ('4','123123','tom.maher@comcast.net','Tom','Maher','2008-11-27','Tom Maher','male','tom','May/27/1955','0');

SET FOREIGN_KEY_CHECKS = 1;
