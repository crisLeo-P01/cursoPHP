CREATE TABLE `localizaciones` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `estacion_id` BIGINT(20) UNSIGNED NOT NULL,
  `localizacion` POINT NOT NULL,

  `creado_en` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `actualizado_en` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,

  PRIMARY KEY (id),
  CONSTRAINT `localizaciones_estacion_id_foreign`
  FOREIGN KEY (`estacion_id`) REFERENCES `estaciones` (`id`)
)
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_unicode_ci;