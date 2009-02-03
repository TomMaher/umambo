SET NAMES latin1;
SET FOREIGN_KEY_CHECKS = 0;

CREATE TABLE `Application_Comments` (
  `from` int(11) NOT NULL default '0',
  `commentID` int(22) NOT NULL auto_increment,
  `datetime` datetime NOT NULL default '0000-00-00 00:00:00',
  `to` int(11) NOT NULL default '0',
  `message` text NOT NULL,
  PRIMARY KEY  (`commentID`)
) ENGINE=MyISAM AUTO_INCREMENT=132 DEFAULT CHARSET=latin1;

insert into `Application_Comments` values('1','98','2008-11-29 00:00:00','1','hey what\'s up!'),
 ('0','4','2008-11-08 00:00:00','1','que onda\r\n'),
 ('0','5','2008-11-08 00:00:00','1','Que onda'),
 ('2','105','2008-11-29 00:00:00','2','edytuketyuketyuk'),
 ('1','100','2008-11-29 00:00:00','1','Aqui puedo dejar mensajes, o tambien borrarlos, a gusto propio! esto esta buenisimo!'),
 ('2','76','2008-11-22 00:00:00','1','Hello'),
 ('1','108','2008-11-29 00:00:00','1','Heyy!'),
 ('2','129','2008-12-04 00:00:00','2','hola'),
 ('2','75','2008-11-22 00:00:00','2','hello\r\n'),
 ('1','83','2008-11-29 00:00:00','1','this is a message'),
 ('2','79','2008-11-25 00:00:00','2','yo soy\n\n'),
 ('2','80','2008-11-25 00:00:00','1','Probando'),
 ('1','99','2008-11-29 00:00:00','2','Marco, los comments ya se pueden mandar solamente si estas logged in, sino no te deja.!'),
 ('1','87','2008-11-29 00:00:00','1','this is a message for me!'),
 ('1','109','2008-12-04 00:00:00','1','Hola ivan como estas?'),
 ('1','110','2008-12-04 00:00:00','1','gfddgf'),
 ('1','111','2008-12-04 00:00:00','1','esto es un mail'),
 ('1','112','2008-12-04 00:00:00','1','jkljkl'),
 ('1','117','2008-12-04 00:00:00','1','hey man'),
 ('1','118','2008-12-04 00:00:00','1','hjk'),
 ('1','119','2008-12-04 00:00:00','1','jklhkj'),
 ('1','120','2008-12-04 00:00:00','1','hola esot es un mendaje mio'),
 ('1','121','2008-12-04 00:00:00','1','kjhjkh'),
 ('1','122','2008-12-04 00:00:00','1','klj'),
 ('1','123','2008-12-04 00:00:00','2','hey marco esto es un mensaje de prueva'),
 ('1','124','2008-12-04 00:00:00','1','esto es un mensaje para mi'),
 ('1','125','2008-12-04 00:00:00','1','esot e sun mensajed esd emi proipi lugar'),
 ('1','126','2008-12-04 00:00:00','1','this is a new message'),
 ('1','128','2008-12-04 00:00:00','4','This is a new Message form tom, Testing..'),
 ('1','130','2008-12-05 00:00:00','2','guey, llamame porfavor asi vemos lo de maniana sabado!'),
 ('2','131','2008-12-06 00:00:00','2','just testing');

SET FOREIGN_KEY_CHECKS = 1;
