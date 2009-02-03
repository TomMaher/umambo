SET NAMES latin1;
SET FOREIGN_KEY_CHECKS = 0;

CREATE TABLE `job_titles` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(20) NOT NULL,
  `description` varchar(30) NOT NULL,
  `profession_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

insert into `job_titles` values('2','Agent','Client Representative','1'),
 ('3','Agency','Firm or Company','1'),
 ('4','Musician','Musical Performer','2'),
 ('5','Dancer','All varieties of Dance','2'),
 ('6','Actor','Stage, Screen, TV, Video','2'),
 ('7','Band','Musical ensemble','2'),
 ('8','Comedian','Stand-up, comedic acting','2'),
 ('9','DJ','Disk Jockey','2'),
 ('10','Magician','Performer of magic acts','2'),
 ('11','Model','Print, Runway, Video','2'),
 ('12','News','News on-air talent','2'),
 ('13','Photographer','Still or Video photography','3'),
 ('14','Singer','Vocal musical performance','2');

SET FOREIGN_KEY_CHECKS = 1;
