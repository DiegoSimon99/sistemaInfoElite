CREATE DATABASE colegio;
USE colegio;

CREATE TABLE usuarios(
id int AUTO_INCREMENT,
usuario varchar(50) not null,
clave varchar(50) not null,
constraint pkUsuarios PRIMARY KEY(id)
);

INSERT INTO usuarios (id,usuario,clave) VALUES (1001, 'Diego', 'admin');

CREATE TABLE alumno(
alumnoId int AUTO_INCREMENT,
nombres varchar(50) not null,
apellidos varchar(50) not null,
dni varchar(50),
fechaNac date,
direccion varchar(50),
constraint pkUsuarios PRIMARY KEY(alumnoId)
);

CREATE TABLE apoderado(
apoderadoId int AUTO_INCREMENT,
nombres varchar(50) not null,
dni varchar(50),
telefono char(9),
constraint pkUsuarios PRIMARY KEY(apoderadoId)
);

CREATE TABLE colegio(
colegioId int AUTO_INCREMENT,
nombre varchar(50),
constraint pkUsuarios PRIMARY KEY(colegioId)
);
/*
CREATE TABLE aula(
aulaId int AUTO_INCREMENT,
grado varchar(50) not null,
seccion varchar(50),
constraint pkUsuarios PRIMARY KEY(aulaId)
);*/

CREATE TABLE pagos(
pagosId int AUTO_INCREMENT,
nroBoleta varchar(20) unique,
montoPension decimal(7,1),
mesPension varchar(20),
grado varchar(20),
montoMatricula decimal(7,1),
mesActividades varchar(20),
montoMaterial decimal(7,1),
descripcionActividades varchar(200),
montoCopias decimal(7,1),
montoActividades decimal(7,1),
matriculaId int,
constraint pkUsuarios PRIMARY KEY(pagosId)
);

CREATE TABLE matricula(
matriculaId int AUTO_INCREMENT,
alumnoId int,
colegioId int,
grado varchar(20),
apoderadoId int,
constraint pkUsuarios PRIMARY KEY(matriculaId)
);

alter table pagos add constraint fkMatricula
foreign key(matriculaId) references matricula(matriculaId);

/*alter table pagos add constraint fkAula
foreign key(aulaId) references aula(aulaId);*/

alter table matricula add constraint fkColegio
foreign key(colegioId) references colegio(colegioId);

alter table matricula add constraint fkAlumno
foreign key(alumnoId) references alumno(alumnoId);

alter table matricula add constraint fkApoderado
foreign key(apoderadoId) references apoderado(apoderadoId);
