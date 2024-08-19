-- ==================================
-- CREANDO LA BASE DE DATOS
-- ==================================
CREATE DATABASE finanzas_personales;

-- ==================================
-- CREANDO LA TABLA RETIROS
-- ==================================
CREATE TABLE `retiros` (
  `retirosID` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,

  `metodo_pago` TINYINT(4) NOT NULL,
  `tipo` TINYINT(4) NOT NULL,

  `monto` FLOAT NOT NULL DEFAULT 0,
  `descripcion` TEXT NOT NULL,

  `creado_en` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `actualizado_en` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

  PRIMARY KEY(retirosID)
)
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_unicode_ci;


-- ==================================
-- CREANDO LA TABLA INGRESOS
-- ==================================
CREATE TABLE `ingresos` (
  `ingresosID` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,

  `metodo_pago` TINYINT(4) NOT NULL,
  `tipo` TINYINT(4) NOT NULL,

  `monto` FLOAT NOT NULL DEFAULT 0,
  `descripcion` TEXT NOT NULL,

  `creado_en` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `actualizado_en` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

  PRIMARY KEY(ingresosID)
)
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_unicode_ci;

