
/* SCRIPT FOR CREATE AND FILL TABLES WITH DATA */
DROP DATABASE if EXISTS `veterinary_clinic`;
CREATE DATABASE `veterinary_clinic`;
USE `veterinary_clinic`;
ALTER DATABASE `veterinary_clinic` CHARACTER SET utf8 COLLATE utf8_general_ci;

DROP TABLE IF EXISTS clients;
DROP TABLE IF EXISTS pets;
DROP TABLE IF EXISTS genres;
DROP TABLE IF EXISTS services;
DROP TABLE IF EXISTS services_type;
DROP TABLE IF EXISTS doctors;
DROP TABLE IF EXISTS specializations;

CREATE TABLE clients (
	`id_client` INT NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(20) NOT NULL,
	`surname` VARCHAR(20) NOT NULL,
	`pesel` DECIMAL(11,0) NOT NULL,
	`phone` VARCHAR(20),
	PRIMARY KEY (`id_client`),
	UNIQUE (`pesel`)
) ENGINE=InnoDB;

CREATE TABLE pets (
	`id_pet` INT NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(20) NOT NULL,
	`weight` DECIMAL(6,2) NOT NULL,
	`age` DECIMAL(2,0) NOT NULL,
	`id_client` INT NOT NULL,
	`id_genre` INT NOT NULL,
	PRIMARY KEY (`id_pet`)
 ) ENGINE=InnoDB;


CREATE TABLE genres (
	`id_genre` INT NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(20) NOT NULL,
	PRIMARY KEY (`id_genre`)
)ENGINE=InnoDB;

CREATE TABLE services (
	`id_service` INT NOT NULL AUTO_INCREMENT,
	`date` DATETIME NOT NULL,
	`id_doctor` INT NOT NULL,
	`id_type` INT NOT NULL,
	`id_pet` INT NOT NULL,
	PRIMARY KEY (`id_service`)
)ENGINE=InnoDB;

CREATE TABLE services_type (
	`id_type` Int NOT NULL AUTO_INCREMENT,
	`name` Varchar(20) NOT NULL,
	`price` Decimal(6,2) NOT NULL,
	PRIMARY KEY (`id_type`)
)ENGINE=InnoDB;

CREATE TABLE doctors (
	`id_doctor` INT NOT NULL AUTO_INCREMENT,
	`id_specialization` INT NOT NULL,
	`name` VARCHAR(20) NOT NULL,
	`surname` VARCHAR(20) NOT NULL,
	`identity_code` VARCHAR(20) NOT NULL,
	`password` VARCHAR(20) NOT NULL,
	PRIMARY KEY (`id_doctor`),
	UNIQUE (`identity_code`)
)ENGINE=InnoDB;


CREATE TABLE specializations (
	`id_specialization` Int NOT NULL AUTO_INCREMENT,
	`name` Varchar(20) NOT NULL,
	PRIMARY KEY (`id_specialization`)
)ENGINE=InnoDB;

ALTER TABLE pets ADD FOREIGN KEY (id_client) REFERENCES clients (id_client) ON DELETE CASCADE;
ALTER TABLE pets ADD FOREIGN KEY (id_genre) REFERENCES genres (id_genre) ON DELETE CASCADE;
ALTER TABLE services ADD FOREIGN KEY (id_pet) REFERENCES pets (id_pet) ON DELETE CASCADE;
ALTER TABLE services ADD FOREIGN KEY (id_type) REFERENCES services_type (id_type) ON DELETE CASCADE;
ALTER TABLE services ADD FOREIGN KEY (id_doctor) REFERENCES doctors (id_doctor) ON DELETE CASCADE;
ALTER TABLE doctors ADD FOREIGN KEY (id_specialization) REFERENCES specializations (id_specialization) ON DELETE CASCADE;

INSERT INTO `clients` (`id_client`, `name`, `surname`, `pesel`, `phone`) VALUES
(1, 'Monika', 'Kaszubska', '90090515836', '421335779'),
(2, 'Daniel', 'Majadek', '92071314764', '667070011'),
(3, 'Krystian', 'Krawczyk', '90080517455', '881315116'),
(4, 'Ewelina', 'Krystyniewicz', '81100216357', '612246799'),
(5, 'Janusz', 'Polak', '210129412', '812435511'),
(6, 'Izabela', 'Ratajczyk', '97012544802', '821146755'),
(7, 'Marcin', 'Lewandowski', '94011063505', '611444122'),
(8, 'Robert', 'Jotpewicz', '95031107811', '993423184'),
(9, 'Kinga', 'Kazimierczak', '95090256611', '709906112'),
(10, 'Adam', 'Adamczyk', '92121978018', '331656554'),
(11, 'Doda', 'Robak', '93221968018', '5151212'),
(12, 'Krystyna', 'Borupczak', '1990294822', '123456789');

