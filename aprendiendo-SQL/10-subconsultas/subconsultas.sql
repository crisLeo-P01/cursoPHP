SELECT * FROM usuarios WHERE id IN(SELECT usuario_id FROM entradas);
SELECT * FROM usuarios WHERE id NOT IN(SELECT usuario_id FROM entradas);