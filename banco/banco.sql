create database checkNow;
use checkNow;

create table usuario (
    id int primary key auto_increment,
    nome varchar(180),
    img varchar(180),
    email varchar(180) unique,
    senha varchar(18),
    cpf varchar(12) unique,
    telefone int unique,
    data_nasc varchar(10),
    data_cria varchar(20),
    conta int unique,
    valor double
);

CREATE TABLE boletos (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    id_pagador int,
    codigo_de_barras VARCHAR(255) NOT NULL,
    valor DECIMAL(10, 2) NOT NULL,
    data_de_vencimento varchar(10) NOT NULL,
    nome_do_beneficiario VARCHAR(255) NOT NULL,
    cpf_cnpj_do_pagador VARCHAR(20) NOT NULL,
    tipo enum("gastos-fixos", "pagamento","recebimento") NOT null,
    status_pagamento ENUM('pendente', 'pago') NOT NULL,
    foreign key (id_pagador) references usuario (id)
);

create table depositos (
    id int primary key auto_increment,
    de_nome varchar(120),
    para_nome varchar(120),
    de_conta int,
    para_conta int,
    valor double
);


insert usuario value (null, "joao", null, "joao@gm.com","joao","12312312312", "","2004/03/09", "","1234567891", "20.0");
INSERT INTO `boletos`(`id`, `id_pagador`, `codigo_de_barras`, `valor`, `data_de_vencimento`, `nome_do_beneficiario`, `cpf_cnpj_do_pagador`, `tipo`, `status_pagamento`) VALUES (null, '1', '2', '200,40','08/02/2022','claudio','12345678911','pagamento', 'pendente');
INSERT INTO `boletos`(`id`, `id_pagador`, `codigo_de_barras`, `valor`, `data_de_vencimento`, `nome_do_beneficiario`, `cpf_cnpj_do_pagador`, `tipo`, `status_pagamento`) VALUES (null, '1', '2', '200,40','08/02/2022','juca','12345678911','pagamento', 'pendente');
INSERT INTO `boletos`(`id`, `id_pagador`, `codigo_de_barras`, `valor`, `data_de_vencimento`, `nome_do_beneficiario`, `cpf_cnpj_do_pagador`, `tipo`, `status_pagamento`) VALUES (null, '1', '2', '200,40','08/02/2022','juliana','12345678911','pagamento', 'pendente');
INSERT INTO `boletos`(`id`, `id_pagador`, `codigo_de_barras`, `valor`, `data_de_vencimento`, `nome_do_beneficiario`, `cpf_cnpj_do_pagador`, `tipo`, `status_pagamento`) VALUES (null, '1', '2', '200,40','08/02/2022','claudete','12345678911','pagamento', 'pendente');
INSERT INTO `boletos`(`id`, `id_pagador`, `codigo_de_barras`, `valor`, `data_de_vencimento`, `nome_do_beneficiario`, `cpf_cnpj_do_pagador`, `tipo`, `status_pagamento`) VALUES (null, '1', '2', '200,40','08/02/2022','fabio','12345678911','gastos-fixos', 'pendente');
INSERT INTO `boletos`(`id`, `id_pagador`, `codigo_de_barras`, `valor`, `data_de_vencimento`, `nome_do_beneficiario`, `cpf_cnpj_do_pagador`, `tipo`, `status_pagamento`) VALUES (null, '1', '2', '200,40','08/02/2022','Kauan','12345678911','gastos-fixos', 'pendente');
INSERT INTO `boletos`(`id`, `id_pagador`, `codigo_de_barras`, `valor`, `data_de_vencimento`, `nome_do_beneficiario`, `cpf_cnpj_do_pagador`, `tipo`, `status_pagamento`) VALUES (null, '1', '2', '200,40','08/02/2022','Gabriel','12345678911','gastos-fixos', 'pendente');
INSERT INTO `boletos`(`id`, `id_pagador`, `codigo_de_barras`, `valor`, `data_de_vencimento`, `nome_do_beneficiario`, `cpf_cnpj_do_pagador`, `tipo`, `status_pagamento`) VALUES (null, '1', '2', '200,40','08/02/2022','Pedro','12345678911','gastos-fixos', 'pendente');
INSERT INTO `boletos`(`id`, `id_pagador`, `codigo_de_barras`, `valor`, `data_de_vencimento`, `nome_do_beneficiario`, `cpf_cnpj_do_pagador`, `tipo`, `status_pagamento`) VALUES (null, '1', '2', '200,40','08/02/2022','claudio','12345678911','recebimento', 'pendente');
INSERT INTO `boletos`(`id`, `id_pagador`, `codigo_de_barras`, `valor`, `data_de_vencimento`, `nome_do_beneficiario`, `cpf_cnpj_do_pagador`, `tipo`, `status_pagamento`) VALUES (null, '1', '2', '200,40','08/02/2022','claudio','12345678911','recebimento', 'pendente');
INSERT INTO `boletos`(`id`, `id_pagador`, `codigo_de_barras`, `valor`, `data_de_vencimento`, `nome_do_beneficiario`, `cpf_cnpj_do_pagador`, `tipo`, `status_pagamento`) VALUES (null, '1', '2', '200,40','08/02/2022','mercado','12345678911','recebimento', 'pendente');
INSERT INTO `boletos`(`id`, `id_pagador`, `codigo_de_barras`, `valor`, `data_de_vencimento`, `nome_do_beneficiario`, `cpf_cnpj_do_pagador`, `tipo`, `status_pagamento`) VALUES (null, '1', '2', '200,40','08/02/2022','americanas','12345678911','recebimento', 'pago');
INSERT INTO `boletos`(`id`, `id_pagador`, `codigo_de_barras`, `valor`, `data_de_vencimento`, `nome_do_beneficiario`, `cpf_cnpj_do_pagador`, `tipo`, `status_pagamento`) VALUES (null, '1', '2', '200,40','08/02/2022','americanas','12345678911','recebimento', 'pago');