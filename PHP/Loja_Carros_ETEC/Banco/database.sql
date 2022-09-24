create database Loja_Carros_ETEC;

use Loja_Carros_ETEC;

create table cliente(
id_cliente int primary key auto_increment,
nome_razaosocial varchar (100),
cpf_cnpj bigint NOT NULL UNIQUE,
rg_ie bigint NOT NULL UNIQUE, 
email varchar (50) NOT NULL,
telefone varchar(11) NOT NULL,
endereco varchar(50) NOT NULL,
numero int(5) DEFAULT NULL,
complemento varchar(80) DEFAULT NULL,
cep varchar (10) NOT NULL,
bairro varchar(30) NOT NULL,
cidade varchar(35) NOT NULL,
estado varchar(2) NOT NULL,
data_nascimento date 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
