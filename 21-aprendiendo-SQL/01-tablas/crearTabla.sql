/*
EN CONSOLA DE MYSQL
Mostrar todas las base de datos -> show databases;
Entrar a una base de datos -> use nombre_basededatos;
Mostrar todas las tablas -> show tables;
Mostrar el contenido de la tabla -> describe nombre_tabla;
*/

/*
TIPOS DE DATOS

int(num cifras)                       ENTERO
integer(num cifras)                   ENTERO (maximo 4294967295)
varchar(num caracteres)               STRING / ALFANUMERICO (maximo 255)
char (num caracteres)                 STRING /ALFANUMERICO
float (num cifras, num decimales)     DECIMAL / COMA FLOTANTE
date, time, timestamp

// STRING MAS GRANDES
TEXT 655356 caracteres
MEDIUMTEXT 16 millones
LONGTEST 4 billones de caracteres

// ENTEROS MAS GRANDES
MEDIUMINT
BIGINT
*/

/* CREANDO TABLA  */
CREATE TABLE usuarios (
  id          int(11) auto_increment not null,
  nombre      varchar(100) not null,
  apellidos   varchar(255) not null,
  email       varchar(100) default 'hola que tal',
  password    varchar(255),
  CONSTRAINT pk_usuarios PRIMARY KEY(id)
);