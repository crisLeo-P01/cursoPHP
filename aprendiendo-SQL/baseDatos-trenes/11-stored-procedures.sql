DELIMITER //
CREATE PROCEDURE
calcular_distancia_entre_lineas(
  IN estacion_uno POINT,
  IN estacion_dos POINT,
  IN metros BOOLEAN
)
BEGIN

  IF metros THEN
    SELECT
    ST_Distance_Sphere(
      estacion_uno, estacion_dos
    ) AS distancia;
  ELSE
    SELECT
    ST_Distance_Sphere(
      estacion_uno, estacion_dos
    ) / 1000 AS distancia;
  
  END IF;

END //

DELIMITER ;

-- Borrar una función PROCEDURE
DROP PROCEDURE calcular_distancia_entre_lineas;

-- Hacer una consulta
CALL calcular_distancia_entre_lineas(POINT(-99.15531278, 19.40749665), POINT(-99.08486724, 19.32025578), false);