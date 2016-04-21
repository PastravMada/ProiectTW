
DROP TABLE COMENTARII;

CREATE TABLE COMENTARII(
  id_user NUMBER,
  id_parfum NUMBER,
  comentariu VARCHAR2(200),
  FOREIGN KEY(id_user) REFERENCES USERI(id_user),
  FOREIGN KEY(id_parfum) REFERENCES PARFUM(id_parfum)
);

INSERT INTO COMENTARII(id_user,id_parfum,comentariu) VALUES(2,11,'Cel mai bun parfum');
INSERT INTO COMENTARII(id_user,id_parfum,comentariu) VALUES(3,11,'Superb');
INSERT INTO COMENTARII(id_user,id_parfum,comentariu) VALUES(4,1,'Cel mai bun parfum');
INSERT INTO COMENTARII(id_user,id_parfum,comentariu) VALUES(5,12,'Cel mai bun parfum');
INSERT INTO COMENTARII(id_user,id_parfum,comentariu) VALUES(6,14,'Cel mai bun parfum');
INSERT INTO COMENTARII(id_user,id_parfum,comentariu) VALUES(7,13,'Cel mai bun parfum');
INSERT INTO COMENTARII(id_user,id_parfum,comentariu) VALUES(8,15,'Cel mai bun parfum');
INSERT INTO COMENTARII(id_user,id_parfum,comentariu) VALUES(9,16,'Cel mai bun parfum');
INSERT INTO COMENTARII(id_user,id_parfum,comentariu) VALUES(22,17,'Cel mai bun parfum');
INSERT INTO COMENTARII(id_user,id_parfum,comentariu) VALUES(3,18,'Cel mai bun parfum');
INSERT INTO COMENTARII(id_user,id_parfum,comentariu) VALUES(4,20,'Cel mai bun parfum');
INSERT INTO COMENTARII(id_user,id_parfum,comentariu) VALUES(5,22,'Cel mai bun parfum');
INSERT INTO COMENTARII(id_user,id_parfum,comentariu) VALUES(6,30,'Cel mai bun parfum');
INSERT INTO COMENTARII(id_user,id_parfum,comentariu) VALUES(7,32,'Cel mai bun parfum');
INSERT INTO COMENTARII(id_user,id_parfum,comentariu) VALUES(8,31,'Cel mai bun parfum');
INSERT INTO COMENTARII(id_user,id_parfum,comentariu) VALUES(9,33,'Cel mai bun parfum');
INSERT INTO COMENTARII(id_user,id_parfum,comentariu) VALUES(10,1,'Cel mai bun parfum');
INSERT INTO COMENTARII(id_user,id_parfum,comentariu) VALUES(11,2,'Cel mai bun parfum');
INSERT INTO COMENTARII(id_user,id_parfum,comentariu) VALUES(2,3,'Cel mai bun parfum');
INSERT INTO COMENTARII(id_user,id_parfum,comentariu) VALUES(3,4,'Cel mai bun parfum');
INSERT INTO COMENTARII(id_user,id_parfum,comentariu) VALUES(4,5,'Cel mai bun parfum');
INSERT INTO COMENTARII(id_user,id_parfum,comentariu) VALUES(5,6,'Cel mai bun parfum');
INSERT INTO COMENTARII(id_user,id_parfum,comentariu) VALUES(6,7,'Cel mai bun parfum');