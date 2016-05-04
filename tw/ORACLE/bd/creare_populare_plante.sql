
DROP TABLE PLANTE CASCADE CONSTRAINTS;

CREATE TABLE PLANTE(
  id_planta NUMBER,
  id_detalii NUMBER,
  denumirePopulara VARCHAR2(40),
  denumireStiintifica VARCHAR2(40),
  imagine VARCHAR2(30),
  descriere VARCHAR2(800),
  PRIMARY KEY(id_planta)
);

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(111,1,'Alstroemeria alba','Alstroemeria albescens','Imagini/alstroemeriaAlba.jpeg','Descoperita în Columbia în 1894 de Edward Ambre este una 
dintre cele mai frumoase specii, tulpina are 30-80 cm lungime si poate fi volubila la exemplare vârstnice , ea emite din mugurii de la baza lîstari
 cu radacini mai ales în urma lucrarii de musuroire. Acestia sunt folositi la înmultire. Frunzele sunt cordiforme mari, de 25, 30 cm/15-20cm sunt 
 lung petiolate si colorate verde stralucitor. Radacinile sunt puternice, groase si carnoase. Spata este mare de 8-20cm/8-20cm carnoasa, culoare carmin ,
 roz sau alb, spadicele e drept sau usor curbat lung de 5-6 cm , alb sau galben.');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(121,2,'Amarilis','Amaryllis','Imagini/amarilis.jpg','Amaryllis este o planta tropicala de ghiveci, cu bulb, apreciata 
pentru florile sale colorate divers.Aceasta planta ne va atrage privirile datorita faptului ca are doar o tija cu boboc, sau cu floare,
 si nicio frunza. Uneori nici tija nu i se vede foarte bine, ci doar mugurul carnos al florii care iese din pamânt. ');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(131,3,'Anemone albastre','Anemone coronaria','Imagini/anemoneAlbastre.jpg','Anemona este o planta de  o frumusete aparte; face
 parte din familia Ranculacee si este originara din regiunile montane din jurul Marii Meditenane.');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(141,4,'Gerbera','Gerbera jamesonii','Imagini/gerbera.jpg','Gerbera este una dintre cele mai populare flori cultivate pentru taiere, insa ea se poate cultivata 
atat in gradina cat si ca floare de interior. Este o planta careia ii place foarte mult lumina si este deci potrivita gradinilor insorite 
si pervazelor orientate pe sud. Se recomanda insa, ca atunci cand vrei sa plantezi in gradina o floare abia cumparata sau care a stat in 
interior, sa faci o trecere gradata de la semiumbra la soare. Asadar trebuie tinuta un timp intr-un loc semiumbrit. Daca nu are suficienta 
lumina gerbera nu infloreste. ');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(151,5,'Cala alba','Zantedeschia aethiopica','Imagini/caleAlba.jpg','Cala este o planta de apa, eleganta. 
Florile albe rasar maiestuoase deasupra frunzelor mari si lucioase. Floarea este practic o bractee alba, incantatoare! Calele se numara 
printre cele mai apreciate flori pentru buchete.');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(161,6,'Menta de gradina','Mentha piperita, Mentha spicata','Imagini/mentaGradina.jpg','Menta este o planta aromatica excelenta atat 
pentru gradina, cat si pentru cultivarea in ghivece. Aceasta este foarte apreciata pentru mirosul sau placut si puternic, dar si pentru 
aroma minunata pe care o lasa mancarurilor si bauturilor.');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(171,7,'Musetel','Matricaria chamomilla','Imagini/musetel.jpg','Musetelul este una dintre cele mai populare plante medicinale. Este o plantã ierboasã,
 aromatã, rãspânditã în toate zonele de câmpie, pe pajisti, la margine de drum, în locuri însorite sau pe terenuri sãrate. În unele regiuni din 
 tarã mai este cunoscut si sub numele de romanitã. Se deosebeste de alte specii asemãnãtoare prin mirosul aromat al florilor');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(181,8,'Panselute','Viola tricolor','Imagini/panselute.jpg','Panseluta este o floare de origine europeana, care creste în toate
anotimpurile. A fost introdusa în America de Nord, unde s-a raspândit pe vaste teritorii si este cunoscuta ca Johnny Jump Up (desi numele este folosit pentru a 
denumi si alte specii similare precum Panseaua galbena). Shakespeare face o referire mai directa la Panseluta în Visul unei nopti de vara. Oberon îl trimite
 pe Puck sa adune "o mica floare salbatica" pe care fetele o numeau "Iubire-în-trândavie". Motivul lui Oberon este ca a deviat o sageata trimisa de 
 Cupidon, destinata unei "vestale drepte, încoronata de vestici" (se presupune ca este vorba de Regina Elisabeta I) pentru a cadea peste planta 
 "înainte alba precum laptele, acum purpurie ca rana dragostei"');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(191,9,'Trandafir rosu','Rosa cymosa','Imagini/trandafirRosu.jpg','Trandafirul a fost intotdeauna apreciat pentru frumusetea sa. Vecii greci 
si romani au vazut in trandafir simbolul iubirii si astfel l-au asociat cu zeitele protectoare Afrodita respectiv Venus. De altfel stim si noi ca 
trandafirul rosu exprima pasiunea si sunt oferiti doar celei iubite. Dar trandafirul nu este doar expresia dragostei. Tot in Roma un trandafir salbatic 
era pus pe masa camerei in care se discutau lucruri secrete. De altfel termenul “sub rosa”, sau “sub semnul trandafirului” inseamna un secret de pastrat.');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(101,10,'Trandafir albastru','Rosa setigera','Imagini/trandafirAlbastru.jpg','Este mult mai rar, insa nu este atat de albastru ca cel obtinut prin 
colorare artificiala. Se spune ca ar fi fost adus din Asia de catre Alexandru cel Mare, insa e imposibil de gasit in prezent. Expertii japonezi au reusit
 sa creeze genetic un soi de trandafir albastru, care insa e mai mult spre mov, pastrand numele de trandafir albastru numai pentru ca s-a folosit pigment 
 albastru in procesul de prelucrare.');