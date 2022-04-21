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
DROP SCHEMA IF EXISTS `Projecte` ;

-- -----------------------------------------------------
-- Schema Projecte
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Projecte` ;
USE `Projecte` ;

-- -----------------------------------------------------
-- Table `Projecte`.`Tipus`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Projecte`.`Tipus` ;

CREATE TABLE IF NOT EXISTS `Projecte`.`Tipus` (
  `id` INT NOT NULL,
  `Nom` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `Nom_UNIQUE` (`Nom` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Projecte`.`Usuari`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Projecte`.`Usuari` ;

CREATE TABLE IF NOT EXISTS `Projecte`.`Usuari` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `nom` VARCHAR(45) NOT NULL,
  `cognoms` VARCHAR(60) NOT NULL,
  `dni` CHAR(9) NULL,
  `tutor_dni` CHAR(9) NULL,
  `imatge` VARCHAR(45) NOT NULL,
  `dataNaixement` DATE NULL,
  `contrasenya` VARCHAR(255) NOT NULL,
  `Tipus_id` INT NOT NULL,
  PRIMARY KEY (`id`, `Tipus_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE,
  INDEX `fk_Usuari_Tipus1_idx` (`Tipus_id` ASC) VISIBLE,
  CONSTRAINT `fk_Usuari_Tipus1`
    FOREIGN KEY (`Tipus_id`)
    REFERENCES `Projecte`.`Tipus` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Projecte`.`Inventari`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Projecte`.`Inventari` ;

CREATE TABLE IF NOT EXISTS `Projecte`.`Inventari` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(30) NOT NULL,
  `marca` VARCHAR(30) NULL,
  `model` VARCHAR(30) NULL,
  `Usuari_id` INT NOT NULL,
  `localitzacio` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Inventari_Usuari1_idx` (`Usuari_id` ASC) VISIBLE,
  CONSTRAINT `fk_Inventari_Usuari1`
    FOREIGN KEY (`Usuari_id`)
    REFERENCES `Projecte`.`Usuari` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Projecte`.`Any`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Projecte`.`Any` ;

CREATE TABLE IF NOT EXISTS `Projecte`.`Any` (
  `idAny` VARCHAR(10) NOT NULL,
  `actual` TINYINT NOT NULL,
  PRIMARY KEY (`idAny`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Projecte`.`Classe`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Projecte`.`Classe` ;

CREATE TABLE IF NOT EXISTS `Projecte`.`Classe` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Nom` VARCHAR(45) NULL,
  `Ubicacio` VARCHAR(45) NULL,
  `Dia` VARCHAR(15) NOT NULL,
  `Hora` VARCHAR(45) NOT NULL,
  `Contingut` VARCHAR(1000) NULL,
  `imatge` VARCHAR(45) NOT NULL,
  `Any_idAny` INT NOT NULL,
  PRIMARY KEY (`id`, `Any_idAny`),
  INDEX `fk_Classe_Any1_idx` (`Any_idAny` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Projecte`.`Grup`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Projecte`.`Grup` ;

CREATE TABLE IF NOT EXISTS `Projecte`.`Grup` (
  `id_grup` INT NOT NULL,
  `nom` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_grup`),
  UNIQUE INDEX `nom_UNIQUE` (`nom` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Projecte`.`Esdeveniment`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Projecte`.`Esdeveniment` ;

CREATE TABLE IF NOT EXISTS `Projecte`.`Esdeveniment` (
  `id` INT NOT NULL,
  `nom` VARCHAR(45) NOT NULL,
  `data` VARCHAR(45) NOT NULL,
  `Descripcio` VARCHAR(250) NULL,
  `localitzacio` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Projecte`.`Grup_has_Esdeveniment`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Projecte`.`Grup_has_Esdeveniment` ;

CREATE TABLE IF NOT EXISTS `Projecte`.`Grup_has_Esdeveniment` (
  `Grup_id_grup` INT NOT NULL,
  `Esdeveniment_id` INT NOT NULL,
  PRIMARY KEY (`Grup_id_grup`, `Esdeveniment_id`),
  INDEX `fk_Grup_has_Esdeveniment_Esdeveniment1_idx` (`Esdeveniment_id` ASC) VISIBLE,
  INDEX `fk_Grup_has_Esdeveniment_Grup1_idx` (`Grup_id_grup` ASC) VISIBLE,
  CONSTRAINT `fk_Grup_has_Esdeveniment_Grup1`
    FOREIGN KEY (`Grup_id_grup`)
    REFERENCES `Projecte`.`Grup` (`id_grup`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Grup_has_Esdeveniment_Esdeveniment1`
    FOREIGN KEY (`Esdeveniment_id`)
    REFERENCES `Projecte`.`Esdeveniment` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Projecte`.`Usuari_has_Classe`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Projecte`.`Usuari_has_Classe` ;

CREATE TABLE IF NOT EXISTS `Projecte`.`Usuari_has_Classe` (
  `Usuari_id` INT NOT NULL,
  `Classe_id` INT NOT NULL,
  PRIMARY KEY (`Usuari_id`, `Classe_id`),
  INDEX `fk_Usuari_has_Classe_Classe1_idx` (`Classe_id` ASC) VISIBLE,
  INDEX `fk_Usuari_has_Classe_Usuari1_idx` (`Usuari_id` ASC) VISIBLE,
  CONSTRAINT `fk_Usuari_has_Classe_Usuari1`
    FOREIGN KEY (`Usuari_id`)
    REFERENCES `Projecte`.`Usuari` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Usuari_has_Classe_Classe1`
    FOREIGN KEY (`Classe_id`)
    REFERENCES `Projecte`.`Classe` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Projecte`.`Usuari_has_Grup`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Projecte`.`Usuari_has_Grup` ;

CREATE TABLE IF NOT EXISTS `Projecte`.`Usuari_has_Grup` (
  `Usuari_id` INT NOT NULL,
  `Grup_id_grup` INT NOT NULL,
  PRIMARY KEY (`Usuari_id`, `Grup_id_grup`),
  INDEX `fk_Usuari_has_Grup_Grup1_idx` (`Grup_id_grup` ASC) VISIBLE,
  INDEX `fk_Usuari_has_Grup_Usuari1_idx` (`Usuari_id` ASC) VISIBLE,
  CONSTRAINT `fk_Usuari_has_Grup_Usuari1`
    FOREIGN KEY (`Usuari_id`)
    REFERENCES `Projecte`.`Usuari` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Usuari_has_Grup_Grup1`
    FOREIGN KEY (`Grup_id_grup`)
    REFERENCES `Projecte`.`Grup` (`id_grup`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Projecte`.`Grup_has_Classe`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Projecte`.`Grup_has_Classe` ;

CREATE TABLE IF NOT EXISTS `Projecte`.`Grup_has_Classe` (
  `Grup_id_grup` INT NOT NULL,
  `Classe_id` INT NOT NULL,
  PRIMARY KEY (`Grup_id_grup`, `Classe_id`),
  INDEX `fk_Grup_has_Classe_Classe1_idx` (`Classe_id` ASC) VISIBLE,
  INDEX `fk_Grup_has_Classe_Grup1_idx` (`Grup_id_grup` ASC) VISIBLE,
  CONSTRAINT `fk_Grup_has_Classe_Grup1`
    FOREIGN KEY (`Grup_id_grup`)
    REFERENCES `Projecte`.`Grup` (`id_grup`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Grup_has_Classe_Classe1`
    FOREIGN KEY (`Classe_id`)
    REFERENCES `Projecte`.`Classe` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Projecte`.`Noticia`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Projecte`.`Noticia` ;

CREATE TABLE IF NOT EXISTS `Projecte`.`Noticia` (
  `idNoticia` INT NOT NULL,
  `Titol` VARCHAR(45) NOT NULL,
  `Cos` VARCHAR(100) NULL,
  `Caducitat` DATE NOT NULL,
  PRIMARY KEY (`idNoticia`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
