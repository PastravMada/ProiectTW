
DROP TABLE DETALII CASCADE CONSTRAINTS;

CREATE TABLE DETALII(
  id_detalii INTEGER,
  origine VARCHAR2(30),
  localizare VARCHAR2(30),
  caracteristici VARCHAR2(100),
  inmultire VARCHAR2(30),
  imagini VARCHAR2(100),
  beneficii VARCHAR2(100),
  regimDezvoltare VARCHAR2(30),
  perioadaCultivare VARCHAR2(30),
  soiuriInrudite VARCHAR2(30),
  culoare VARCHAR2(20),
  temperatura INTEGER,
  anotimp VARCHAR2(20),
  PRIMARY KEY(id_detalii)
);
