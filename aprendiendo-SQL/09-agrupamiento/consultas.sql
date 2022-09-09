# CONSULTA AGRUPAMIENTO
SELECT COUNT(titulo) AS 'N° de entradas', categoria_id FROM entradas GROUP BY categoria_id;

# CONSULTA AGRUPAMIENTO CON CONDICIONES
SELECT COUNT(titulo) AS 'N° de entradas', categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(titulo) <= 3;

/*
FUNCIONES DE AGRUPAMIENTO
AVG       Sacar la media
COUNT     Contar el número de elementos
MAX       Valor máximo del grupo
MIN       Valor mínimo del grupo
SUM       Sumar todo el contenido del grupo
*/

SELECT AVG(id) AS 'Media de entradas', titulo FROM entradas;
SELECT MAX(id) AS 'Máximo ID', titulo FROM entradas;