INSERT INTO `genres` (`id_genre`, `name`) VALUES
(1, 'Kot'),
(2, 'Pies'),
(3, 'Kaczka'),
(4, 'Królik'),
(5, 'Ptak'),
(6, 'Kon'),
(7, 'Koza'),
(8, 'Owca'),
(9, 'Swinia'),
(10, 'Krowa');

INSERT INTO `pets` (`id_pet`, `name`, `weight`, `age`, `id_client`, `id_genre`) VALUES
(1, 'tosia', '1.20', '1', 2, 2),
(2, 'stachu', '2.30', '1', 1, 1),
(3, 'snieszka', '2.10', '1', 1, 1),
(4, 'reksio', '35.00', '3', 3, 7),
(5, 'bark', '65.00', '4', 4, 10),
(6, 'berek', '38.50', '3', 5, 9),
(7, 'stefania', '3.20', '2', 6, 3),
(8, 'stefcia', '2.60', '1', 6, 5),
(9, 'mysia', '0.50', '1', 7, 4),
(10, 'tiny', '26.60', '4', 8, 8),
(11, 'kekxia', '23.40', '4', 9, 7),
(12, 'pegas', '11.60', '1', 10, 6),
(13, 'fluffy', '2.70', '2', 4, 3),
(14, 'merida', '1.10', '6', 4, 4),
(15, 'azor', '6.50', '8', 2, 2);

INSERT INTO `specializations` (`id_specialization`, `name`) VALUES
(1, 'Rozród'),
(2, 'Higiena'),
(3, 'Choroby'),
(4, 'Chirurgia'),
(5, 'Ogólny');

INSERT INTO `doctors` (`id_doctor`, `id_specialization`, `name`, `surname`, `identity_code`, `password`) VALUES
(1, 1, 'Krystian', 'Wiercidrucinski', '222137', 'doda'),
(2, 2, 'Ilona', 'Pokyczynska', '133756', 'deska'),
(3, 3, 'Anna', 'Pogorzela', '661328', 'haxor'),
(4, 3, 'Daniel', 'Nosacz', '441891', 'voxfm'),
(5, 4, 'Andrzej', 'Mietkowiak', '112210', 'kefir'),
(6, 5, 'Arkadiusz', 'Bobaszak', '331671', 'kokx'),
(7, 5, 'Natalia', 'Zawada', '117901', 'mikkel'),
(8, 5, 'Patrycja', 'Harlem', '421124', 'kebab'),
(9, 4, 'Bogdan', 'Herlidk', '653331', 'kreatyna'),
(10, 5, 'Janusz', 'Tracz', '117236', 'hexaa'),
(11, 2, 'Joanna', 'Tyranowska', '123456', 'ef798753f9319a013271');

INSERT INTO `services_type` (`id_type`, `name`, price) VALUES
(1, 'Sterylizacja', '80.00'),
(2, 'Odrobaczenie', '30.00'),
(3, 'Wizyta kontrolna', '30.00'),
(4, 'Zabieg chirurgiczny', '350.00'),
(5, 'Glaskanie', '90.00');

INSERT INTO `services` (`id_service`, `date`, `id_doctor`, `id_type`, `id_pet`) VALUES
(1, '2018-02-15 08:20:00', 1, 1, 4),
(2, '2018-02-06 13:00:00', 1, 1, 5),
(3, '2019-02-04 09:30:00', 7, 3, 1),
(4, '2019-02-17 00:00:00', 2, 5, 4),
(5, '2020-02-09 16:16:00', 3, 3, 3),
(6, '2022-02-03 08:00:00', 8, 5, 2),
(7, '2022-02-22 14:00:00', 2, 3, 9),
(8, '2022-02-21 10:00:00', 2, 5, 7),
(9, '2022-02-17 09:30:00', 1, 2, 4),
(10, '2022-02-04 08:00:00', 1, 3, 6),
(11, '2022-02-04 14:00:00', 6, 3, 6),
(12, '2022-02-04 10:00:00', 4, 3, 9),
(13, '2022-02-04 10:00:00', 5, 4, 8),
(14, '2022-02-04 16:00:00', 7, 5, 8),
(15, '2022-02-06 08:45:00', 2, 2, 2),
(16, '2022-02-04 12:00:00', 1, 1, 1);