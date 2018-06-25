-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema diablo-trab
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema diablo-trab
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `diablo-trab` DEFAULT CHARACTER SET utf8 ;
USE `diablo-trab` ;

-- -----------------------------------------------------
-- Table `diablo-trab`.`questions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `diablo-trab`.`questions` (
  `question_id` BIGINT(25) NOT NULL,
  `question_text` TEXT NOT NULL,
  `answer_a` VARCHAR(75) NOT NULL,
  `answer_b` VARCHAR(75) NOT NULL,
  `answer_c` VARCHAR(75) NOT NULL,
  `answer_d` VARCHAR(75) NULL DEFAULT NULL,
  `answer_e` VARCHAR(75) NULL DEFAULT NULL,
  `correct_answer` VARCHAR(1) NOT NULL,
  PRIMARY KEY (`question_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
