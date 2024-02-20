CREATE DATABASE php_mysql_proyect;

use php_mysql_proyect;

CREATE TABLE tareas(
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  titulo VARCHAR(255) NOT NULL,
  descripcion TEXT,
  creado_en TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

DESCRIBE tareas;
