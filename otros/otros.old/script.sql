-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema Projecte
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Projecte
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Projecte` ;
USE `Projecte` ;

-- -----------------------------------------------------
-- Table `Projecte`.`Alumnes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Projecte`.`Alumnes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(45) NOT NULL,
  `nom` VARCHAR(45) NOT NULL,
  `cognoms` VARCHAR(60) NOT NULL,
  `dni` CHAR(9) NOT NULL,
  `tutor_dni` CHAR(9) NULL,
  `imatge` VARCHAR(45) NULL,
  `dataNaixement` DATE NOT NULL,
  `contrasenya` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE,
  UNIQUE INDEX `dni_UNIQUE` (`dni` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Projecte`.`Inventari`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Projecte`.`Inventari` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(30) NOT NULL,
  `marca` VARCHAR(30) NULL,
  `model` VARCHAR(30) NULL,
  `Alumnes_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Inventari_Alumnes1_idx` (`Alumnes_id` ASC) VISIBLE,
  CONSTRAINT `fk_Inventari_Alumnes1`
    FOREIGN KEY (`Alumnes_id`)
    REFERENCES `Projecte`.`Alumnes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Projecte`.`Professors`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Projecte`.`Professors` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NOT NULL,
  `cognoms` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `imatge` VARCHAR(45) NULL,
  `contrasenya` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Projecte`.`Classe`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Projecte`.`Classe` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Nom` VARCHAR(45) NULL,
  `Ubicacio` VARCHAR(45) NULL,
  `Dia` VARCHAR(3) NOT NULL,
  `Hora` VARCHAR(45) NOT NULL,
  `Alumnes_id` INT NOT NULL,
  `Professors_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Classe_Alumnes1_idx` (`Alumnes_id` ASC) VISIBLE,
  INDEX `fk_Classe_Professors1_idx` (`Professors_id` ASC) VISIBLE,
  CONSTRAINT `fk_Classe_Alumnes1`
    FOREIGN KEY (`Alumnes_id`)
    REFERENCES `Projecte`.`Alumnes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Classe_Professors1`
    FOREIGN KEY (`Professors_id`)
    REFERENCES `Projecte`.`Professors` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
