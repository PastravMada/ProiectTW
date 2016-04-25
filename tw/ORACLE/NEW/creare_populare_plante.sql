DROP TABLE PLANTE CASCADE CONSTRAINTS;

CREATE TABLE PLANTE(
  id_planta INTEGER,
  id_detalii INTEGER,
  denumirePopulara VARCHAR2(30),
  denumireStiintifica VARCHAR2(30),
  imagine VARCHAR2(30),
  descriere VARCHAR2(200),
  PRIMARY KEY(id_planta),
  FOREIGN KEY(id_detalii) REFERENCES DETALII(id_detalii)
);
