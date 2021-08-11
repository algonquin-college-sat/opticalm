-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema opticalm
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema opticalm
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `opticalm` DEFAULT CHARACTER SET utf8 ;
USE `opticalm` ;

-- -----------------------------------------------------
-- Table `opticalm`.`address`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `opticalm`.`address` (
  `id` INT NOT NULL,
  `unit` VARCHAR(45) NULL,
  `street` VARCHAR(128) NOT NULL,
  `province` VARCHAR(45) NOT NULL,
  `county` VARCHAR(45) NULL,
  `country` VARCHAR(45) NOT NULL,
  `postal` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `opticalm`.`last_visit`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `opticalm`.`last_visit` (
  `id` INT NOT NULL,
  `login` DATETIME NULL,
  `logout` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `opticalm`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `opticalm`.`user` (
  `id` INT NOT NULL,
  `last_name` VARCHAR(128) NULL,
  `first_name` VARCHAR(128) NULL,
  `address_id` INT NOT NULL,
  `email` VARCHAR(256) NOT NULL,
  `phone` VARCHAR(45) NULL,
  `registered` DATETIME NULL,
  `last_visit_id` INT NOT NULL,
  PRIMARY KEY (`id`, `address_id`, `last_visit_id`),
  INDEX `fk_user_address1_idx` (`address_id` ASC) VISIBLE,
  INDEX `fk_user_last_visit1_idx` (`last_visit_id` ASC) VISIBLE,
  CONSTRAINT `fk_user_address1`
    FOREIGN KEY (`address_id`)
    REFERENCES `opticalm`.`address` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_last_visit1`
    FOREIGN KEY (`last_visit_id`)
    REFERENCES `opticalm`.`last_visit` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `opticalm`.`role`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `opticalm`.`role` (
  `id` INT NOT NULL,
  `role` TINYINT NULL,
  `description` VARCHAR(128) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `opticalm`.`user_has_role`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `opticalm`.`user_has_role` (
  `user_id` INT NOT NULL,
  `role_id` INT NOT NULL,
  PRIMARY KEY (`user_id`, `role_id`),
  INDEX `fk_user_has_role_role1_idx` (`role_id` ASC) VISIBLE,
  INDEX `fk_user_has_role_user1_idx` (`user_id` ASC) VISIBLE,
  CONSTRAINT `fk_user_has_role_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `opticalm`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_has_role_role1`
    FOREIGN KEY (`role_id`)
    REFERENCES `opticalm`.`role` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `opticalm`.`screening`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `opticalm`.`screening` (
  `id` INT NOT NULL,
  `user_id` INT NOT NULL,
  `specialist_id` INT NOT NULL,
  `date` DATETIME NULL,
  `results` TEXT NULL,
  `recommendations` TEXT NULL,
  PRIMARY KEY (`id`, `user_id`, `specialist_id`),
  INDEX `fk_screening_user1_idx` (`user_id` ASC) VISIBLE,
  INDEX `fk_screening_user2_idx` (`specialist_id` ASC) VISIBLE,
  CONSTRAINT `fk_screening_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `opticalm`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_screening_user2`
    FOREIGN KEY (`specialist_id`)
    REFERENCES `opticalm`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `opticalm`.`appointments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `opticalm`.`appointments` (
  `id` INT NOT NULL,
  `customer_id` INT NOT NULL,
  `specialist_id` INT NOT NULL,
  `date` DATETIME NULL,
  PRIMARY KEY (`id`, `specialist_id`, `customer_id`),
  INDEX `fk_appointments_user1_idx` (`customer_id` ASC) VISIBLE,
  INDEX `fk_appointments_user2_idx` (`specialist_id` ASC) VISIBLE,
  CONSTRAINT `fk_appointments_user1`
    FOREIGN KEY (`customer_id`)
    REFERENCES `opticalm`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_appointments_user2`
    FOREIGN KEY (`specialist_id`)
    REFERENCES `opticalm`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `opticalm`.`reciept`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `opticalm`.`reciept` (
  `id` INT NOT NULL,
  `screening_id` INT NOT NULL,
  `date` DATETIME NULL,
  `recieptcol` VARCHAR(45) NULL,
  PRIMARY KEY (`id`, `screening_id`),
  INDEX `fk_reciept_screening1_idx` (`screening_id` ASC) VISIBLE,
  CONSTRAINT `fk_reciept_screening1`
    FOREIGN KEY (`screening_id`)
    REFERENCES `opticalm`.`screening` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
