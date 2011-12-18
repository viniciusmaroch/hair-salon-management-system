-- -----------------------------------------------------
-- Table `hsms_db`.`services`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `hsms_db`.`services` (
  `SEID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  `duration` time DEFAULT NULL,
  `cost` float DEFAULT NULL,
  PRIMARY KEY (`SEID`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1$$