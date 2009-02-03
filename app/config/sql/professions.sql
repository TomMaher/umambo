SET NAMES latin1;
SET FOREIGN_KEY_CHECKS = 0;

CREATE TABLE `professions` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(30) NOT NULL,
  `description` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

insert into `professions` values('1','Agency','Booking Agent, Talent Agent, Artist Management '),
 ('2','Entertainer','Actor, Singer, Dancer, Musician, etc.'),
 ('3','Artist','Design, photography, graphic arts, makeup/hair');

SET FOREIGN_KEY_CHECKS = 1;
