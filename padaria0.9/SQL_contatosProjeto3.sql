create database dbContatosProjeto3;
alter user 'root'@'localhost' identified with mysql_native_password by 'bcd127';

create table tblSugestaoCritica(
	idSugestaoCritica int auto_increment not null primary key,
    sigla varchar(2) not null,
    tipo varchar(20) not null
);

create table tblContatos(
	idContatos int auto_increment not null primary key,
    nome varchar(100) not null,
    telefone varchar(17) not null,
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

create table tblNivel(
	idNivel int(4) not null auto_increment primary key,
    nivel varchar(150) not null,
    ativar varchar(1) not null,
    ADMusuario varchar(1) not null,
    ADMfaleConosco varchar(1) not null,
    ADMprodutos varchar(1) not null,
    ADMconteudo varchar(1) not null
);

create table tblUsuario(
	idUsuario int(4) not null auto_increment  primary key,
    idNivel int(4) not null,
    nomeUsuario varchar(150) not null,
    senha varchar(100) not null,
    email varchar(150) not null,
    ativacao varchar(1) not null,
    
    constraint FK_nivel_usuario foreign key (idNivel) references tblNivel (idNivel)
);

# tentai excluir o nivel mas não consegui, aqui ele funciona eu consigo excluir o nivel mais quando eu coloco no PHP ele não funciona 

insert into tblNivel (nivel, ativar, ADMusuario, ADMfaleConosco, ADMprodutos, ADMconteudo)
values('administrador', '1', '1', '1', '1', '1');

insert into tblUsuario (idNivel, nomeUsuario, senha, email, ativacao)
values(1, 'everson', md5(82815817), 'tutinha296@gmail.com', '1');

select *from tblusuario;

delete tblusuario.*, tblnivel.* 
from tblusuario, tblnivel 
where tblusuario.idNivel = tblnivel.idNivel 
and tblnivel.idNivel = 2;

DELETE tblusuario, tblnivel FROM tblnivel
LEFT JOIN tblusuario ON tblnivel.idNivel = tblusuario.idNivel
WHERE tblnivel.idNivel = 5; 

# ****************** parte do conteudo *****************

create table tblEmpresa(
	idEmpresa int(4) not null auto_increment primary key,
    imgPrincipal varchar(255) not null,
    sobreEmpresa varchar(255) not null,
    txtInformacao varchar(255) not null,
    txtTrabalheConosco varchar(255) not null,
    telefone varchar(17) not null,
    celular varchar(17) not null,
    rua varchar(150) not null,
    numero varchar(5)
);

create table tblEstados(
	idEstados int(4) not null auto_increment primary key,
    nomeEstado varchar(100) not null,
    sigla varchar(2) not null
);

insert into tblestados (nomeEstado, sigla) 
values('Acre', 'AC'), 
('Alagoas','AL'), 
('Amapá','AP'), 
('Amazonas','AM'), 
('Bahia','BA'), 
('Ceará','CE'), 
('Distrito Federal','DF'), 
('Espírito Santo','ES'), 
('Goiás','GO'), 
('Maranhão','MA'), 
('Mato Grosso','MT'), 
('Mato Grosso do Sul','MS'), 
('Minas Gerais','MG'), 
('Pará','PA'), 
('Paraíba','PB'), 
('Paraná','PR'), 
('Pernambuco','PE'), 
('Piauí','PI'), 
('Rio de Janeiro','RJ'), 
('Rio Grande do Norte','RN'), 
('Rio Grande do Sul ','RS'), 
('Rondônia','RO'), 
('Roraima','RR'), 
('Santa Catarina','SC'), 
('São Paulo ','SP'), 
('Sergipe','SE'), 
('Tocantins','TO');

create table tblLoja(
	idLoja int(4) not null auto_increment primary key,
    idEstados int(4) not null,
    imgLoja varchar(150) not null,
    nomeLoja varchar(150) not null,
    nomeGerente varchar(150) not null,
    rua varchar(150) not null,
    bairro varchar(150),
    numero varchar(5),
    email varchar(150) not null,
    linkGoogleMaps varchar(500),
    ativacao boolean not null,
    
    constraint FK_estados_loja 
    foreign key(idEstados) 
    references tblEstados(idEstados)
);

create table tblCuriosidadeImg(
	idCuriosidadeImg int(4) not null auto_increment primary key,
    imgPrimaria varchar(200) not null,
    imgSecundaria varchar(200) not null,
    imgTerciaria varchar(200) not null,
    imgQuartaria varchar(200) not null
);

create table tblCuriosidadeCard(
	idCuriosidadeCard int(4) not null auto_increment primary key,
    img varchar(200) not null,
    titulo varchar(100) not null,
    dataPublicacao date not null,
    nomeEscritor varchar(100) not null,
    texto varchar(255) not null,
    ativacao varchar(1) not null
);

select *from tblnivel;

use dbContatosProjeto3;
show tables;