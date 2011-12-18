--
-- Database: `hsms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `shifts`
--

CREATE TABLE IF NOT EXISTS `hsms_db`.`shifts` (
  `SHID` int(15) NOT NULL AUTO_INCREMENT,
  `STID` int(15) NOT NULL,
  `from` time NOT NULL,
  `to` time NOT NULL,
  PRIMARY KEY (`SHID`),
  KEY `STID` (`STID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;
