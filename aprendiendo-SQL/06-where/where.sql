SELECT * FROM usuarios WHERE email = admin@admin.com;

/*
OPERADORES DE COMPARACIÓN
Igual             =
Distinto          !=
Menor             <
Mayor             >
Menor o igual     <=
Mayor o igual     >=
Entre             between A and B
En                in
Es nulo           is null
No nulo           is not null
Como              like
No es como        not like
*/

/*
  OPERADORES LÓGICOS
  O       OR
  Y       AND
  NO      NOT
*/

/*
COMODINES
Cualquier cantidad de carácteres : %
Un carácarter desconocido: _
*/

#EJEMPLOS#

#1. Mostrar nombre y apellido de todos los usuarios registrados en 2019
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) = 2019;

#2. Mostrar nombre y apellido de todos los usuarios que NO se registrados en 2019
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) != 2019 OR ISNULL(fecha);

#3. Mostrar el email de los usuarios cuyo apellido contenga la letra A y además que su cotraseña sea 1234
SELECT email FROM usuarios WHERE apellidos LIKE'%an%' AND password = '1234';

#4. Sacar todos los registros de la tabla usuarios cuyo año sea PAR
SELECT * FROM usuarios WHERE (YEAR(fecha)%2 = 0); # si es impar sería %2 != 0

#5 Sacar todos los registros de la tabla usuarios cuyo nombre tenga más de
# cinco letras y que se hayan registrados antes de 2022, y mostrar el nombre en mayus

SELECT UPPER(nombre) AS 'Nombre', apellidos FROM usuarios WHERE LENGTH(nombre) > 5 AND YEAR(fecha) < 2020;