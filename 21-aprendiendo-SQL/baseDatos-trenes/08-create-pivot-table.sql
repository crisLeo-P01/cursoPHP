CREATE TABLE `lineas_estaciones` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,

  `linea_id` BIGINT(20) UNSIGNED NOT NULL,
  `estacion_id` BIGINT(20) UNSIGNED NOT NULL,

  `creado_en` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `actualizado_en` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,

  PRIMARY KEY(id),
  CONSTRAINT `lineas_estaciones_linea_id_foreign`
  FOREIGN KEY(`linea_id`) REFERENCES `lineas`(`id`),

  CONSTRAINT `lineas_estaciones_estacion_id_foreign`
  FOREIGN KEY(`estacion_id`) REFERENCES `estaciones`(`id`)
)
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_unicode_ci;