-- -----------------------------------------------------
-- Table `hsms_db`.`users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `hsms_db`.`users` (
  `UID` int(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45)  ,
  `password` VARCHAR(45)  ,
  `last_login` DATETIME  ,
  `is_employee` TINYINT(1)  DEFAULT false ,
  `is_manager` TINYINT(1)  DEFAULT false ,
  `firstName` varchar(25) NOT NULL,
  `lastName` varchar(25) NOT NULL,
  `DOB` datetime NOT NULL,
  `gender` varchar(6) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `street` varchar(50) NOT NULL,
  `postalCode` varchar(15) NOT NULL,
  `city` varchar(40) NOT NULL,
  `country` varchar(40) NOT NULL,
  PRIMARY KEY (`UID`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1$$
