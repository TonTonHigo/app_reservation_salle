CREATE DATABASE app_reservation;
USE app_reservation;

CREATE TABLE `salles` (
	`id_salles` INT NOT NULL AUTO_INCREMENT,
	`numero` INT NOT NULL,
	`date_entree` INT NOT NULL,
	`date_sortie` INT NOT NULL,
	`id_demande` INT NOT NULL,
	PRIMARY KEY (`id_salles`)
);

CREATE TABLE `demande` (
	`id_demande` INT NOT NULL AUTO_INCREMENT,
	`nom` varchar(20) NOT NULL,
	`prenom` varchar(20) NOT NULL,
	`email` varchar(50) NOT NULL,
	`date_entree` DATE NOT NULL,
	`date_sortie` DATE NOT NULL,
	`id_salles` INT NOT NULL,
	PRIMARY KEY (`id_demande`)
);

ALTER TABLE `salles` ADD CONSTRAINT `salles_fk0` FOREIGN KEY (`id_demande`) REFERENCES `demande`(`id_demande`);

ALTER TABLE `demande` ADD CONSTRAINT `demande_fk0` FOREIGN KEY (`id_salles`) REFERENCES `salles`(`id_salles`);



