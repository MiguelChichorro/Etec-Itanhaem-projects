create database jogos;

use jogos;

create table tb_jogos(
cd_jogos int primary key auto_increment,
vl_jogos float,
dt_jogos date,
ds_jogostip varchar(50),
ds_jogosmarc varchar(50),
ds_jogosplat varchar(50),
ds_imagem varchar(50));

create table tb_usuario(
cd_usuario int primary key auto_increment,
nm_usuario varchar(30),
ds_senha varchar(20));
