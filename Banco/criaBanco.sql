-- Deleta o banco de dados caso exista
DROP DATABASE IF EXISTS PROVA2;

-- Cria banco de dados caso não exista
CREATE DATABASE IF NOT EXISTS PROVA2;

USE PROVA2;

CREATE TABLE fluxo_caixa
(
    id          INTEGER         NOT NULL AUTO_INCREMENT,
    data        DATE            NOT NULL,
    tipo        VARCHAR(10)     NOT NULL,
    valor       DECIMAL(10,2)   NOT NULL,
    historico   VARCHAR(150)    NOT NULL,
    cheque      VARCHAR(3)      NOT NULL,
    PRIMARY KEY(id)
);