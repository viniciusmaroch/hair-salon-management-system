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


-- -----------------------------------------------------
-- Table `mydb`.`Staff`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Staff` (
  `ST_ID` INT NOT NULL AUTO_INCREMENT ,
  `U_ID` INT NOT NULL ,
  `super_id` INT NULL ,
  PRIMARY KEY (`ST_ID`) ,
  INDEX `U_ID` (`U_ID` ASC) ,
  INDEX `super_id` (`super_id` ASC) ,
  CONSTRAINT `U_ID`
    FOREIGN KEY (`U_ID` )
    REFERENCES `mydb`.`User` (`U_ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `super_id`
    FOREIGN KEY (`super_id` )
    REFERENCES `mydb`.`User` (`U_ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Shifts`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Shifts` (
  `SH_ID` INT NOT NULL AUTO_INCREMENT ,
  `ST_ID` INT NOT NULL ,
  `from` DATETIME NULL ,
  `to` DATETIME NULL ,
  PRIMARY KEY (`SH_ID`) ,
  INDEX `ST_ID` (`ST_ID` ASC) ,
  CONSTRAINT `ST_ID`
    FOREIGN KEY (`ST_ID` )
    REFERENCES `mydb`.`Staff` (`ST_ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Service`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Service` (
  `SE_ID` INT NOT NULL AUTO_INCREMENT ,
  `ST_ID` INT NOT NULL ,
  `name` VARCHAR(45) NULL ,
  `description` TEXT NULL ,
  `duration` TIME NULL DEFAULT 0 ,
  `cost` INT NULL DEFAULT 0 ,
  PRIMARY KEY (`SE_ID`) ,
  INDEX `ST_ID` (`ST_ID` ASC) ,
  CONSTRAINT `ST_ID`
    FOREIGN KEY (`ST_ID` )
    REFERENCES `mydb`.`Staff` (`ST_ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Appointment`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Appointment` (
  `A_ID` INT NOT NULL AUTO_INCREMENT ,
  `U_ID_Customer` INT NOT NULL ,
  `ST_ID` INT NOT NULL ,
  `SE_ID` INT NOT NULL ,
  `date` DATE NULL ,
  `start_time` TIME NULL ,
  `status` CHAR NULL ,
  PRIMARY KEY (`A_ID`) ,
  INDEX `U_ID` (`U_ID_Customer` ASC) ,
  INDEX `ST_ID` (`ST_ID` ASC) ,
  INDEX `SE_ID` (`SE_ID` ASC) ,
  CONSTRAINT `U_ID`
    FOREIGN KEY (`U_ID_Customer` )
    REFERENCES `mydb`.`User` (`U_ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `ST_ID`
    FOREIGN KEY (`ST_ID` )
    REFERENCES `mydb`.`Staff` (`ST_ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `SE_ID`
    FOREIGN KEY (`SE_ID` )
    REFERENCES `mydb`.`Service` (`SE_ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Offer`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Offer` (
  `O_ID` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL ,
  `discount` INT NOT NULL DEFAULT 0 ,
  `description` TEXT NULL ,
  `valid_from` DATE NULL ,
  `valid_to` DATE NULL ,
  PRIMARY KEY (`O_ID`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Service_Offer`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Service_Offer` (
  `O_ID` INT NOT NULL ,
  `SE_ID` INT NOT NULL ,
  INDEX `O_ID` (`O_ID` ASC) ,
  INDEX `SE_ID` (`SE_ID` ASC) ,
  CONSTRAINT `O_ID`
    FOREIGN KEY (`O_ID` )
    REFERENCES `mydb`.`Offer` (`O_ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `SE_ID`
    FOREIGN KEY (`SE_ID` )
    REFERENCES `mydb`.`Service` (`SE_ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`News`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`News` (
  `N_ID` INT NOT NULL AUTO_INCREMENT ,
  `ST_ID` INT NOT NULL ,
  `posted_on` DATETIME NULL ,
  `description` TEXT NULL ,
  PRIMARY KEY (`N_ID`) ,
  INDEX `ST_ID` (`ST_ID` ASC) ,
  CONSTRAINT `ST_ID`
    FOREIGN KEY (`ST_ID` )
    REFERENCES `mydb`.`Staff` (`ST_ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
