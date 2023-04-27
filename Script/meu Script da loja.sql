create database loja;


use loja;

create table cadastro(

id int not null auto_increment primary key,
nome varchar(50) not null,
sobrenome varchar(50) not null,
email varchar(50) not null,
senha varchar(8) not null,
telefone char (9) not null,
sexo varchar(10) not null,
categoria varchar(15) not null
);

create table produtos(
cod_prod int primary key auto_increment not null,
comprador varchar(50) not null,
produto varchar(50) not null,
preco int not null,
quant int not null,
dinheiro int not null


);

select * from cadastro;