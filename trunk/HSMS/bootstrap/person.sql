--
-- Database: `hsms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE IF NOT EXISTS `hsms_db`.`people` (
  `PID` int(15) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(25) NOT NULL,
  `lastName` varchar(25) NOT NULL,
  `DOB` datetime NOT NULL,
  `gender` varchar(6) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `street` varchar(50) NOT NULL,
  `postalCode` varchar(15) NOT NULL,
  `city` varchar(40) NOT NULL,
  `country` varchar(40) NOT NULL,
  PRIMARY KEY (`PID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
