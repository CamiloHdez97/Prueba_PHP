-- By Camilo Hernandez
                              
CREATE DATABASE campuslands;
use campuslands;

-- El nombre mas largo de un pais registrado es de 56 caracteres.
CREATE TABLE pais(

    idPais INTEGER AUTO_INCREMENT,
    nombrePais VARCHAR(56) NOT NULL,
    CONSTRAINT pk_idPais PRIMARY KEY (idPais)

);

CREATE TABLE departamento(

    idDep INTEGER AUTO_INCREMENT,
    nombreDep VARCHAR(50) NOT NULL,
    idPais INTEGER NOT NULL,
    CONSTRAINT pk_idDep PRIMARY KEY (idDep),
    CONSTRAINT fk_idPais FOREIGN KEY (idPais) REFERENCES pais(idPais)

);

CREATE TABLE region(

    idReg INTEGER AUTO_INCREMENT,
    nombreReg VARCHAR(60) NOT NULL,
    idDep INTEGER NOT NULL,
    CONSTRAINT pk_idReg PRIMARY KEY (idReg),
    CONSTRAINT fk_idDep FOREIGN KEY (idDep) REFERENCES departamento(idDep)

);

CREATE TABLE campers(

    idCamper VARCHAR (20) NOT NULL,
    nombreCamper VARCHAR(50) NOT NULL,
    apellidoCamper VARCHAR(50) NOT NULL,
    fechaNac DATE NOT NULL,
    idReg INTEGER NOT NULL,
    CONSTRAINT pk_idCamper PRIMARY KEY (idCamper),
    CONSTRAINT fk_idReg FOREIGN KEY (idReg) REFERENCES region(idDep)

);