INSERT INTO `lineas_estaciones` (linea_id, estacion_id) VALUES
(
  (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 9"),
  (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Lázaro Cárdenas")
)
(
  (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 6"),
  (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Ferrería")),
(
  (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea A"),
  (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Pantitlán")),
(
  (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 2"),
  (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Tacuba"));
(
  (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 6"),
  (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Martín Carrera")
),
(
  (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 4"),
  (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Santa Anita")
),
(
  (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea B"),
  (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Villa de Aragón")
),
(
  (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 6"),
  (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Tezozómoc")
),
(
  (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea B"),
  (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Tecnológico")
),
(
  (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 2"),
  (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Colegio Militar")
),
(
  (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 1"),
  (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Chapultepec")
),
(
  (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 12"),
  (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Calle 11")
),
(
  (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 8"),
  (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Constitución de 1917")
),
(
  (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 3"),
  (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Copilco")
),
(
  (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 7"),
  (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Tacuba")
),
(
  (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 4"),
  (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Talismán")
),
(
  (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 5"),
  (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Terminal Aérea")
),
(
  (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea B"),
  (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Tepito")
),
(
  (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 12"),
  (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Hospital 20 de Nov.")
),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 3"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Eugenia")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 12"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Lomas Estrella")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 3"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Tlatelolco")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 8"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Atlalilco")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 1"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Blvd. Puerto Aéreo")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 9"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Chilpancingo")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea B"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Ciudad Azteca")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 3"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Niños Héroes")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 2"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Popotla")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 7"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "San Joaquín")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 3"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Universidad")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 6"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Instituto del Petróleo")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 8"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Escuadrón 201")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 8"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Iztacalco")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 3"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Juárez")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 2"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Chabacano")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 6"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Azcapotzalco")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea B"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Bosque de Aragón")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 12"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Tlaltenco")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 4"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Jamaica")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea B"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Oceanía")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 8"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Iztapalapa")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 9"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Mixhuca")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 3"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Centro Médico")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 1"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Balderas")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 9"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Chabacano")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 8"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Salto del Agua")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 1"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Insurgentes")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea A"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Guelatao")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea B"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Morelos")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 1"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Moctezuma")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 2"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Normal")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 3"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Zapata")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 1"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Zaragoza")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 5"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "La Raza")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 9"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Jamaica")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 7"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Constituyentes")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea B"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Múzquiz")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea B"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Romero Rubio")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 2"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "San Cosme")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 2"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Portales")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 9"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Puebla")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea A"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Santa Marta")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 2"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Tasqueña")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 2"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Xola")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 4"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Canal del Norte")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea B"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Buenavista")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 1"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Balbuena")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 2"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Ermita")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 5"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Aragón")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 6"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Deportivo 18 de Marzo")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 12"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Atlalilco")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 7"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Auditorio")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 12"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Culhuacán")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 8"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Santa Anita")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 6"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Instituto del Petroleo")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 7"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "El Rosario")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 3"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Guerrero")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 3"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Hospital General")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 4"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Fray Servando")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 12"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Ermita")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 1"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Pantitlán")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 9"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Patriotismo")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 1"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Observatorio")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea A"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "La Paz")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 5"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Valle Gómez")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 12"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Tezonco")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 8"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Chabacano")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 4"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Candelaria")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 7"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Aquiles Serdán")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 8"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "La Viga")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea B"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Olímpica")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 12"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Mexicaltzingo")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 5"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Politécnico")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 12"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Periférico Ote")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea B"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "San Lázaro")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 7"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "San Antonio")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 12"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Zapotitlán")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 12"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Tláhuac")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 3"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Hidalgo")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 2"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Hidalgo")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 3"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Etiopía / Plaza de la Transpatencia")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea B"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Deportivo Oceanía")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea B"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Impulsora")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 3"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Deportivo 18 de Marzo")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 4"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Consulado")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 7"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Camarones")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 2"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Allende")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 8"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "San Juan de Letrán")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 2"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Viaducto")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 6"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Vallejo")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 9"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Pantitlán")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 4"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Morelos")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 8"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Doctores")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea A"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Los Reyes")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 8"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Bellas Artes")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 3"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Balderas")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 5"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Autobuses del Norte")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea A"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Acatitla")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 2"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Revolución")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 7"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Polanco")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 12"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "San Andrés Tomatlán")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea B"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Garibaldi")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 5"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Eduardo Molina")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 8"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Coyuya")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 3"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Coyoacán")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 6"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Norte 45")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 6"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Lindavista")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 7"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Tacubaya")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 8"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Garibaldi")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 7"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Mixcoac")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 12"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Mixcoac")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 5"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Hangares")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 6"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "El Rosario")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 5"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Oceanía")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 12"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Nopalera")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 2"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Bellas Artes")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 8"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "UAM-I")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 9"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Velódromo")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 1"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Cuauhtémoc")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 8"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Apatlaco")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 8"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Aculco")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea A"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Agrícola Oriental")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 12"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Eje Central")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 1"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Tacubaya")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 2"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Pino Suárez")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea B"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Río de los Remedios")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 3"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Potrero")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 1"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Sevilla")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 2"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "General Anaya")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 3"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Indios Verdes")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 6"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "La Villa - Basílica")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 12"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Parque de los Venados")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 1"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Juanacatlán")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 2"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Nativitas")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 5"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Misterios")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 1"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Candelaria")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 7"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Barranca del Muerto")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 3"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Miguel Ángel de Quevedo")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea B"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Lagunilla")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 12"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Olivos")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 1"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "San Lázaro")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea A"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Tepalcates")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 2"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Zócalo")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 1"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Gómez Farías")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 9"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Centro Médico")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 5"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Consulado")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 1"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Pino Suárez")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 1"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Salto del Agua")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 7"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "San Pedro de Los Pinos")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 7"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Refinería")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 2"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Villa de Cortés")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea B"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "R. Flores Magón")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea B"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Guerrero")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 12"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Insurgentes Sur")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 12"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Zapata")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 3"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Viveros")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 8"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Cerro de la Estrella")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 4"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Bondojito")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea A"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Canal de San Juan")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 5"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Pantitlán")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 2"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "San Antonio Abad")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 8"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Obrera")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea B"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Plaza Aragón")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 2"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Panteones")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea A"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Peñón Viejo")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 3"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "División del Norte")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 2"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Cuitláhuac")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 9"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Ciudad Deportiva")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 2"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Cuatro Caminos")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 4"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Martín Carrera")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 3"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "La Raza")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 1"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Isabel la Católica")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea B"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Nezahualcóyotl")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 1"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Merced")
        ),
(
            (SELECT `lineas`.`id` FROM `lineas` WHERE `lineas`.`nombre` = "Linea 9"),
            (SELECT `estaciones`.`id` FROM `estaciones` WHERE `estaciones`.`nombre` = "Tacubaya")
        );