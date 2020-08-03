CREATE DATABASE publications;

USE publications;

GRANT ALL ON publications.* TO 'vladimir@localhost' IDENTIFIED BY 'Newage-77';

CREATE TABLE classics (
author VARCHAR(128),
title VARCHAR(128),
type VARCHAR(16),
year CHAR(4)) ENGINE MyISAM;

DESCRIBE classics;

ALTER TABLE classics ADD id INT UNSIGNED NOT NULL AUTO_INCREMENT KEY;

ALTER TABLE classics DROP id;