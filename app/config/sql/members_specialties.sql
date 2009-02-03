SET NAMES latin1;
SET FOREIGN_KEY_CHECKS = 0;

CREATE TABLE `members_specialties` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `member_id` int(11) NOT NULL,
  `specialty_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

insert into `members_specialties` values('1','4','14'),
 ('2','4','15'),
 ('3','4','16'),
 ('4','4','19'),
 ('5','4','20'),
 ('6','4','41');

SET FOREIGN_KEY_CHECKS = 1;
