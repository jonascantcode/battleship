-- -----------------------------------------------------
-- Scheme battlship
-- -----------------------------------------------------
CREATE DATABASE IF NOT EXISTS `battleship` DEFAULT CHARACTER SET utf8 COLLATE utf8_danish_ci ;


-- -----------------------------------------------------
-- Table `battleship`.`high_score`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `battleship`.`high_score` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(3) NOT NULL,
  `score` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `battleship`.`faq` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(56) NOT NULL,
  `question` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;