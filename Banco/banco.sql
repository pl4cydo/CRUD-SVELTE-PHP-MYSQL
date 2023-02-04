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

CREATE TABLE `automoveis` (
  `id` INT auto_increment NOT NULL,
  `modelo` VARCHAR(45) NULL,
  `ano` VARCHAR(45) NULL,
  `cor` VARCHAR(45) NULL,
  `placa` VARCHAR(45) NULL,
  `login_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_automoveis_login_idx` (`login_id` ASC) VISIBLE,
  CONSTRAINT `fk_automoveis_login`
    FOREIGN KEY (`login_id`)
    REFERENCES `crud_svelte_PHP`.`login` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;
describe automoveis;
drop table automoveis;
select * from automoveis;