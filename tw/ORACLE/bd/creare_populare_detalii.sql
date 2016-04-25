
DROP TABLE DETALII CASCADE CONSTRAINTS;

CREATE TABLE DETALII(
  id_detalii INTEGER,
  origine VARCHAR2(30),
  localizare VARCHAR2(30),
  caracteristici VARCHAR2(100),
  inmultire VARCHAR2(30),
  imagini VARCHAR2(100),
  beneficii VARCHAR2(100),
  regimDezvoltare VARCHAR2(100),
  perioadaCultivare VARCHAR2(30),
  soiuriInrudite VARCHAR2(40),
  culoare VARCHAR2(20),
  temperatura VARCHAR2(20),
  anotimp VARCHAR2(20),
  descriereEngleza VARCHAR(200), 
  PRIMARY KEY(id_detalii)
);

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza) VALUES(1,'America de Sud','teren inchis','are nevoie de lumina','divizare rizomi','Imagini/alstroemeriaAlba.jpeg','lots',
'miros deosebit ce improspateaza intreaga gradina o perioada lunga de timp','sera','martie-aprilie','alba','intre -2 si -5 ','primavara','nice flower');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza) VALUES(2,'America Centrala si de Sud','ghiveci',' orice tip de sol, cu conditia sa nu fie prea
 umed. Recomandat a se adauga humus.','bulbi','Imagini/amarilis.jpg','miros placut','ghiveci','gladiole','noiembrie-ianuarie','rosu','intre 10 si 15','primavara','');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza) VALUES(3,'vvv','vvv','vvv','vvv','Imagini/anemoneAlbastre.jpg','vvv','vvv','vvv',
'vvv','vvv','vvv','primavara','vvv');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza) VALUES(4,'Africa de Sud','vvv','vvv','vvv','Imagini/gerbera.jpg','vvv','vvv','vvv','vvv',
'vvv','vvv','iarna','vvv');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza) VALUES(5,'vvv','vvv','vvv','vvv','Imagini/caleAlba.jpg','vvv','vvv','vvv','vvv','vvv',
'vvv','toamna','vvv');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza) VALUES(6,'Europa','vvv','vvv','vvv','Imagini/mentaGradina.jpg','vvv','vvv','vvv','vvv',
'vvv','vvv','primavara','vvv');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza) VALUES(7,'vvv','vvv','vvv','vvv','Imagini/musetel.jpg','vvv','vvv','vvv','vvv','vvv',
'vvv','toamna','vvv');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza) VALUES(8,'Europa','rasad ,sere','nu sunt plante pretentioase','butasi, seminte','Imagini/panselute.jpg',
'vindeca acneea, calmeaza tusea, reduce inflamatiile, vindeca negii si alte probleme ale pielii','vvv','august-septembrie','patlagina, papadie','galben',
'intre -1 si -3','vara','vvv');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza) VALUES(9,'Grecia','gradina ,sera','vvv','seminte, butasi, altoire','Imagini/trandafirRosu.jpg',
'mirosul puternic si placut, folosit in produsele cosmetice','vvvv','februarie-martie','trandafiri roz, trandafiri albi','rosu','intre -7 si -10','vara','vvv');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza) VALUES(10,'Asia','gradina ,sera','vvv','seminte, butasi, altoire','Imagini/trandafirAlbastru.jpg',
'miros placut','vvv','februarie-martie','trandafiri rosii, trandafiri albi','albastru','intre -5 si -9','iarna','vvv');
