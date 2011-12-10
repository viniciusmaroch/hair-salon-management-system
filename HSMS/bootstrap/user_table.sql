-- -----------------------------------------------------
-- Table `hsms_db`.`users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `hsms_db`.`users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` VARCHAR(45)  ,
  `password` VARCHAR(45)  ,
  `last_login` DATETIME  ,
  `is_employee` TINYINT(1)  DEFAULT false ,
  `is_manager` TINYINT(1)  DEFAULT false ,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1$$