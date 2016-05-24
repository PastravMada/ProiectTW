
DROP TABLE USERI CASCADE CONSTRAINTS;

CREATE TABLE USERI(
  id_user INTEGER,
  username VARCHAR2(30),
  password VARCHAR2(30),
  nume VARCHAR2(30),
  prenume VARCHAR2(30),
  email VARCHAR2(30),
  sex VARCHAR2(30),
  oras VARCHAR2(30),
  adresa VARCHAR2(50),
  telefon VARCHAR2(10),
  PRIMARY KEY(id_user)
);


INSERT INTO USERI(id_user,username,password,nume,prenume,EMAIL,sex,ORAS,ADRESA) VALUES(1,'admin','admin','X','X','X','X','X','X');
INSERT INTO USERI(id_user,username,password,nume,prenume,EMAIL,sex,ORAS,ADRESA) VALUES(2,'ramona','ramona','blanaru','ramona','ramona@gmail.com','female','Suceava','str. Mitocelului, nr.35');
INSERT INTO USERI(id_user,username,password,nume,prenume,EMAIL,sex,ORAS,ADRESA) VALUES(3,'andreea','andreea','blanaru','andreea','andreea@gmail.com','female','Suceava','str. Mitocelului, nr.35');
INSERT INTO USERI(id_user,username,password,nume,prenume,EMAIL,sex,ORAS,ADRESA) VALUES(4,'cristi','cristi','cozaciuc','cristi','cristi@gmail.com','man','Suceava','str Oituz');
INSERT INTO USERI(id_user,username,password,nume,prenume,EMAIL,sex,ORAS,ADRESA) VALUES(5,'ana','ana','cucu','ana','ana@gmail.com','female','Iasi','str. Cuza-Voda');
INSERT INTO USERI(id_user,username,password,nume,prenume,EMAIL,sex,ORAS,ADRESA) VALUES(6,'mihaela','mihaela','holoca','mihaela','mihaela@gmail.com','female','Iasi','str. Independentei');
INSERT INTO USERI(id_user,username,password,nume,prenume,EMAIL,sex,ORAS,ADRESA) VALUES(7,'madalina','madalina','pastrav','madalina','madalina@gmail.com','female','Iasi','str. Copou');
INSERT INTO USERI(id_user,username,password,nume,prenume,EMAIL,sex,ORAS,ADRESA) VALUES(8,'abel','abel','policiuc','abel','abel@gmail.com','man','Iasi','str. Dacia');
INSERT INTO USERI(id_user,username,password,nume,prenume,EMAIL,sex,ORAS,ADRESA) VALUES(9,'simona','simona','ecoboaea','simona','simona@gmail.com','female','Bucuresti','str. dac');
INSERT INTO USERI(id_user,username,password,nume,prenume,EMAIL,sex,ORAS,ADRESA) VALUES(10,'ela','ela','ecoboaea','ela','ela@gmail.com','female','Bucuresti','str. Mitocelului');
INSERT INTO USERI(id_user,username,password,nume,prenume,EMAIL,sex,ORAS,ADRESA) VALUES(11,'roxana','roxana','hlihor','roxana','roxana@gmail.com','female','cluj','str. Mitocelului');
