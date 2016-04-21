DROP TABLE COMENZI CASCADE CONSTRAINTS;

CREATE TABLE COMENZI(
	nr_comanda NUMBER,
	id_user NUMBER,
	id_parfum NUMBER,
	cantitate NUMBER,
	data_livrare DATE,
	adresa_livrare VARCHAR2(100),
	FOREIGN KEY(id_user) REFERENCES USERI(id_user),
	FOREIGN KEY(id_parfum) REFERENCES PARFUM(id_parfum)
);
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(7,2,1,5,TO_DATE('17/03/2011', 'dd/mm/yyyy'),'da');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(8,5,2,6,TO_DATE('17/09/2012', 'dd/mm/yyyy'),'da');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(9,5,3,12,TO_DATE('25/12/2012', 'dd/mm/yyyy'),'da');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(4,3,4,2,TO_DATE('17/12/2012', 'dd/mm/yyyy'),'str.minune');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(2,6,5,5,TO_DATE('17/12/2012', 'dd/mm/yyyy'),'str. copou');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(1,7,6,5,TO_DATE('17/12/2012', 'dd/mm/yyyy'),'str. dacia');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(10,2,7,4,TO_DATE('17/12/2012', 'dd/mm/yyyy'),'str. independentei');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(11,8,11,5,TO_DATE('17/12/2012', 'dd/mm/yyyy'),'str. independentei');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(12,9,12,9,TO_DATE('17/12/2012', 'dd/mm/yyyy'),'str. independentei');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(13,2 ,55,5,TO_DATE('17/01/2012', 'dd/mm/yyyy'),'da');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(14,5 ,56,10,TO_DATE('17/03/2012', 'dd/mm/yyyy'),'da');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(15,5 ,21,5,TO_DATE('17/05/2012', 'dd/mm/yyyy'),'da');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(16,3,22,6,TO_DATE('17/10/2012', 'dd/mm/yyyy'),'str.minune');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(17,6,23,7,TO_DATE('17/12/2013', 'dd/mm/yyyy'),'str. copou');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(18,7,24,10,TO_DATE('17/07/2013', 'dd/mm/yyyy'),'str. dacia');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(19,2,29,23,TO_DATE('17/12/2014', 'dd/mm/yyyy'),'str. independentei');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(20,8,101,10,TO_DATE('17/02/2015', 'dd/mm/yyyy'),'str. independentei');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(21,9,100,12,TO_DATE('17/05/2015', 'dd/mm/yyyy'),'str. independentei');

INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(22,2,51,5,TO_DATE('17/03/2011', 'dd/mm/yyyy'),'da');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(23,5,52,6,TO_DATE('17/09/2012', 'dd/mm/yyyy'),'da');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(24,5,53,12,TO_DATE('25/12/2012', 'dd/mm/yyyy'),'da');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(25,3,58,2,TO_DATE('17/12/2012', 'dd/mm/yyyy'),'str.minune');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(26,6,59,5,TO_DATE('17/12/2012', 'dd/mm/yyyy'),'str. copou');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(27,7,70,5,TO_DATE('17/12/2012', 'dd/mm/yyyy'),'str. dacia');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(28,2,71,4,TO_DATE('17/12/2012', 'dd/mm/yyyy'),'str. independentei');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(29,8,72,5,TO_DATE('17/12/2012', 'dd/mm/yyyy'),'str. independentei');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(30,9,73,9,TO_DATE('17/12/2012', 'dd/mm/yyyy'),'str. independentei');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(31,7 ,74,5,TO_DATE('17/01/2012', 'dd/mm/yyyy'),'da');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(32,5 ,75,10,TO_DATE('17/03/2012', 'dd/mm/yyyy'),'da');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(33,10 ,76,5,TO_DATE('17/05/2012', 'dd/mm/yyyy'),'da');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(34,3,77,6,TO_DATE('17/10/2012', 'dd/mm/yyyy'),'str.minune');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(35,6,78,7,TO_DATE('17/12/2013', 'dd/mm/yyyy'),'str. copou');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(36,11,79,10,TO_DATE('17/07/2013', 'dd/mm/yyyy'),'str. dacia');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(37,2,16,90,TO_DATE('17/12/2014', 'dd/mm/yyyy'),'str. independentei');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(38,8,27,10,TO_DATE('17/02/2015', 'dd/mm/yyyy'),'str. independentei');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(39,10,28,12,TO_DATE('17/05/2015', 'dd/mm/yyyy'),'str. independentei');


INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(40,9,51,5,TO_DATE('17/03/2011', 'dd/mm/yyyy'),'da');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(41,5,52,6,TO_DATE('17/09/2012', 'dd/mm/yyyy'),'da');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(42,5,53,12,TO_DATE('25/12/2012', 'dd/mm/yyyy'),'da');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(43,4,44,2,TO_DATE('17/12/2012', 'dd/mm/yyyy'),'str.minune');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(44,6,59,5,TO_DATE('17/12/2012', 'dd/mm/yyyy'),'str. copou');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(45,7,70,5,TO_DATE('17/12/2012', 'dd/mm/yyyy'),'str. dacia');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(46,2,46,4,TO_DATE('17/12/2012', 'dd/mm/yyyy'),'str. independentei');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(47,8,47,5,TO_DATE('17/12/2012', 'dd/mm/yyyy'),'str. independentei');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(48,3,83,9,TO_DATE('17/12/2012', 'dd/mm/yyyy'),'str. independentei');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(49,2 ,82,5,TO_DATE('17/01/2012', 'dd/mm/yyyy'),'da');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(50,1 ,91,10,TO_DATE('17/03/2012', 'dd/mm/yyyy'),'da');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(51,5 ,14,5,TO_DATE('17/05/2012', 'dd/mm/yyyy'),'da');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(52,3,13,6,TO_DATE('17/10/2012', 'dd/mm/yyyy'),'str.minune');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(53,6,18,7,TO_DATE('17/12/2013', 'dd/mm/yyyy'),'str. copou');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(54,11,17,10,TO_DATE('17/07/2013', 'dd/mm/yyyy'),'str. dacia');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(55,2,57,90,TO_DATE('17/12/2014', 'dd/mm/yyyy'),'str. independentei');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(56,10,25,10,TO_DATE('17/02/2015', 'dd/mm/yyyy'),'str. independentei');
INSERT INTO COMENZI(nr_comanda,id_user,id_parfum,cantitate,data_livrare,adresa_livrare) VALUES(57,9,26,12,TO_DATE('17/05/2015', 'dd/mm/yyyy'),'str. independentei');