CREATE TABLE usuarios (
  id            int(255) auto_increment not null,
  nombre        varchar(255) not null,
  apellidos     varchar(255) not null,
  email         varchar(255) not null,
  password      varchar(255) not null,
  fecha         date not null,
  CONSTRAINT pk_usuarios PRIMARY KEY(id), -- REFETENCIA 1
  CONSTRAINT uq_email UNIQUE(email)
) ENGINE=InnoDB;

-- REFETENCIA 1 -> CONSTRAINT se usa para definir reglas para permitir o restringir 
-- qué valores se pueden almacenar en columnas. El propósito de inducir restricciones es 
-- reforzar la integridad de una base de datos.

-- ///////////////////////////////////

CREATE TABLE categorias (
  id        int(255) auto_increment not null,
  nombre    varchar(100),
  CONSTRAINT pk_categorias PRIMARY KEY(id)
) ENGINE=InnoDB; -- REFERENCIA 2

-- REFERENCIA 2 -> el motor de almacenamiento InnoDB. La principal ventaja de este motor recae 
-- en la seguridad de las operaciones. InnoDB permite la ejecución de transacciones, esto nos 
-- garantiza que los datos se persisten de forma correcta y si existe algún, error podamos revertir 
-- todos los cambios realizados.

-- ///////////////////////////////////

CREATE TABLE entradas (
  id              int(255) auto_increment not null,
  usuario_id      int(255) not null,
  categoria_id    int(255) not null,
  titulo          varchar(255) not null,
  descripcion     MEDIUMTEXT,
  fecha           date not null,
  CONSTRAINT pk_entradas PRIMARY KEY(id),
  CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
  CONSTRAINT fk_entrada_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- INFO GENERAL ////////////////
-- Las RESTRICCIONES de MySQL se utilizan para limitar el tipo de datos que se pueden insertar en una tabla.

-- Las RESTRICCIONES de MySQL se pueden clasificar en dos tipos: nivel de columna y nivel de tabla.

-- Las restricciones de nivel de columna se pueden aplicar solo a una columna, mientras que 
-- las restricciones de nivel de tabla se aplican a toda la tabla.

-- MySQL CONSTRAINT se declara en el momento de crear una tabla.

-- Las RESTRICCIONES de MySQL son: ///////////////////////

-- NOT NULL -> la restricción NOT NULL permite especificar que una columna no puede contener 
-- ningún valor NULL. MySQL NOT NULL se puede usar para CREATE y ALTER una tabla.

-- UNIQUE -> La restricción UNIQUE en MySQL no permite insertar un valor duplicado en una 
-- columna. La restricción UNIQUE mantiene la unicidad de una columna en una tabla. 
-- Se puede usar más de una columna UNIQUE en una tabla.

-- PRIMARY KEY -> Una restricción PRIMARY KEY para una tabla obliga a la tabla a 
-- aceptar datos únicos para una columna específica y esta restricción crea un 
--índice único para acceder a la tabla más rápido.

-- FOREIGN KEY -> Una FOREIGN KEY en MySQL crea un enlace entre dos tablas por una 
-- columna específica de ambas tablas. La columna especificada en una tabla debe ser 
-- una PRIMARY KEY y debe estar referenciada por la columna de otra tabla conocida como FOREIGN KEY.

-- CHECK -> Una restricción CHECK controla los valores en la columna asociada. La restricción CHECK 
--determina si el valor es válido o no a partir de una expresión lógica.

-- DEFAULT -> En una tabla MySQL, cada columna debe contener un valor (incluido un NULL). 
-- Al insertar datos en una tabla, si no se proporciona ningún valor a una columna, 
-- la columna obtiene el valor establecido como DEFAULT.