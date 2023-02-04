show databases;
create database crud_svelte_PHP;
use crud_svelte_PHP;
create table login(
	id int auto_increment not null,
    nome varchar(255),
    email varchar(255),
    senha varchar(255),
    primary key(id)
);
show tables;
describe login;
insert into login(nome, email, senha) value("root", "root@root.com", "root");
select * from login;