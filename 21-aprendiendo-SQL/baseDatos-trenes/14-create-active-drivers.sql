CREATE TABLE `conductores_activos` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,

  `conductor_id` BIGINT(20) UNSIGNED NOT NULL,

  `creado_en` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `actualizado_en` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,

  PRIMARY KEY (id),
  CONSTRAINT `conductores_activos_id_foreign`
  FOREIGN KEY(`conductor_id`) REFERENCES `conductores`(`id`)

) 
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_unicode_ci;