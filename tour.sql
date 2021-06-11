

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE `tour`.`contactus` ( 
    `id` INT(10) NOT NULL AUTO_INCREMENT ,
    `name` VARCHAR(50) NOT NULL , 
    `email` VARCHAR(50) NOT NULL ,
    `number` VARCHAR(50) NOT NULL ,
    `message` VARCHAR(255) NOT NULL ,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

