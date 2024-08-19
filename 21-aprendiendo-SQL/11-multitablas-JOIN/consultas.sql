/*
CONSULTAS MULTITABLAS
Son consultas que sirven para consultar varias tablas en una sola sentencia
*/

/*
INNER JOIN
Hace coincidir cada fila de una tabla con cada fila de otras tablas 
y le permite consultar filas que contienen columnas de ambas tablas
*/

# Mostrarlas entradas co el nombre del autor y el nombre de la categoría
SELECT e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria'
  FROM entradas e, usuarios u, categorias c
  WHERE e.usuario_id = u.id AND e.categoria_id = c.id;

# INNER JOIN
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria'
  FROM entradas e
  INNER JOIN usuarios u ON e.usuario_id = u.id
  INNER JOIN categorias c ON e.categoria_id = c.id;

# ////////////////////////

# Mostrar el nombre de las categorias y al lado cuantas entradas tienen
SELECT c.nombre AS 'Categorias', COUNT(e.id) AS 'Cantidad entradas'
  FROM categorias c, entradas e
  WHERE e.categoria_id = c.id GROUP BY e.categoria_id;

# INNER JOIN - LEFT
SELECT c.nombre AS 'Categorias', COUNT(e.id) AS 'Cantidad entradas'
  FROM categorias c
  LEFT JOIN entradas e ON e.categoria_id = c.id
  GROUP BY e.categoria_id;

# INNER JOIN - RIGHT
SELECT c.nombre AS 'Categorias', COUNT(e.id) AS 'Cantidad entradas'
  FROM entradas e
  RIGHT JOIN categorias c ON e.categoria_id = c.id
  GROUP BY e.categoria_id;

# ////////////////////////
SELECT c.nombre AS 'Categorias', COUNT(e.id) AS 'Cantidad entradas'
  FROM categorias c, entradas e
  WHERE e.categoria_id = c.id;

# INNER JOIN
SELECT c.nombre AS 'Categorias', COUNT(e.id) AS 'Cantidad entradas'
  RIGHT JOIN categorias c ON e.categoria_id = c.id; 

# ////////////////////////
# Mostrar el email de los usuarios y al lado cuantas entradas tienen
SELECT u.email AS 'Email del usuario', COUNT(e.id) AS 'Cantidad entradas'
  FROM usuarios u, entradas e
  WHERE e.usuario_id = u.id GROUP BY e.usuario_id;