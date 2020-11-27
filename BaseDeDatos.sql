

create database instrumentos_musicales;
use instrumentos_musicales;

create table articulos(
id int unsigned auto_increment primary key,
nombre varchar(200) not null,
precio int(11) not null,
descripcion text not null,
status boolean not null
);

insert into articulos (nombre, precio, descripcion, status) values ("Bateria", "4000", "Linda bateria con kit de repuesto", 1);
insert into articulos (nombre, precio, descripcion, status) values ("Guitarra", "700", "Guitarra acustica hecha con madera de cedro", 1);
insert into articulos (nombre, precio, descripcion, status) values ("Piano", "3500", "Piano Casio negro", "1");
insert into articulos (nombre, precio, descripcion, status) values ("Violin", "2500", "Viloin con cuerdas de respuesto", 1);
insert into articulos (nombre, precio, descripcion, status) values ("Ukulele", "2200", "Ukulele importado de España", 1);


