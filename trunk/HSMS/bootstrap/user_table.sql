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
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1$$