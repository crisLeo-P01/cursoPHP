SELECT * FROM usuarios WHERE id IN(SELECT usuario_id FROM entradas);
SELECT * FROM usuarios WHERE id NOT IN(SELECT usuario_id FROM entradas);

# EJEMPLO
# Sacar los usuarios que tengan alguna entrada que en su título hable de EA /////////////
SELECT nombre, apellidos FROM usuarios WHERE id 
  IN (SELECT usuario_id FROM entradas WHERE descripcion LIKE "%EA%");

#Sacar todas las entradas de la categoría deportes utilizando su nombre /////////////
SELECT categoria_id, titulo FROM entradas WHERE categoria_id 
  IN( SELECT id FROM categorias WHERE nombre = 'deportes' );

# Mostrar las categorías con mas de 3 o mas entradas; /////////////
SELECT nombre FROM categorias WHERE id
  IN( SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT( categoria_id ) > 3 );

# Mostrar los usuarios que crearon una entrada un martes /////////////
SELECT nombre, apellidos FROM usuarios WHERE id
  IN( SELECT usuario_id FROM entradas WHERE  DAYOFWEEK(fecha) = 3 );


# Mostrar el nombre del usuario que tenga más entradas /////////////
SELECT CONCAT( nombre, ' ', apellidos ) AS 'El usuario con mas entradas' FROM usuarios WHERE id =
  ( SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1 );

# Mostrar las categorías sin descripción /////////////
SELECT * FROM categorias WHERE id
  NOT IN ( SELECT categoria_id FROM entradas );
