-- Calcula distancia en metros
SELECT
ST_Distance_Sphere(
  POINT(-99.10554171, 19.48231101),
  POINT(-99.15531278, 19.40749665)
) AS distance;

-- Calcula distancia en kilómetros
SELECT
ST_Distance_Sphere(
  POINT(-99.10554171, 19.48231101),
  POINT(-99.15531278, 19.40749665)
) / 1000 AS distance;

-- Calculas distancias con consultas anidadas
SELECT
ST_Distance_Sphere(
  (
    SELECT `localizaciones`.`localizacion`
    FROM `localizaciones`
    INNER JOIN `estaciones`
    ON `estaciones`.`id` = `localizaciones`.`estacion_id`
    WHERE `estaciones`.`nombre` = "Balderas"
  ),
  (
    SELECT `localizaciones`.`localizacion`
    FROM `localizaciones`
    INNER JOIN `estaciones`
    ON `estaciones`.`id` = `localizaciones`.`estacion_id`
    WHERE `estaciones`.`nombre` = "Pino Suarez"
  )
) / 1000 AS distancia;