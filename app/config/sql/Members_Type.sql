SET NAMES latin1;
SET FOREIGN_KEY_CHECKS = 0;

CREATE TABLE `Members_Type` (
  `ID` int(11) NOT NULL auto_increment,
  `MEMBER` varchar(120) NOT NULL default '',
  `TITLE` varchar(120) NOT NULL default '',
  `DESCRIPTION` varchar(120) NOT NULL default '',
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=255 DEFAULT CHARSET=latin1;

insert into `Members_Type` values('1','Entertainer','Musician','Violin'),
 ('2','Agents','Agents','Talent Manager'),
 ('3','Agents','Agents','Talent'),
 ('4','Agents','Agents','Music'),
 ('5','Agents','Agents','Modeling'),
 ('6','Agents','Agents','Casting'),
 ('7','Agents','Agents','Acting'),
 ('8','Agency','Agency','Record Label'),
 ('9','Agency','Agency','Production'),
 ('10','Agency','Agency','Talent'),
 ('11','Agency','Agency','Modeling'),
 ('12','Agency','Agency','Casting'),
 ('13','Agency','Agency','Acting'),
 ('14','Agency','Agency','Advertising'),
 ('15','Entertainer','Singer','Rapper'),
 ('16','Entertainer','Singer','Tenor'),
 ('17','Entertainer','Singer','Soprano'),
 ('18','Entertainer','Singer','Choir / Choral'),
 ('19','Entertainer','Singer','Backup'),
 ('20','Entertainer','Singer','Lead'),
 ('21','Entertainer','Singer','A capella'),
 ('22','Entertainer','Photographer','Wedding'),
 ('23','Entertainer','Photographer','Urban Life'),
 ('24','Entertainer','Photographer','Travel'),
 ('25','Entertainer','Photographer','Sports'),
 ('26','Entertainer','Photographer','Seasonal'),
 ('27','Entertainer','Photographer','Portrait'),
 ('28','Entertainer','Photographer','Photojournalism'),
 ('29','Entertainer','Photographer','Paparazzi'),
 ('30','Entertainer','Photographer','Night Life'),
 ('31','Entertainer','Photographer','Nature'),
 ('32','Entertainer','Photographer','Landscape'),
 ('33','Entertainer','Photographer','Health and Fitness'),
 ('34','Entertainer','Photographer','General'),
 ('35','Entertainer','Photographer','Food'),
 ('36','Entertainer','Photographer','Fine Art'),
 ('37','Entertainer','Photographer','Fashion'),
 ('38','Entertainer','Photographer','Erotica/Nude'),
 ('39','Entertainer','Photographer','Entertainment'),
 ('40','Entertainer','Photographer','Events'),
 ('41','Entertainer','Photographer','Children'),
 ('42','Entertainer','Photographer','Business World'),
 ('43','Entertainer','Photographer','Architecture'),
 ('44','Entertainer','Photographer','Animals'),
 ('45','Entertainer','Photographer','Abstract'),
 ('46','Entertainer','News','Public Affairs'),
 ('47','Entertainer','News','Sports'),
 ('48','Entertainer','News','Weather'),
 ('49','Entertainer','News','Host'),
 ('50','Entertainer','News','Reporter'),
 ('51','Entertainer','News','Anchor'),
 ('52','Entertainer','Musician','Viola'),
 ('53','Entertainer','Musician','Upright Bass'),
 ('54','Entertainer','Musician','Trumpet'),
 ('55','Entertainer','Musician','Trombone'),
 ('56','Entertainer','Musician','Synthesizer'),
 ('57','Entertainer','Musician','Strings'),
 ('58','Entertainer','Musician','Slide Guitar'),
 ('59','Entertainer','Musician','Sitar'),
 ('60','Entertainer','Musician','Saxophone'),
 ('61','Entertainer','Musician','Piccolo'),
 ('62','Entertainer','Musician','Piano'),
 ('63','Entertainer','Musician','Percussion'),
 ('64','Entertainer','Musician','Pedal Steel'),
 ('65','Entertainer','Musician','Other'),
 ('66','Entertainer','Musician','Mandolin'),
 ('67','Entertainer','Musician','Keyboards'),
 ('68','Entertainer','Musician','Horn'),
 ('69','Entertainer','Musician','Harp'),
 ('70','Entertainer','Band','Acoustic'),
 ('71','Entertainer','Musician','Harmonica'),
 ('72','Entertainer','Musician','Guitar'),
 ('73','Entertainer','Musician','French Horn'),
 ('74','Entertainer','Musician','Flute'),
 ('75','Entertainer','Musician','Flugelhorn'),
 ('76','Entertainer','Musician','Drums'),
 ('77','Entertainer','Musician','Double Bass'),
 ('78','Entertainer','Musician','Dobro'),
 ('79','Entertainer','Musician','Conga'),
 ('80','Entertainer','Musician','Clarinet'),
 ('81','Entertainer','Musician','Cello'),
 ('82','Entertainer','Musician','Bass'),
 ('83','Entertainer','Musician','Banjo'),
 ('84','Entertainer','Musician','Accordion'),
 ('85','Entertainer','Model','Sports / Fitness'),
 ('86','Entertainer','Model','Print / Editorial'),
 ('87','Entertainer','Model','Plus Size'),
 ('88','Entertainer','Model','Parts/Specialty'),
 ('89','Entertainer','Model','Lingerie'),
 ('90','Entertainer','Model','Trade show'),
 ('91','Entertainer','Model','Swim wear'),
 ('92','Entertainer','Model','Spokes model'),
 ('93','Entertainer','Model','Runway'),
 ('94','Entertainer','Model','Nude'),
 ('95','Entertainer','Model','Makeup'),
 ('96','Entertainer','Model','Mature'),
 ('97','Entertainer','Model','Hair'),
 ('98','Entertainer','Band','A\' capella'),
 ('99','Entertainer','Model','Features'),
 ('100','Entertainer','Model','Glamour'),
 ('101','Entertainer','Model','Fashion'),
 ('102','Entertainer','Model','Commercial'),
 ('103','Entertainer','Model','Bodybuilding'),
 ('104','Entertainer','Model','Body'),
 ('105','Entertainer','Magician','Street Magic'),
 ('106','Entertainer','Magician','Stand Up Magic'),
 ('107','Entertainer','Magician','Stage Illusionist'),
 ('108','Entertainer','Magician','Mentalist'),
 ('109','Entertainer','Magician','Escapist'),
 ('110','Entertainer','Magician','Comedy Magic'),
 ('111','Entertainer','Magician','Children\'s'),
 ('112','Entertainer','Film','Talent Services'),
 ('113','Entertainer','Film','Support Services'),
 ('114','Entertainer','Film','Stunts'),
 ('115','Entertainer','Film','Production'),
 ('116','Entertainer','Film','Pre-Production'),
 ('117','Entertainer','Film','Post-Production'),
 ('118','Entertainer','Film','Instruction'),
 ('119','Entertainer','Film','Filmmakers'),
 ('120','Entertainer','Film','Extras'),
 ('121','Entertainer','Film','Equipment'),
 ('122','Entertainer','Film','Digital Media'),
 ('123','Entertainer','Film','Crew'),
 ('124','Entertainer','DJ','New Age'),
 ('125','Entertainer','DJ','Latin'),
 ('126','Entertainer','DJ','International'),
 ('127','Entertainer','DJ','Folk'),
 ('128','Entertainer','DJ','Country'),
 ('129','Entertainer','DJ','Classical'),
 ('130','Entertainer','DJ','Jazz'),
 ('131','Entertainer','DJ','Rhythm & Blues'),
 ('132','Entertainer','DJ','Blues'),
 ('133','Entertainer','DJ','Rap/Hip-Hop'),
 ('134','Entertainer','DJ','Dance/Electronica'),
 ('135','Entertainer','DJ','Rock/Pop'),
 ('136','Entertainer','Dancer','Tap'),
 ('137','Entertainer','Dancer','Tango'),
 ('138','Entertainer','Dancer','Samba'),
 ('139','Entertainer','Dancer','Salsa Ballroom'),
 ('140','Entertainer','Dancer','Square Dancing'),
 ('141','Entertainer','Dancer','Swing'),
 ('142','Entertainer','Dancer','Modern'),
 ('143','Entertainer','Dancer','Mambo Ballroom'),
 ('144','Entertainer','Dancer','Line Dancing'),
 ('145','Entertainer','Dancer','Jazz'),
 ('146','Entertainer','Dancer','Hustle'),
 ('147','Entertainer','Dancer','Hip Hop'),
 ('148','Entertainer','Dancer','Go-Go'),
 ('149','Entertainer','Dancer','Folk'),
 ('150','Entertainer','Dancer','Flamenco'),
 ('151','Entertainer','Dancer','Exotic Dancing'),
 ('152','Entertainer','Dancer','Contemporary'),
 ('153','Entertainer','Dancer','Belly Dancing'),
 ('154','Entertainer','Dancer','Ballroom'),
 ('155','Entertainer','Dancer','Ballet'),
 ('156','Entertainer','Comedian','Ventriloquist'),
 ('157','Entertainer','Comedian','Stand-Up'),
 ('158','Entertainer','Comedian','Magic Comedy'),
 ('159','Entertainer','Comedian','Latin'),
 ('160','Entertainer','Comedian','Jokes'),
 ('161','Entertainer','Comedian','Impersonations'),
 ('162','Entertainer','Comedian','Hypnotist Comedy'),
 ('163','Entertainer','Comedian','General'),
 ('164','Entertainer','Comedian','Gay/Lesbian'),
 ('165','Entertainer','Comedian','Female'),
 ('166','Entertainer','Comedian','Family'),
 ('167','Entertainer','Comedian','Clean'),
 ('168','Entertainer','Comedian','Christian'),
 ('169','Entertainer','Comedian','Celebrity'),
 ('170','Entertainer','Comedian','Blue Collar'),
 ('171','Entertainer','Comedian','Black'),
 ('172','Entertainer','Comedian','Asian'),
 ('173','Entertainer','Comedian','As seen on TV'),
 ('174','Entertainer','Band','Trance'),
 ('175','Entertainer','Band','Techno'),
 ('176','Entertainer','Band','Spanish Pop'),
 ('177','Entertainer','Band','Soul'),
 ('178','Entertainer','Band','Samba'),
 ('179','Entertainer','Band','Salsa'),
 ('180','Entertainer','Band','Rock en Espa�ol'),
 ('181','Entertainer','Band','Rock Pop'),
 ('182','Entertainer','Band','Reggae'),
 ('183','Entertainer','Band','Rap'),
 ('184','Entertainer','Band','R&B'),
 ('185','Entertainer','Band','Punk'),
 ('186','Entertainer','Band','Progressive'),
 ('187','Entertainer','Band','Powerpop'),
 ('188','Entertainer','Band','Pop Punk'),
 ('189','Entertainer','Band','Pop'),
 ('190','Entertainer','Band','Nu-Jazz'),
 ('191','Entertainer','Band','New Wave'),
 ('192','Entertainer','Band','Metal'),
 ('193','Entertainer','Band','Melodramatic'),
 ('194','Entertainer','Band','Lyrical'),
 ('195','Entertainer','Band','Lounge'),
 ('196','Entertainer','Band','Latin'),
 ('197','Entertainer','Band','Korean Pop'),
 ('198','Entertainer','Band','Jazz'),
 ('199','Entertainer','Band','Japanese Pop'),
 ('200','Entertainer','Band','Japanese Classic'),
 ('201','Entertainer','Band','Jam Band'),
 ('202','Entertainer','Band','Italian Pop'),
 ('203','Entertainer','Band','International'),
 ('204','Entertainer','Band','Industrial'),
 ('205','Entertainer','Band','Indie'),
 ('206','Entertainer','Band','IDM'),
 ('207','Entertainer','Band','Hip Hop'),
 ('208','Entertainer','Band','Healing'),
 ('209','Entertainer','Band','Hardcore'),
 ('210','Entertainer','Band','House'),
 ('211','Entertainer','Band','Grunge'),
 ('212','Entertainer','Band','Grindcore'),
 ('213','Entertainer','Band','Grime'),
 ('214','Entertainer','Band','Gothic'),
 ('215','Entertainer','Band','Gospel'),
 ('216','Entertainer','Band','Glam'),
 ('217','Entertainer','Band','German Pop'),
 ('218','Entertainer','Band','Garage'),
 ('219','Entertainer','Band','Fusion'),
 ('220','Entertainer','Band','Funk'),
 ('221','Entertainer','Band','French Pop'),
 ('222','Entertainer','Band','Folk'),
 ('223','Entertainer','Band','Flamenco'),
 ('224','Entertainer','Band','Experimental'),
 ('225','Entertainer','Band','Emotronic'),
 ('226','Entertainer','Band','Emo'),
 ('227','Entertainer','Band','Electronica'),
 ('228','Entertainer','Band','Electroacoustic'),
 ('229','Entertainer','Band','Electro'),
 ('230','Entertainer','Band','Pop'),
 ('231','Entertainer','Band','Dutch'),
 ('232','Entertainer','Band','Drum & Bass'),
 ('233','Entertainer','Band','Down-Tempo'),
 ('234','Entertainer','Band','Disco'),
 ('235','Entertainer','Band','Dance'),
 ('236','Entertainer','Band','Country'),
 ('237','Entertainer','Band','Comedy'),
 ('238','Entertainer','Band','Classical Rock'),
 ('239','Entertainer','Band','Classical'),
 ('240','Entertainer','Band','Christian'),
 ('241','Entertainer','Band','Chinese'),
 ('242','Entertainer','Band','Children'),
 ('243','Entertainer','Band','Celtic'),
 ('244','Entertainer','Band','Breakcore'),
 ('245','Entertainer','Band','Breakbeat'),
 ('246','Entertainer','Band','Nova'),
 ('247','Entertainer','Band','Bossa'),
 ('248','Entertainer','Band','Blues'),
 ('249','Entertainer','Band','Bluegrass'),
 ('250','Entertainer','Band','Black Metal'),
 ('251','Entertainer','Band','Big Beat'),
 ('252','Entertainer','Band','Alternative'),
 ('253','Entertainer','Band','Afro-Cuban'),
 ('254','Entertainer','Band','Afro-Beat');

SET FOREIGN_KEY_CHECKS = 1;
