CREATE TABLE IF NOT EXISTS `pastes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baseid` text NOT NULL,
  `username` varchar(140) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `paste` varchar(12000) NOT NULL,
  `pastepass` varchar(140) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;
