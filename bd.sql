CREATE DATABASE IF NOT EXISTS proyecto;
use proyecto;

--delete insert--
CREATE TABLE IF NOT EXISTS users (
    user VARCHAR(100) NOT NULL PRIMARY KEY,
    pass VARCHAR(250) NOT NULL
);
insert into users (user, pass) values ( 'admin', '$2y$10$eSsNVMJscPL24U1RaI3F5eLCVH0.ap86HZ5aonPud.u3LBDS9VsnS');

--crud--
 CREATE TABLE IF NOT EXISTS productos (
    nombre VARCHAR(100) NOT NULL PRIMARY KEY,
    precio VARCHAR(10) NOT NULL,
    imagen VARCHAR(100)
);

insert into productos (nombre, precio, imagen ) values ('la hermosura','13,13','hermoso.png');
insert into productos (nombre, precio, imagen ) values ('camisa dios es un pollo','21,11','godpollo.png');



--delete insert--
CREATE TABLE IF NOT EXISTS compras (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    buyer VARCHAR(100) NOT NULL,
    nombre  VARCHAR(100) not NULL,
    dinero VARCHAR(10) NOT NULL
    );


--insert--
CREATE TABLE IF NOT EXISTS cambios (
    fecha  VARCHAR(20)  NOT NULL PRIMARY KEY,
    ajuste VARCHAR(250) NOT NULL
    );

--hacer los disparadores   en phpmyadmin

CREATE TRIGGER registo1 AFTER INSERT ON productos

FOR EACH ROW

BEGIN

insert into cambios values (now(),'se ha insertado nuevo producto');


END
//

CREATE TRIGGER registo2 AFTER UPDATE ON productos

FOR EACH ROW

BEGIN

insert into cambios values (now(),
concat('se ha cambiado de ' ,old.precio, ' a ' ,new.precio, ' en el producto ' ,old.nombre, ' .'));


END
//

CREATE TRIGGER registo3 AFTER DELETE ON productos

FOR EACH ROW

BEGIN

insert into cambios values (now(),concat('se ha borrado el producto ' ,old.nombre, ' .'));


END
//






