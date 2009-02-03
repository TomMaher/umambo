SET NAMES latin1;
SET FOREIGN_KEY_CHECKS = 0;

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `to_member_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


SET FOREIGN_KEY_CHECKS = 1;
