CREATE DATABASE php_mysql_proyect;

use php_mysql_proyect;

CREATE TABLE tareas(
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  Titulo VARCHAR(255) NOT NULL,
  Descripción TEXT,
  Creado en TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

DESCRIBE tareas;
