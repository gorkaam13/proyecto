CREATE DATABASE IF NOT EXISTS proyecto;
use proyecto;

--delete insert--
CREATE TABLE IF NOT EXISTS users (
    user VARCHAR(100) NOT NULL PRIMARY KEY,
    pass VARCHAR(250) NOT NULL
);

--crud--
 CREATE TABLE IF NOT EXISTS productos (
    nombre VARCHAR(100) NOT NULL PRIMARY KEY,
    precio VARCHAR(10) NOT NULL,
    imagen VARCHAR(100)
);

--delete insert--
CREATE TABLE IF NOT EXISTS compras (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    buyer VARCHAR(100) NOT NULL,
    money VARCHAR(10) NOT NULL
    );

--insert--
CREATE TABLE IF NOT EXISTS cambios (
    fecha  VARCHAR(10)  NOT NULL PRIMARY KEY,
    ajuste VARCHAR(250) NOT NULL
    );




