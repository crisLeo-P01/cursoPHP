DELETE FROM `estaciones_fake`;

TRUNCATE TABLE `estaciones_fake`; 

CREATE TABLE `estaciones_fake` (
    `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,

  `nombre` VARCHAR(50) NOT NULL,

  `creado_en` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `actualizado_en` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,

  PRIMARY KEY (id)
) 
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_unicode_ci;

INSERT INTO `estaciones_fake` (nombre) VALUES
("Lázaro Cárdens"), -- Lázaro Cárdenas
("Ferería"), -- Ferrería 
("Pnttlán"), -- Pantitlán
("Tauga"), -- Tacuba
("MartínCrrera"), -- Martín Carrera
("Santa Anita"),
("Villa de Aragón"),
("Tezozómoc");