create database dbContatosProjeto3;
alter user 'root'@'localhost' identified with mysql_native_password by 'bcd127';

use dbContatosProjeto3;

#cria a tabela de estados
create table tblSugestaoCritica(
	idSugestaoCritica int auto_increment not null primary key,
    sigla varchar(2) not null,
    tipo varchar(20) not null
);

create table tblContatos(
	idContatos int auto_increment not null primary key,
    nome varchar(100) not null,
    telefone varchar(14) not null,
    celular varchar(15) not null,
    email varchar(100) not null,
    homePage varchar(150),
    facebook varchar(100),
    idSugestaoCritica int not null,
    profissao varchar(50),
    sexo varchar(1),
    obs text,
    
    #serve para ligar um tabela a outra
    constraint Fk_sujestao_contatos
    foreign key (idSugestaoCritica)
    references tblSugestaoCritica (idSugestaoCritica)
);

desc tblContatos;

create table tblPermissoes(
	idPermissoes int(4) not null auto_increment primary key,
    nivel varchar(150) not null,
    ADMusuario varchar(1) not null,
    ADMfaleConosco varchar(1) not null,
    ADMprodutos varchar(1) not null,
    ADMconteudo varchar(1) not null
);
alter table tblPermissoes change column Nivel nivel varchar(150) not null;

#alter table tblAtores change column data_nascimento datanascimento date;

alter table tblPermissoes add nivel varchar(150) not null;

create table tblUsuario(
	idUsuario int(4) not null auto_increment  primary key,
    idPermissoes int(4) not null,
    nomeUsuario varchar(150) not null,
    senha varchar(150) not null,
    confirmacaoDeSenha varchar(150) not null,
    ativacao varchar(1) not null,
    
    constraint FK_permissao_usuario foreign key (idPermissoes) references tblPermissoes (idPermissoes)
);

select *from tblpermissoes;

alter table tblPermissoes add ativacao varchar(1) not null;

select * from tblUsuario;

desc tblUsuario;
#comando para deletar um registro do banco
#delete from tblPermissoes where idPermissoes = 3;

desc tblPermissoes;

select *from tblpermissoes;
select * from tblSugestaoCritica;
select * from tblContatos;
select * from tblContatos;


show tables;