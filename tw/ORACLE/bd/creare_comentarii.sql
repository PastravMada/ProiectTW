
DROP TABLE COMENTARII;

CREATE TABLE COMENTARII(
  id_user NUMBER,
  id_planta NUMBER,
  comentariu VARCHAR2(200)
);

INSERT INTO COMENTARII(id_user,id_planta,comentariu)VALUES(8,3,'cea mai frumoasa floare');
INSERT INTO COMENTARII(id_user,id_planta,comentariu)VALUES(9,4,'superba floare');
