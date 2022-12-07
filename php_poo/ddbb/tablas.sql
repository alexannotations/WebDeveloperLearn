CREATE DATABASE finanzas_personales 
  CHARACTER SET = 'utf8mb4'
  COLLATE = 'utf8mb4_unicode_ci';

USE finanzas_personales;

CREATE TABLE `finanzas_personales`.`incomes` 
( 
    `id` SERIAL,
    `payment_method` TINYINT NOT NULL ,
    `type` TINYINT NOT NULL ,
    `date` TIMESTAMP NOT NULL ,
    `amount` FLOAT NOT NULL ,
    `description` TEXT NOT NULL ,
    `create_reg` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `update_reg` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

CREATE TABLE `finanzas_personales`.`withdrawals` 
( 
    `id` SERIAL,
    `payment_method` TINYINT NOT NULL ,
    `type` TINYINT NOT NULL ,
    `date` TIMESTAMP NOT NULL ,
    `amount` FLOAT NOT NULL ,
    `description` TEXT NOT NULL ,
    `create_reg` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `update_reg` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;
