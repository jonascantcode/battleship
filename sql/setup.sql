-- -----------------------------------------------------
-- Scheme battlship
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `battlehship` DEFAULT CHARACTER SET utf8 COLLATE utf8_danish_ci ;
USE `battleship` ;

-- -----------------------------------------------------
-- Table `battleship`.`high_score`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `battleship`.`high_score` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(3) NOT NULL,
  `score` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;