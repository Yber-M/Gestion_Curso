CREATE DATABASE BD_Curso;

USE BD_Curso;

CREATE TABLE tcurso (
    id int PRIMARY KEY  NOT NULL  AUTO_INCREMENT,
    CodCur  int(11)  NOT NULL,
    NomCur  varchar(50)  NOT NULL,
    Ciclo  varchar(4)  NOT NULL,
    NumCre  int(11)  NOT NULL
);

SELECT * FROM tcurso;