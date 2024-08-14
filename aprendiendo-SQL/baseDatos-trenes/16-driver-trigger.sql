DELIMITER //
CREATE TRIGGER actualizacion_conductores_activos
AFTER UPDATE
ON `conductores`
FOR EACH ROW
BEGIN

  IF NEW.status = 1 THEN
    INSERT INTO `conductores_activos` (conductor_id) VALUES (NEW.id);
  ELSE
    DELETE FROM `conductores_activos` WHERE conductor_id = NEW.id;
  END IF;

END; //

DELIMITER ;

-- PARA ACTULIZAR EL ESTADO DE UN CONDUCTOR
UPDATE `conductores` SET status = 1 WHERE id=1;