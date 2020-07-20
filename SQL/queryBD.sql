CREATE DATABASE proyecto;


   CREATE TABLE usuario 
   ( 
      cedula VARCHAR(50),
      nombre VARCHAR(50) NOT NULL,
      apellido VARCHAR(50) NOT NULL, 
      username VARCHAR(50) NOT NULL,
      rol VARCHAR(1), 
      pass VARCHAR(50) NOT NULL,
      mail VARCHAR(50) NOT NULL,
      CONSTRAINT pk_id PRIMARY KEY (id) 
   ); 



   CREATE TABLE categoria
   ( 
      categoria   VARCHAR(20) NOT NULL, 
      CONSTRAINT pk_categoria PRIMARY KEY (categoria)
      
   ); 


   CREATE TABLE producto 
   ( 
      SKU VARCHAR(20) NOT NULL, 
      nombre VARCHAR(20), 
      descripcion VARCHAR(100) NOT NULL, 
      imagen VARCHAR(20), 
      categoria VARCHAR(20),
      stock NUMERIC(20),
      precio FLOAT,
      CONSTRAINT pk_SKU PRIMARY KEY (SKU), 
      CONSTRAINT fk_categoria_producto FOREIGN KEY (categoria) REFERENCES 
      categoria (categoria)
   ); 


  Insert into usuario (cedula,nombre,apellido,rol,pass,mail)
 values('207610854','Daniel','Vargas','a','daniel','lineadan@gmail.com');

  Insert into usuario (cedula,nombre,apellido,rol,pass,mail)
 values('111111111','Bladimir','Arrollo','c','bladimir','lineadan@gmail.com');

