# INSERTAR NUEVOS REGISTROS #
INSERT INTO usuarios VALUES(null, 'Cristian', 'Paiva', 'cristian@gmail.com', '1234', '2022-08-27');
INSERT INTO usuarios VALUES(null, 'Male', 'Lomazzi', 'male@gmail.com', '1234', '2022-06-05');
INSERT INTO usuarios VALUES(null, 'Emiliano', 'Eggel', 'emiliano@gmail.com', '1234', '2022-03-31');

# INSERTAR FILAS EN CIERTAS COLUMNAS #
INSERT INTO usuarios(email, password) VALUES('antonio@gmail.com', 'ewqe231');

# MOSTRAR TODOS LOS REGISTROS / FILAS DE UNA TABLA #
SELECT email, nombre, apellido FROM usuarios;

# MOSTRAR TODOS LOS REGISTROS / FILAS DE UNA TABLA #
SELECT * FROM usuarios;

# OPERADORES ARITMETICOS #
SELECT id, email, (4+7) AS 'Operaciones' FROM usuarios ORDER BY id DESC;
SELECT id, email, (id+7) AS 'Operaciones' FROM usuarios;

# Ordenar lista -> DESC / ASC
# Agregar un alias a una columna -> AS 'nombre del alias'