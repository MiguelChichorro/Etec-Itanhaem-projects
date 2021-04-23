create database bancopw;
use bancopw;

create table tb_transacao(
cd_transacao int primary key auto_increment,
vl_transacao float,
dt_transacao date,
st_transacao varchar(50),
ds_transacao varchar(255),
id_forma int null,
id_categoria int null,
id_usuario int null);

create table tb_forma(
cd_forma int primary key auto_increment,
ds_forma varchar(50));

create table tb_categoria(
cd_categoria int primary key auto_increment,
nm_categoria varchar(50));

create table tb_usuario(
cd_usuario int primary key auto_increment,
nm_usuario varchar(255),
ds_login varchar(200),
ds_senha varchar(200));

alter table tb_transacao add
foreign key (id_forma) 
references tb_forma(cd_forma)
;

alter table tb_transacao add
foreign key (id_categoria) 
references tb_categoria(cd_categoria)
;

alter table tb_transacao add
foreign key (id_usuario) 
references tb_usuario(cd_usuario)
;

insert into tb_forma(ds_forma)
values ("Check"),
("Dédito"),
("Crédito"),
("Boleto");

insert into tb_categoria(nm_categoria)
values ("Lazer"),
("Esporte"),
("Moradia"),
("Alimetação");

insert into tb_usuario(nm_usuario)
values ("Jhonatan");

