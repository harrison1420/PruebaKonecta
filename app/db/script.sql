
CREATE TABLE producto(
    id serial NOT NULL,
    nombre de procucto character varying(100)NOT NULL,
    referencia character varying(100)NOT NULL,
    precio integer NOT NULL,
    peso integer NOT NULL,
    categoria character varying(100)NOT NULL,
    stock integer NOT NULL,
    fecha de creacion date NOT NULL,
    PRIMARY KEY (id)    
);