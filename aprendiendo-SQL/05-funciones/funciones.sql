# FUNCIONES MATEMATICAS #
SELECT CEIL(7.89) AS 'Operaciones' FROM usuarios; # redondea para arriba
SELECT FLOOR(7.89) AS 'Operaciones' FROM usuarios; # redondea para abajo
SELECT ABS(-7.14) AS 'Operaciones' FROM usuarios; # convierte todo numero negativo en positivo
SELECT ROUND(3.51) AS 'Operaciones' FROM usuarios; # devuelve el valor de X redondeado al entero más cercano a él.

# FUNCIONES DE TEXTOS #
SELECT UPPER(nombre) FROM usuarios;
SELECT LOWER(nombre) FROM usuarios;
SELECT LENGHT(nombre) FROM usuarios;
SELECT CONCAT(id, ' ', nombre) FROM usuarios;

# FUNCIONES PARA FECHAS #

# muestra la fecha actual
SELECT email, fecha, CURDATE() AS 'fecha actual' FROM usuarios;

# muestra la cantidad de dias que pasaron del registro a la fecha actual
SELECT email, DATADIFF(fecha, CURDATE()) AS 'fecha actual' FROM usuarios;

# muestra el día que se registro el usuario
SELECT email, DAYNAME(fecha) AS 'fecha actual' FROM usuarios;

# muestra el día(número) que se registro el usuario
SELECT email, DAYOFMONTH(fecha) AS 'fecha actual' FROM usuarios;

# muestra el día(número) de la semana que se registro el usuario
SELECT email, DAYOFWEEK(fecha) AS 'fecha actual' FROM usuarios;

# muestra el día(número) del año que se registro el usuario
SELECT email, DAYOFYEAR(fecha) AS 'fecha actual' FROM usuarios;

# muestra el mes(número) que se registro el usuario
SELECT email, MONTH(fecha) AS 'fecha actual' FROM usuarios;

# muestra el año(número) que se registro el usuario
SELECT email, YEAR(fecha) AS 'fecha actual' FROM usuarios;

# muestra el dia(número) que se registro el usuario
SELECT email, DAY(fecha) AS 'fecha actual' FROM usuarios;

# muestra el horario actual
SELECT email, CURTIME() AS 'fecha actual' FROM usuarios;

# muestra el horario y fecha actual del servidor
SELECT email, SYSDATE() AS 'fecha actual' FROM usuarios;

# Le damos el formato de fecha que prefiramos.
SELECT email, DATE_FORMAT(fecha, %d-%m-%Y) AS 'fecha actual' FROM usuarios;

# Nuestra si un elemento es nulo o no. (1) es nulo, (0) no es nulo.
SELECT email, ISNULL(apellidos) FROM usuarios; 


# Comprueba si los elementos a comprobar son iguales
SELECT email, STRCMP('hola', 'hola') FROM usuarios;

# Comprueba si un campo esta vació y la opción de especficarlo
SELECT email, IFNULL(apellidos, 'este campo esta vacio') FROM usuarios;