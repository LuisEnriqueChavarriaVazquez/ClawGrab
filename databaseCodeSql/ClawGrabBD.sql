create database ClawGrab;
use ClawGrab;
create table Usuario
(IDUsuario int not null auto_increment primary key,
Nombre varchar (70) not null,
Edad varchar (3) null,
Pais varchar (70) not null,
Correo varchar(70) not null,
Idioma varchar (70) not null,
Contra varchar (70) not null);

select * from Usuario;

create table HacerCodigo(
  IDCodigo int not null auto_increment primary key,
  IDUsuario int not null,
  Fecha_de_creacion date not null,
  Fecha_de_modificacion date not null,
  Nombre varchar(300) not null,
  archivo blob,
  FOREIGN KEY (IDUsuario) REFERENCES Usuario(IDUsuario)
);

create table compartirCodigo(
  IDCompartir int not null auto_increment primary key,
  IDCodigo int not null,
  IDUsuario int not null,
  Palabra_Clave_1 varchar (50),
  Palabra_Clave_2 varchar (50),
  Palabra_Clave_3 varchar (50),
  FOREIGN KEY (IDUsuario) REFERENCES Usuario(IDUsuario),
   FOREIGN KEY (IDCodigo) REFERENCES HacerCodigo(IDCodigo)
);

/*
create table ElementoGrafico(
IDElementoGrafico  int not null auto_increment primary key,
 Nombre varchar (70) not null);
 
 create table Codigo(
 IDCodigo int not null,
 IDUsuario int not null,
 FechaCreacion date not null,
 FechaModificacion date not null,
 Archivo blob not null,
 PalabraClave1 varchar(70),
 PalabraClave2 varchar(70),
 PalabraClave3 varchar(70), 
 primary key(IDCodigo,IDUsuario),
 foreign key (IDUsuario) references Usuario (IDUsuario)
 );
 
 create table Configuran(
 IDUsuario int not null,
IDElementoGrafico int not null,
 primary key(IDUsuario,IDElementoGrafico),
 Color varchar (70),
 foreign key (IDUsuario) references Usuario (IDUsuario),
 foreign key (IDElementoGrafico) references ElementoGrafico (IDElementoGrafico)
 );*/
 
 /*drop database ClawGrab;