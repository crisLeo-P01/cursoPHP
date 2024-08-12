DELIMITER //
CREATE PROCEDURE get_linea_estaciones(
  IN linea_nombre VARCHAR(15)
)
BEGIN
  -- Esta es una forma de guardar valores de una consulta dentro de una variable
  DECLARE linea_id BIGINT(20);

  SELECT id
  INTO linea_id
  FROM `lineas`
  WHERE nombre = linea_nombre
  COLLATE utf8mb4_unicode_ci;

  -- Esta es otra Forma de guardar valores de una consulta dentro de una variable
  SET @sql = CONCAT("
    SELECT
      `lineas_estaciones`.`id` AS relacion_id,
      `lineas`.`nombre` AS linea_nombre,
      `estaciones`.`nombre` AS estacion_nombre
    FROM `lineas_estaciones`
    INNER JOIN `estaciones`
    ON `estaciones`.`id` = `lineas_estaciones`.`estacion_id`
    INNER JOIN `lineas`
    ON `lineas`.`id` = `lineas_estaciones`.`linea_id`
    WHERE `lineas_estaciones`.`linea_id` = ", linea_id
  );

  PREPARE stmt FROM @sql;
  EXECUTE stmt;
  DEALLOCATE PREPARE stmt;

END //
DELIMITER ;



CALL get_linea_estaciones("Linea 9");