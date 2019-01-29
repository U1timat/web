//скрипт для автоматического создания базы данных для данного сайта
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema candyshop
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema candyshop
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `candyshop` DEFAULT CHARACTER SET utf8 ;
USE `candyshop` ;

-- -----------------------------------------------------
-- Table `candyshop`.`candys`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `candyshop`.`candys` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `candyname` VARCHAR(100) NULL DEFAULT NULL,
  `candyprice` FLOAT NULL DEFAULT NULL,
  `image` VARCHAR(45) NULL DEFAULT NULL,
  `categ` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 16
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `candyshop`.`corzina`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `candyshop`.`corzina` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `id_tovar` CHAR(11) NULL DEFAULT NULL,
  `id_user` CHAR(40) NULL DEFAULT NULL,
  `quantyty` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 52
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `candyshop`.`zakaz`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `candyshop`.`zakaz` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `fio` VARCHAR(100) NULL DEFAULT NULL,
  `phone` CHAR(10) NULL DEFAULT NULL,
  `userid` VARCHAR(45) NULL DEFAULT NULL,
  `finished` VARCHAR(3) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 18
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
