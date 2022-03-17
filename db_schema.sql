CREATE TABLE IF NOT EXISTS `doctors` (
    `idDoctors` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(45) NOT NULL,
    `lastname` VARCHAR(45) NOT NULL,
    `crm` INT NOT NULL,
    `category` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`idDoctors`)
) ENGINE = InnoDB;