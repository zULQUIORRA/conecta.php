CREATE DATABASE modular;
use modular;

CREATE TABLE tb_usuario(
    id_us int PRIMARY KEY AUTO_INCREMENT,
    nome_us VARCHAR(100),
    email VARCHAR(100),
    RG VARCHAR(100),
    CPF VARCHAR(50)
);

//http://localhost/phpmyadmin/index.php?route=/server/sql&lang=pt