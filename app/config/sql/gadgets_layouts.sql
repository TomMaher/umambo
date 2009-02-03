SET NAMES latin1;
SET FOREIGN_KEY_CHECKS = 0;

CREATE TABLE `gadgets_layouts` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `gadget_id` int(11) NOT NULL,
  `layout_id` int(11) NOT NULL,
  `column` char(5) NOT NULL,
  `limitation` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


SET FOREIGN_KEY_CHECKS = 1;
