DROP TABLE PROMOTII;

CREATE TABLE PROMOTII(
  id_parfum NUMBER,
  discount NUMBER,
  data_inceput DATE,
  data_sfarsit DATE,
  FOREIGN KEY(id_parfum) REFERENCES PARFUM(id_parfum)
);

INSERT INTO PROMOTII(id_parfum,discount,data_inceput,data_sfarsit) VALUES(6,20,TO_DATE('30/05/2015','dd/mm/yyyy'),TO_DATE('15/06/2015','dd/mm/yyyy'));
INSERT INTO PROMOTII(id_parfum,discount,data_inceput,data_sfarsit) VALUES(3,20,TO_DATE('22/05/2015','dd/mm/yyyy'),TO_DATE('30/06/2015','dd/mm/yyyy'));
INSERT INTO PROMOTII(id_parfum,discount,data_inceput,data_sfarsit) VALUES(4,50,TO_DATE('21/07/2015','dd/mm/yyyy'),TO_DATE('31/08/2015','dd/mm/yyyy'));
INSERT INTO PROMOTII(id_parfum,discount,data_inceput,data_sfarsit) VALUES(5,50,'12-may-2015','30-jun-2015');
INSERT INTO PROMOTII(id_parfum,discount,data_inceput,data_sfarsit) VALUES(1,75,'27-may-2015','30-jun-2015');
INSERT INTO PROMOTII(id_parfum,discount,data_inceput,data_sfarsit) VALUES(45,25,'01-may-2015','01-july-2015');
INSERT INTO PROMOTII(id_parfum,discount,data_inceput,data_sfarsit) VALUES(50,15,'12-may-2015','12-jun-2015');
INSERT INTO PROMOTII(id_parfum,discount,data_inceput,data_sfarsit) VALUES(44,50,'01-may-2015','14-jun-2015');
INSERT INTO PROMOTII(id_parfum,discount,data_inceput,data_sfarsit) VALUES(46,75,'15-may-2015','22-jun-2015');
INSERT INTO PROMOTII(id_parfum,discount,data_inceput,data_sfarsit) VALUES(47,30,'01-jun-2015','03-july-2015');
INSERT INTO PROMOTII(id_parfum,discount,data_inceput,data_sfarsit) VALUES(16,5,'07-may-2015','20-jun-2015'); 
INSERT INTO PROMOTII(id_parfum,discount,data_inceput,data_sfarsit) VALUES(7,20,TO_DATE('30/05/2015','dd/mm/yyyy'),TO_DATE('15/06/2015','dd/mm/yyyy'));
INSERT INTO PROMOTII(id_parfum,discount,data_inceput,data_sfarsit) VALUES(8,20,TO_DATE('22/05/2015','dd/mm/yyyy'),TO_DATE('30/06/2015','dd/mm/yyyy'));
INSERT INTO PROMOTII(id_parfum,discount,data_inceput,data_sfarsit) VALUES(81,50,TO_DATE('21/05/2015','dd/mm/yyyy'),TO_DATE('30/08/2015','dd/mm/yyyy'));
INSERT INTO PROMOTII(id_parfum,discount,data_inceput,data_sfarsit) VALUES(91,50,'12-may-2015','30-jun-2015');
INSERT INTO PROMOTII(id_parfum,discount,data_inceput,data_sfarsit) VALUES(10,75,'27-may-2015','30-jun-2015');
INSERT INTO PROMOTII(id_parfum,discount,data_inceput,data_sfarsit) VALUES(14,25,'01-may-2015','01-july-2015');
INSERT INTO PROMOTII(id_parfum,discount,data_inceput,data_sfarsit) VALUES(55,15,'12-may-2015','12-jun-2015');
INSERT INTO PROMOTII(id_parfum,discount,data_inceput,data_sfarsit) VALUES(56,50,'01-may-2015','14-jun-2015');
INSERT INTO PROMOTII(id_parfum,discount,data_inceput,data_sfarsit) VALUES(23,75,'15-may-2015','22-jun-2015');
INSERT INTO PROMOTII(id_parfum,discount,data_inceput,data_sfarsit) VALUES(24,30,'01-jun-2015','03-july-2015');
INSERT INTO PROMOTII(id_parfum,discount,data_inceput,data_sfarsit) VALUES(28,5,'07-may-2015','20-jun-2015');
INSERT INTO PROMOTII(id_parfum,discount,data_inceput,data_sfarsit) VALUES(51,20,TO_DATE('30/05/2015','dd/mm/yyyy'),TO_DATE('15/06/2015','dd/mm/yyyy'));
INSERT INTO PROMOTII(id_parfum,discount,data_inceput,data_sfarsit) VALUES(53,20,TO_DATE('22/05/2015','dd/mm/yyyy'),TO_DATE('30/06/2015','dd/mm/yyyy'));
INSERT INTO PROMOTII(id_parfum,discount,data_inceput,data_sfarsit) VALUES(72,50,TO_DATE('21/05/2015','dd/mm/yyyy'),TO_DATE('30/07/2015','dd/mm/yyyy'));
INSERT INTO PROMOTII(id_parfum,discount,data_inceput,data_sfarsit) VALUES(73,50,'12-may-2015','30-jun-2015');
INSERT INTO PROMOTII(id_parfum,discount,data_inceput,data_sfarsit) VALUES(74,75,'27-may-2015','30-jun-2015');
INSERT INTO PROMOTII(id_parfum,discount,data_inceput,data_sfarsit) VALUES(100,25,'01-may-2015','01-july-2015');
INSERT INTO PROMOTII(id_parfum,discount,data_inceput,data_sfarsit) VALUES(101,15,'12-may-2015','12-jun-2015');