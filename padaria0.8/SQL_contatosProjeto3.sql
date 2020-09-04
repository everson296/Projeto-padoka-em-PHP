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

create table tblNivel(
	idNivel int(4) not null auto_increment primary key,
    nivel varchar(150) not null,
    ativar varchar(1) not null,
    ADMusuario varchar(1) not null,
    ADMfaleConosco varchar(1) not null,
    ADMprodutos varchar(1) not null,
    ADMconteudo varchar(1) not null
);

select *from tblUsuario;

create table tblUsuario(
	idUsuario int(4) not null auto_increment  primary key,
    idNivel int(4) not null,
    nomeUsuario varchar(150) not null,
    senha varchar(100) not null,
    email varchar(150) not null,
    ativacao varchar(1) not null,
    
    constraint FK_nivel_usuario foreign key (idNivel) references tblNivel (idNivel)
);



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
    
    constraint FK_estados_loja 
    foreign key(idEstados) 
    references tblEstados(idEstados)
);

create table tblCuriosidadeCard(
	idCuriosidadeCard int(4) not null auto_increment primary key,
    img varchar(200) not null,
    titulo varchar(100) not null,
    dataPublicacao date not null,
    nomeEscritor varchar(100) not null,
    texto varchar(255) not null
);

update tblCuriosidadeCard 
set img = 'd876baa663ac146748c18b9b26e5a00f.jpg', 
titulo = 'porque comemos pão no café da manhã', 
dataPublicacao = '2020-07-16', 
nomeEscritor = 'Everson Silva', 
texto = 'O pão pode estar presente no café da manhã e em alguma refeição principal, como almoço ou jantar. A porção recomendada é de 2 fatias de pão de forma por dia. Além de contribuir para a saciedade, os pães, especialmente os integrais, são compostos por fibras que ajudam no controle de peso e até na redução do colesterol.' 
where idCuriosidadeCard =2;

select tblCuriosidadeCard.*from tblCuriosidadeCard;

select *from tblcuriosidadecard;

use dbContatosProjeto3;
show tables;