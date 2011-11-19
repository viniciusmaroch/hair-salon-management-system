SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Person`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Person` (
  `P_ID` INT NOT NULL AUTO_INCREMENT ,
  `first_name` VARCHAR(45) NULL ,
  `last_name` VARCHAR(45) NULL ,
  `DOB` DATE NULL ,
  `gender` CHAR NULL ,
  `phone_number` VARCHAR(15) NULL ,
  `street` VARCHAR(45) NULL ,
  `postal_code` VARCHAR(45) NULL ,
  `city` VARCHAR(45) NULL ,
  `country` VARCHAR(45) NULL ,
  PRIMARY KEY (`P_ID`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`User`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`User` (
  `U_ID` INT NOT NULL AUTO_INCREMENT ,
  `P_ID` INT NULL ,
  `user_name` VARCHAR(45) NULL ,
  `password` VARCHAR(45) NULL ,
  `last_login` DATETIME NULL ,
  `is_employee` TINYINT(1)  NULL DEFAULT false ,
  `is_manager` TINYINT(1)  NULL DEFAULT false ,
  PRIMARY KEY (`U_ID`) ,
  INDEX `P_ID` (`P_ID` ASC) ,
  CONSTRAINT `P_ID`
    FOREIGN KEY (`P_ID` )
    REFERENCES `mydb`.`Person` (`P_ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
