CREATE TABLE IF NOT EXISTS `hsms_db`.`appointments` (
`AID` INT(11) NOT NULL AUTO_INCREMENT,
`title` VARCHAR(50) NOT NULL,
`allday` tinyint(1) NOT NULL,
`start` datetime NOT NULL,
`end` datetime DEFAULT NULL,
`editable` tinyint(1) NOT NULL,
`service_id` INT(11) NOT NULL,
`user_id` INT(11) NOT NULL,
PRIMARY KEY (`AID`)
) ENGINE=InnoDB  AUTO_INCREMENT=1 ;