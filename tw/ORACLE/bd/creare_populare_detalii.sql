

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
  descriereFranceza VARCHAR(200), 
  PRIMARY KEY(id_detalii)
);

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(1,'America','sera','Are nevoie de lumina.','butasi','Imagini/alstroemeriaAlba.jpeg',
'Miros deosebit ce improspateaza intreaga gradina o perioada lunga de timp.','ghiveci','martie-aprilie','','alba','intre -2 si -5 ','primavara','Smack you around the garden refreshes a long time.','Odeur qui rafraîchit tout le jardin depuis longtemps.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(2,'America','sera','Orice tip de sol, cu conditia sa nu fie prea umed. Recomandat a se adauga humus.','bulbi','Imagini/amarilis.jpg','Miros placut.','ghiveci','noiembrie-ianuarie','gladiole','rosie','intre 10 si 15','primavara','Pleasant smell.','Odeur agréable.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(3,'Europa','campie','Au nevoie de lumina si de un sol umed.','tuberculi','Imagini/anemoneAlbastre.jpg','Durata lunga de viata.','oricare','martie-august',
'panseluta','albastre','intre 10 si 15','primavara','Long life.','Longue durée de vie.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(4,'Africa','campie','Expunere:loc deschis si insorit.','seminte','Imagini/gerbera.jpg','Are tulpini puternice  si flori stralucitoare.','nisipos','februarie-septembrie','',
'roz','intre 10 ai 15','primavara','Has strong stems and bright flowers .','A forte tiges et fleurs aux couleurs vives.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(5,'Europa','deal','Solul trebuie sa fie bine drenat, umed.','bulbi','Imagini/caleAlba.jpg','Infloresc pe tulpini ciudate, rotunde,iar fiecare tuber face 10, chiar si 30 de flori.','argilos','martie-septembrie','','alba',
'intre  10 si 20','primavara','Bloom on stems strange , round , and each tuber is 10 , even 30 flowers.','Bloom sur les tiges étrange, rond, et chaque tubercule est 10, même 30 fleurs.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(6,'Europa','campie','Planta ierboasa care creste in culturi.','tuberculi','Imagini/mentaGradina.jpg','Are proprietati medicinale.','nisipos','aprilie-octombrie','',
'verde','intre 10 si 20','primavara','It has medicinal properties .','Il a des propriétés médicinales.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(7,'Europa','campie','Are nevoie de multa lumina.','seminte','Imagini/musetel.jpg','Se foloseste pentru ceaiuri.','calcaros','mai-iunie','','alb',
'intre 20 si 30','primavara','It is used for teas.','Il est utilisé pour les thés.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(8,'Europa','sera','Nu sunt plante pretentioase','seminte','Imagini/panselute.jpg',
'Vindeca acneea, calmeaza tusea, reduce inflamatiile, vindeca negii si alte probleme ale pielii.','ghiveci','august-septembrie','papadia','galben',
'intre 10 si 15','vara','Cure acne , soothes coughs , reduce inflammation , heal warts and other skin problems .','Cure acné, apaise la toux, de réduire l-inflammation, guérir les verrues et les autres problèmes de peau.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(9,'Europa','campie','Plantarea se face intr-un loc insoris si uscat.','butasi','Imagini/trandafirRosu.jpg',
'Mirosul puternic si placut, folosit in produsele cosmetice.','oricare','februarie-martie','trandafir','rosie','intre 20 si 30','vara','The strong smell and pleasant, used in cosmetics. ','La forte odeur et agréable, utilisé dans les cosmétiques.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(10,'Europa','campie','Plantarea se face intr-un loc insoris si uscat.','butasi','Imagini/trandafirAlbastru.jpg',
'Mirosul puternic si placut, folosit in produsele cosmetice.','oricare','februarie-martie','trandafir','albastru','intre 20 si 30','vara','The strong smell and pleasant, used in cosmetics. ','La forte odeur et agréable, utilisé dans les cosmétiques.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(11,'Africa','campie','Are un rizom gros, cu miros de iarbă, din care porneşte tulpina înaltă şi frunzele lanceolate','bulbi','Imagini/stanjenel.jpg',
'Proprietati terapeutice.','nisipos','februarie-martie','','albastru','intre 5 si 9','iarna','Therapeutic properties.','Propriétés thérapeutiques.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(12,'Africa','campie','Bulbii sunt otravitori','bulbi','Imagini/narcisa.jpg',
'Proprietati terapeutice','argilos','martie-aprilie','','galbena','intre 15 si 19','primavara','Therapeutic properties.','Propriétés thérapeutiques.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(13,'Africa','campie','Solul care ii prieste cel mai bine este pamantul de gradina si locurile umbroase','bulbi','Imagini/MuscataEnglezeasca.jpg',
'Creste armonios si va inflori ca nicio alta planta dintre cele pe care le ai deja.','calcaros','februarie-septembrie','','roz','intre 25 si 29','vara','Grow harmoniously and that no other plant will bloom of the ones you already have .','Cultiver harmonieusement et qu-aucune autre plante fleurira de ceux que vous avez déjà.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(14,'Africa','campie',' Sunt foarte sensibile la frig.','bulbi','Imagini/MuscataCurgatoare.jpg',
'Creste armonios si va inflori ca nicio alta planta dintre cele pe care le ai deja.','calcaros','februarie-septembrie','','rosie','intre 25 si 29','vara','Grow harmoniously and that no other plant will bloom of the ones you already have .','Cultiver harmonieusement et qu-aucune autre plante fleurira de ceux que vous avez déjà.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(15,'Asia','deal','Sunt plante usor de cultivat','bulbi','Imagini/laleaRoz.jpg',
'Forma de cupa, culorile vibrante si eleganta sunt doar cateva dintre trasaturile acestei plante.','nisipos','martie-aprilie','lalea','roz','intre 15 si 10','primavara','Cupped, vibrant colors and elegance are some of the traits of this plant.','Coupe, couleurs vives et l-élégance sont quelques-uns des traits de cette plante.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(16,'Asia','deal','Sunt plante usor de cultivat','bulbi','Imagini/laleaRosie.jpg',
'Forma de cupa, culorile vibrante si eleganta sunt doar cateva dintre trasaturile acestei plante.','nisipos','martie-aprilie','lalea','rosie','intre 15 si 10','primavara','Cupped, vibrant colors and elegance are some of the traits of this plant.','Coupe, couleurs vives et l-élégance sont quelques-uns des traits de cette plante.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(17,'Asia','deal','Sunt plante usor de cultivat','bulbi','Imagini/laleaAlba.jpg',
'Froma de cupa, culorile vibrante si eleganta sunt doar cateva dintre trasaturile acestei plante.','nisipos','martie-aprilie','lalea','alb','intre 15 si 10','primavara','Cupped, vibrant colors and elegance are some of the traits of this plant.','Coupe, couleurs vives et l-élégance sont quelques-uns des traits de cette plante.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(18,'Asia','deal','Sunt plante usor de cultivat','bulbi','Imagini/laleaAlbastra.jpg',
'Forma de cupa, culorile vibrante si eleganta sunt doar cateva dintre trasaturile acestei plante.','nisipos','martie-aprilie','lalea','albastru','intre 15 si 10','primavara','Cupped, vibrant colors and elegance are some of the traits of this plant.','Coupe, couleurs vives et l-élégance sont quelques-uns des traits de cette plante.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(19,'Europa','campie','Sunt plante care nu rezista la frig.','bulbi','Imagini/gladiola.jpg',
'Au petalele dantelate sau franjurate.','calcaros','iunie-august','','rosie','intre 15 si 10','vara','There are plants that withstand the cold.','Avoir festonné ou pétales frangés.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(20,'America','deal','Este o planta care are nevoie de soare din plin si trebuie udata la anumite intervale de timp.','butasi','Imagini/garoafaRosie.jpg',
'Florile pot fi parfumate, simple sau duble, de mai multe culori.','argilos','octombrie-martie','','rosie','intre -5 si 10','iarna','Fragrant flowers can be single or double , multiple colors.','Fleurs parfumées peuvent être, de multiples couleurs simples ou doubles.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(21,'Europa','sera','Este preferat sa mentineti doar pamantul umed.','seminte','Imagini/craciunita.jpg',
'Planta are proprietatea de a-si schimba culoarea frunzelor in rosu in preajma Craciunului.','ghiveci','decembrie-februarie','','rosie','intre -5 si 9','iarna','The plant has the ability to change color red leaves around Christmas .','L-usine a la capacité de changer la couleur des feuilles rouges autour de Noël.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(22,'Europa','sera','Necesita amplasare intr-un spatiu luminos, ferita de razele soarelui','bulbi','Imagini/begonia.jpg',
'Recunoscute pentru frumusetea florilor delicate care seamana foarte bine cu trandafiri miniaturali.','ghiveci','ianuarie-deccembrie','','portocalie','intre 20 si 25','vara','Known for delicate beauty of flowers that looks very much like miniature roses .','Connu pour la beauté délicate de fleurs qui ressemble beaucoup à roses miniatures.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(23,'Europa','campie','Plantarea se face intr-un loc insoris si uscat.','butasi','Imagini/trandafirGalben.jpg',
'Mirosul puternic si placut, folosit in produsele cosmetice.','nisipos','februarie-martie','trandafir','galben','intre 20 si 30','vara','The strong smell and pleasant, used in cosmetics.','La forte odeur et agréable, utilisé dans les cosmétiques.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(24,'Europa','sera','Apa din vazele cu crini trebuie schimbata zilnic .','seminte','Imagini/crin.jpg',
'Flori foarte puternic parfumate, este bine sa fie scoase din camera de locuit.','ghiveci','ianuarie-decembrie','','alb','intre 15 si 29','vara','Very strongly scented flowers , it is good to be removed from the living room .','Très fleurs fortement parfumé, il est bon d-être retiré de la salle de séjour.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(25,'Europa','campie','Mirosul florilor de iasomie este un adevărat medicament!','butasi','Imagini/iasomie.jpg',
'Proprietati terapeutice.','oricare','iunie-august','','alb','intre 25 si 30','vara','Therapeutic properties.','Propriétés thérapeutiques.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(26,'Europa','munte','Planta are nevoie de umezeala si de racoare.','bulbi','Imagini/ghiocei.jpg',
'Floarea albă este actinomorfă, bisexuată, are șase petale.','calcaros','februarie-martie','','alb','intre -5 si 9','iarna','Actinomorfe white flower is bisexual , it has six petals .','Actinomorfe fleur blanche est bisexuelle, il a six pétales.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(27,'Asia','sera','Vara, ele trebuie udate abundenta.','tuberculi','Imagini/ciclama.jpg',
'Florile au culori strălucitoare sau nuanţe pastel, sunt mari şi frapante sau mici şi parfumate.','ghiveci','februarie-mai','','roz','intre 10 si 20','primavara','The flowers have bright colors or pastel shades , large and small striking or scented .','Les fleurs ont des couleurs vives ou des tons pastel, frappant grandes et petites ou parfumée.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(28,'Europa','campie','Floarea trebuie să  stea într-un loc aerisit, uşor umbrit, ferit de soare','butasi','Imagini/camelia.jpg',
'Există numeroase varietăţi ale acestei flori, ce au aspectul unui trandafir.','nisipos','mai-august','','roz','intre 15 si 19','primavara','There are many varieties of this flower that look like a rose.','Il existe de nombreuses variétés de cette fleur qui ressemble à une rose.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(29,'Toate','campie','Perioada cea mai bună pentru a recolta păpădia este primăvara.','seminte','Imagini/papadia.jpg',
'Rădăcina şi frunzele sunt bogate în fructoză şi insulină.','argilos','aprilie-mai','','galben','intre 15 si 19','primavara','The root and leaves are rich in fructose and insulin.','La racine et les feuilles sont riches en fructose et de l-insuline.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(30,'America','campie','Aceste plante au nevoie de pamant fertilizat cu substante organice.','seminte','Imagini/petunia.jpg',
'Este o planta decorativa cu un parfum puternic si placut iar aspectul lor este destul de firav.','oricare','mai-octombrie','','mov','intre 15 si 19','vara','It is a decorative plant with a strong and pleasant fragrance and their appearance is quite frail .','Il est une plante décorative avec un parfum fort et agréable et leur apparence est assez fragile.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(31,'Asia','munte','Preferă un sol bine drenat, în locuri însorite sau la umbra copacilor și arbuștilor','bulbi','Imagini/brandusa.jpg',
'Este o planta medicinala.','oricare','martie-aprilie','','mov','intre 10 si 20','primavara','It is a medicinal plant .','Il est une plante médicinale.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(32,'America','deal','Sensibilă la durată de iluminare.De asemenea, este sensibilă si la temperaturile extreme.','bulbi','Imagini/crizantema.jpg',
'Au florile cu dimensiuni şi forme dintre cele mai variate, de la simple la duble, involte .','nisipos','martie-mai','','galbena','intre 10 si 15','primavara','Have flowers with sizes and shapes of the most varied , from simple to double abundant .','Avoir des fleurs avec des tailles et des formes des plus variées, du simple au double abondante.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(33,'Europa','deal','Poate atinge pana la 4 metri inaltime.','butasi','Imagini/liliac.jpg',
'Ofera un spectacol imbatator si colorat.','nisipos','aprilie-mai','','alb','intre 15 si 19','primavara','It offers a heady and colorful show .','Il offre un spectacle enivrant et coloré.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(34,'Europa','munte','Este o planta cultivata pentru frumusetea florilor si parfumul acestora.','bulbi','Imagini/lacramioara.jpg',
'Este folosita ca hrana pentru larvele unor fluturi si molii.','argilos','martie-aprilie','','alb','intre 10 si 15','primavara','It is used as food for the larvae of butterflies and moths .','Il est utilisé comme nourriture pour les larves de papillons et les mites.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(35,'Europa','munte','Sunt cultivate intr-un loc aerisit care sa beneficieze de multa lumina,','bulbi','Imagini/frezia.jpg',
'Sunt apreciate pentru parfumul si aspectul lor delicat.','argilos','februarie-mai','','galben','intre 15 si 20','primavara','They are prized for their delicate scent and appearance .','Ils sont appréciés pour leur parfum délicat et de l-apparence.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(36,'Europa','sera','Plantarea se face intr-un loc insoris si uscat.','butasi','Imagini/minirosa.jpg',
'Mirosul puternic si placut, folosit in produsele cosmetice.','ghiveci','februarie-martie','trandafir','roz','intre 20 si 30','vara','The strong smell and pleasant, used in cosmetics .','La forte odeur et agréable, utilisé dans les cosmétiques.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(37,'Europa','sera','Este foarte sensibila la schimbarile bruste de temperatura,','bulbi','Imagini/orhideea.jpg',
'Florile rezista luni la rand.','ghiveci','mai-octombrie','','alb','intre 15 si 20','primavara','Flowers resist months in a row .','Fleurs résistent mois dans une rangée.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(38,'Europa','munte','Zambila in ghiveci nu are nevoie de altceva decat de apa','bulbi','Imagini/zambila.jpg',
'O zambila inflorita, cu bulbul fixat in solul din ghiveci, poate sa tina si cateva saptamani.','ghiveci','mai-august','','roz','intre 15 si 19','primavara','A blooming hyacinth with bulb fixed in the soil of potted may take a few weeks.','Une hyacinthe floraison avec ampoule fixe dans le sol de pot peut prendre quelques semaines.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(39,'Asia','deal','Floarea isi schimba culoarea de cand se deschide si pana se scutura.','bulbi','Imagini/bujor.jpg',
'Erau folositi pentru tratarea unei mari varietati de afectiuni.','calcaros','mai-august','','roz','intre 15 si 20','primavara','They were used to treat a wide variety of ailments.','Ils ont été utilisés pour traiter une grande variété de maladies.');

INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES(40,'Europa','delta','Creste in apele statatoare si lin curgatoare.','seminte','Imagini/nufar.jpg',
'Florile sunt frecvent aromate, au petalele de culori diferite asezate pe mai multe randuri.','mlastinos','mai-august','','alb','intre 5 si 10','primavara','The flowers are often fragrant petals of different colors are arranged in several rows.','Les fleurs sont souvent pétales odorantes de couleurs différentes sont placées à plusieurs reprises.');
