DROP TABLE BRANDS CASCADE CONSTRAINTS;

CREATE TABLE BRANDS(
	id_brand NUMBER,
	nume_brand VARCHAR2(30),
	detalii VARCHAR2(500),
	PRIMARY KEY(id_brand)
);

DROP TABLE PARFUM CASCADE CONSTRAINTS;

CREATE TABLE PARFUM(
  id_parfum NUMBER PRIMARY KEY,
  nume_parfum VARCHAR2(40),
  pret NUMBER,
  stoc NUMBER,
  sex VARCHAR2(20),
  id_brand NUMBER,
  gramaj NUMBER,
  categorie VARCHAR2(20),
  concentratie VARCHAR2(20),
  ocazie VARCHAR2(20),
  anotimp VARCHAR2(20),
  poza VARCHAR2(50),
  ingrediente VARCHAR2(100),
  descriere VARCHAR2(600),
  FOREIGN KEY(id_brand) REFERENCES BRANDS(id_brand)
);
DROP TABLE PROMOTII;

CREATE TABLE PROMOTII(
  id_parfum NUMBER,
  discount NUMBER,
  data_inceput DATE,
  data_sfarsit DATE,
  FOREIGN KEY(id_parfum) REFERENCES PARFUM(id_parfum)
);

DROP TABLE COMENTARII;

CREATE TABLE COMENTARII(
  id_user NUMBER,
  id_parfum NUMBER,
  comentariu VARCHAR2(200),
  FOREIGN KEY(id_user) REFERENCES USERI(id_user),
  FOREIGN KEY(id_parfum) REFERENCES PARFUM(id_parfum)
);
DROP TABLE COMENZI CASCADE CONSTRAINTS;

CREATE TABLE COMENZI(
  nr_comanda NUMBER UNIQUE,
  id_user NUMBER,
  data_livrare DATE,
  adresa_livrare VARCHAR2(30),
  FOREIGN KEY(id_user) REFERENCES USERI(id_user)
);
DROP TABLE DETALII_COMANDA;

CREATE TABLE DETALII_COMANDA(
  nr_comanda NUMBER,
  id_parfum NUMBER,
  cantitate NUMBER,
  FOREIGN KEY(nr_comanda) REFERENCES COMENZI(nr_comanda),
  FOREIGN KEY(id_parfum) REFERENCES PARFUM(id_parfum)
);