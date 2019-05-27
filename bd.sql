create database blog;
use blog;

create table tbl_Posts(
	id int not null auto_increment,
	titulo varchar(120) not null,
    texto text not null,
    autor varchar(50) not null,
    categoria varchar(50) not null,
    imagen varchar(100) not null,
    fecha_creacion DATETIME DEFAULT current_timestamp,
    PRIMARY KEY (id)
);
/*Datos de prueba en archivo blog_tbl_posts.sql*/