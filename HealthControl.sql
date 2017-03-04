-- MySQL Script generated by MySQL Workbench
-- 03/02/17 01:11:25
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema healthcontrol
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema healthcontrol
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `healthcontrol` DEFAULT CHARACTER SET utf8 ;
USE `healthcontrol` ;

-- -----------------------------------------------------
-- Table `healthcontrol`.`usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `healthcontrol`.`usuarios` ;

CREATE TABLE IF NOT EXISTS `healthcontrol`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `login` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `healthcontrol`.`categorias`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `healthcontrol`.`categorias` ;

CREATE TABLE IF NOT EXISTS `healthcontrol`.`categorias` (
  `id` INT NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `healthcontrol`.`medicamentos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `healthcontrol`.`medicamentos` ;

CREATE TABLE IF NOT EXISTS `healthcontrol`.`medicamentos` (
  `id` INT NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `indicacoes` VARCHAR(45) NULL,
  `contra_indicacoes` VARCHAR(45) NULL,
  `qtd` INT UNSIGNED NULL DEFAULT 0,
  `via` VARCHAR(45) NULL,
  `descricao` VARCHAR(45) NULL,
  `categoria_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_medicamentos_categorias_idx` (`categoria_id` ASC),
  CONSTRAINT `fk_medicamentos_categorias`
    FOREIGN KEY (`categoria_id`)
    REFERENCES `healthcontrol`.`categorias` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `healthcontrol`.`pressures`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `healthcontrol`.`pressures` ;

CREATE TABLE IF NOT EXISTS `healthcontrol`.`pressures` (
  `id` INT NOT NULL,
  `usuario_id` INT NOT NULL,
  `data` DATE NOT NULL,
  `valor1` INT NOT NULL,
  `valor2` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `id_idx` (`usuario_id` ASC),
  CONSTRAINT `fk_pressures_usuarios`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `healthcontrol`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `healthcontrol`.`receitas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `healthcontrol`.`receitas` ;

CREATE TABLE IF NOT EXISTS `healthcontrol`.`receitas` (
  `usuarios_id` INT NOT NULL,
  `medicamentos_id` INT NOT NULL,
  `intervalo` INT NULL,
  `dias` INT NULL,
  `diasRestantes` INT NULL,
  PRIMARY KEY (`usuarios_id`, `medicamentos_id`),
  INDEX `fk_usuarios_has_medicamentos_medicamentos1_idx` (`medicamentos_id` ASC),
  INDEX `fk_usuarios_has_medicamentos_usuarios1_idx` (`usuarios_id` ASC),
  CONSTRAINT `fk_usuarios_has_medicamentos_usuarios1`
    FOREIGN KEY (`usuarios_id`)
    REFERENCES `healthcontrol`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuarios_has_medicamentos_medicamentos1`
    FOREIGN KEY (`medicamentos_id`)
    REFERENCES `healthcontrol`.`medicamentos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `healthcontrol`.`pesos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `healthcontrol`.`pesos` ;

CREATE TABLE IF NOT EXISTS `healthcontrol`.`pesos` (
  `id` INT NOT NULL,
  `usuario_id` INT NOT NULL,
  `data` DATE NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_pesos_usuarios_idx` (`usuario_id` ASC),
  CONSTRAINT `fk_pesos_usuarios`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `healthcontrol`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `healthcontrol`.`glicoses`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `healthcontrol`.`glicoses` ;

CREATE TABLE IF NOT EXISTS `healthcontrol`.`glicoses` (
  `id` INT NOT NULL,
  `usuario_id` INT NOT NULL,
  `valor` INT NOT NULL,
  `data` DATE NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_glicoses_usuarios_idx` (`usuario_id` ASC),
  CONSTRAINT `fk_glicoses_usuarios`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `healthcontrol`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SET SQL_MODE = '';
GRANT USAGE ON *.* TO controlUser;
 DROP USER controlUser;
SET SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';
CREATE USER 'controlUser'@'localhost' IDENTIFIED BY '123456';

GRANT ALL ON `healthcontrol`.* TO 'controlUser'@'localhost';

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
