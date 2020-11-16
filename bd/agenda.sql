CREATE DATABASE pruebas;

CREATE TABLE t_persona(
    id int AUTO_INCREMENT,
    nombre varchar(50),
    apellido varchar(50),
    nick varchar(40),
    email varchar(50),
    telefono varchar(20),
    PRIMARY KEY(id)
)