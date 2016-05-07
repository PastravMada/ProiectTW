
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
VALUES(101,1,'Alstroemeria alba','Alstroemeria albescens','Imagini/alstroemeriaAlba.jpg','Descoperita în Columbia în 1894 de Edward Ambre este una dintre cele mai frumoase specii, tulpina are 30-80 cm lungime si poate fi volubila la exemplare vârstnice , ea emite din mugurii de la baza lastari cu radacini mai ales în urma lucrarii de musuroire. Acestia sunt folositi la inmultire. Frunzele sunt cordiforme mari, de 25, 30 cm/15-20cm sunt lung petiolate si colorate verde stralucitor. Radacinile sunt puternice, groase si carnoase. Spata este mare de 8-20cm/8-20cm carnoasa, culoare carmin, roz sau alb, spadicele e drept sau usor curbat lung de 5-6 cm , alb sau galben.');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(102,2,'Amarilis','Amaryllis','Imagini/amarilis.jpg','Amaryllis este o planta tropicala de ghiveci, cu bulb, apreciata 
pentru florile sale colorate divers.Aceasta planta ne va atrage privirile datorita faptului ca are doar o tija cu boboc, sau cu floare,
 si nicio frunza. Uneori nici tija nu i se vede foarte bine, ci doar mugurul carnos al florii care iese din pamânt. ');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(103,3,'Anemone albastre','Anemone coronaria','Imagini/anemoneAlbastre.jpg','Anemona este o planta de  o frumusete aparte; face
 parte din familia Ranculacee si este originara din regiunile montane din jurul Marii Meditenane.');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(104,4,'Gerbera','Gerbera jamesonii','Imagini/gerbera.jpg','Gerbera este una dintre cele mai populare flori cultivate pentru taiere, insa ea se poate cultivata 
atat in gradina cat si ca floare de interior. Este o planta careia ii place foarte mult lumina si este deci potrivita gradinilor insorite 
si pervazelor orientate pe sud. Se recomanda insa, ca atunci cand vrei sa plantezi in gradina o floare abia cumparata sau care a stat in 
interior, sa faci o trecere gradata de la semiumbra la soare. Asadar trebuie tinuta un timp intr-un loc semiumbrit. Daca nu are suficienta 
lumina gerbera nu infloreste. ');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(105,5,'Cala alba','Zantedeschia aethiopica','Imagini/caleAlba.jpg','Cala este o planta de apa, eleganta. 
Florile albe rasar maiestuoase deasupra frunzelor mari si lucioase. Floarea este practic o bractee alba, incantatoare! Calele se numara 
printre cele mai apreciate flori pentru buchete.');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(106,6,'Menta de gradina','Mentha piperita, Mentha spicata','Imagini/mentaGradina.jpg','Menta este o planta aromatica excelenta atat 
pentru gradina, cat si pentru cultivarea in ghivece. Aceasta este foarte apreciata pentru mirosul sau placut si puternic, dar si pentru 
aroma minunata pe care o lasa mancarurilor si bauturilor.');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(107,7,'Musetel','Matricaria chamomilla','Imagini/musetel.jpg','Musetelul este una dintre cele mai populare plante medicinale. Este o planta ierboasa,
 aromata, raspandita in toate zonele de campie, pe pajisti, la margine de drum, in locuri insorite sau pe terenuri sarate. in unele regiuni din 
 tara mai este cunoscut si sub numele de romanita. Se deosebeste de alte specii asemanatoare prin mirosul aromat al florilor.');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(108,8,'Panselute','Viola tricolor','Imagini/panselute.jpg','Panseluta este o floare de origine europeana, care creste în toate
anotimpurile. A fost introdusa in America de Nord, unde s-a raspandit pe vaste teritorii si este cunoscuta ca Johnny Jump Up (desi numele este folosit pentru a 
denumi si alte specii similare precum Panseaua galbena). Shakespeare face o referire mai directa la Panseluta in Visul unei nopti de vara. Oberon il trimite
 pe Puck sa adune "o mica floare salbatica" pe care fetele o numeau "Iubire-in-trandavie". Motivul lui Oberon este ca a deviat o sageata trimisa de 
 Cupidon, destinata unei "vestale drepte, încoronata de vestici" (se presupune ca este vorba de Regina Elisabeta I) pentru a cadea peste planta 
 "inainte alba precum laptele, acum purpurie ca rana dragostei"');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(109,9,'Trandafir rosu','Rosa cymosa','Imagini/trandafirRosu.jpg','Trandafirul a fost intotdeauna apreciat pentru frumusetea sa. Vecii greci 
si romani au vazut in trandafir simbolul iubirii si astfel l-au asociat cu zeitele protectoare Afrodita respectiv Venus. De altfel stim si noi ca 
trandafirul rosu exprima pasiunea si sunt oferiti doar celei iubite. Dar trandafirul nu este doar expresia dragostei. Tot in Roma un trandafir salbatic 
era pus pe masa camerei in care se discutau lucruri secrete. De altfel termenul “sub rosa”, sau “sub semnul trandafirului” inseamna un secret de pastrat.');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(110,10,'Trandafir albastru','Rosa setigera','Imagini/trandafirAlbastru.jpg','Este mult mai rar, insa nu este atat de albastru ca cel obtinut prin 
colorare artificiala. Se spune ca ar fi fost adus din Asia de catre Alexandru cel Mare, insa e imposibil de gasit in prezent. Expertii japonezi au reusit
 sa creeze genetic un soi de trandafir albastru, care insa e mai mult spre mov, pastrand numele de trandafir albastru numai pentru ca s-a folosit pigment 
 albastru in procesul de prelucrare.');
 
 INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(111,11,'Stanjenel','Iris','Imagini/stanjenel.jpeg','Florile sunt doar puţin parfumate, prezinta trei petale orientate in jos si trei in sus, iar sub petale apar trei stamine si un ovar.
Stanjenelul se cultiva atat ca planta medicinala cat si decorativa, dar se foloseste si in industria de parfumuri si cosmetica.');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(112,12,'Narcisa','Narcissus','Imagini/narcisa.jpg','In limbajul florilor, narcisa exprima prietenia, bucuria, vacanta. Este considerata o floare a copiilor si a adolescentei. Se daruieste la nasterea unui copil, simbolizand bucuria de a intampina o noua viata. Ca floare a dragostei, narcisa exprina sinceritatea. ');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(113,13,'Muscate Englezesti','Geranium','Imagini/muscataEnglezeasca.jpg','Florile plantei sunt mari si au un aspect elegant, de unde si denumirea de muscata englezeasca.In general, aceste muscate sunt disponibile in nuante multiple, de la alb si crem, la violet si lila. Petalele au un aspect usor catifelat.');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(114,14,'Muscate Curgatoare','Pelargonium','Imagini/muscataCurgatoare.jpg','De la inceputul primaverii si pana toamna tarziu, muscatele curgatoare infrumuseteaza balcoanele si terasele iubitorilor de natura. Aceste plante se bucura de aprecierile generale datorita faptului ca infloresc in permanenta si din abundenta, au flori intr-o paleta coloristica variata si sunt usor de intretinut..');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(115,15,'Lalea Roz','Tulipa','Imagini/laleaRoz.jpg','Perfecte pentru prieteni si rude, lalelele roz simbolizeaza afectiuni si sentimente puternice, dar nu romantice.');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(116,16,'Lalea Rosie','Tulipa','Imagini/laleaRosie.jpg','Dragostea simbolizata de laleaua rosie este una puternica, care te mistuie. Daca vrei sa-ti exprimi sentimentele foarte puternice, care crezi ca sunt nepieritoare, aceasta culoare este perfecta.');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(117,17,'Lalea Alba','Tulipa','Imagini/laleaAlba.jpg','La fel ca si alte flori albe, laleaua de aceasta culoare reprezinta puritate, dar insemnatatea sa include si respect. Din acest motiv, un buchet de lalele albe este ideal atunci cand vrei sa-ti ceri scuze pentru o greseala.');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(118,18,'Lalea Albastra','Tulipa','Imagini/laleaAlbastra.jpg','.Lalelele reprezinta constanta si trainicia sentimentelor in ciuda diferitelor obstacole intalnite. Pentru crestini ea reprezinta vanitatea. Avand o frumusete trecatoare,lalelele pot simboliza si autoamagirea, ignorarea realitatii, iluzia, incapatanarea.');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(119,19,'Gladiola','Gladiolus','Imagini/gladiola.jpg','Gladiola , nume care se trage din latinescul "sabie", este o planta perena care se inmulteste prin bulbi, , din familia Iridaceae. Uneori denumita si "crinul sabie", cel mai folosit nume pentru aceasta planta ramane totusi, gladiola.');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(120,20,'Garoafa rosie','Dianthus Caryophyllus','Imagini/garoafaRosie.jpg','Garoafele sunt un gen de plante care infloreste anual, de doua ori pe an sau in continuu. Garoafa are frunze ascutite, lanceolate, de culoare gri-verzui, asezate de-a lungul tulpinii; frunzele se intorc usor in afara. Florile pot fi parfumate, simple sau duble, de mai multe culori. Exista multi hibrizi de garoafa care nu au parfum, dar au o varietate mai mare de culori..');
 
 INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(121,21,'Craciunita','Euphorbia pulcherrima','Imagini/craciunita.jpeg','Craciunita este una dintre plantele de apartament cel mai usor de ingrijit si, poate de aceea, una dintre cele mai des intalnite in apartamentele noastre. Planta este recunoscuta de toata lumea ca fiind singura planta cu proprietatea ei de a-si schimba culoarea frunzelor in rosu in preajma Craciunului.');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(122,22,'Begonia','Begonia','Imagini/begonia.jpg','Este o planta romantica, potrivita atat intr-un mediu rustic, cat si in spatiile moderne, unde rotunjimile sale atenueaza liniile uneori prea rigide.Florile sale sunt variat colorate, de la rosu, galben, portocaliu, roz pana la alb sau degradeuri..');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(123,23,'Trandafir Galben','Rosa rugosa luteus','Imagini/trandafirGalben.jpg','Desi culoarea galbena este adesea asociata cu stari de bucurie si fericire luminoasa, nu a fost intotdeauna asa. Din Evul Mediu pana in timpul epocii victoriene popoarele din Europa considerau culoarea galbena un simbol al vietii pline de neplaceri. Potrivit "limbajului florilor", amaraciunea, invidia si tradarea erau toate calitati care puteau fi "citite" in oferirea de trandafiri galbeni. In context romantic, un buchet de trandafiri galbeni trimis dupa o prima intalnire era un semn ca expeditorul nu se afla in cautarea unui atasament de durata..');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(124,24,'Crin','Lilium','Imagini/crin.jpg',' Aceasta planta are flori mari, parfumate, de diverse culori si cu un miros imbatator.In functie de specie si mirosul crinilor difera, unele avand un miros mai intens, care se mentine mai mult timp, altele neavand niciun fel de parfum.');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(125,25,'Iasomie','Jasminum','Imagini/iasomie.jpg','Cunoscuta in India sub denumirea de "regina florilor", iasomia este considerata nu numai o planta decorativa, ci si un remediu impotriva stresului si a altor tulburari nervoase..');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(126,26,'Ghiocel','Galanthus','Imagini/ghiocel.jpg','Ghioceii sunt vestitorii primaverii. Cand vedem capetele mici, albe si deliate ale ghioceilor iesind din zapada stim ca iarna este pe sfarsite si putem exclama plini de bucurie ca primavara va sosi aducand prospetime si voiosie in sufletele noastre..');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(127,27,'Ciclama','Cyclamen persicum','Imagini/ciclama.jpg','Creştere compactă, flori frumoase răsfrânte spre spate, pe tulpini lungi şi frunze decorative cu desene argintii şi verzi.Florile au culori strălucitoare sau nuanţe pastel, sunt mari şi frapante sau mici şi parfumate.');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(128,28,'Camelie','Camellia','Imagini/camelia.jpg','Camelia este un arbust originar din Japonia cu frunze persistente, de forma ovala, usor zimtate pe margini, de culoare verde-inchis, lucioase pe fata superioara. Florile solitare sau cate doua, sunt asemantoare cu florile de trandafir, dar fara miros.');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(129,29,'Papadie','Taraxacum officinale','Imagini/papadia.jpg','.Papadia este o planta erbacee din familia compozitelor, cu frunze lungi, crestate si cu flori galbene grupate in capitule. Mai este numita si buha, cicoare, crestațea, laptuca, lilicea, mața, papalunga, pilug, turci, curu-gainii, floarea-broastei, floarea-gsinii, floarea-mslaiului, floarea-sorului, floarea-turcului, flori-galbene, galbinele-grase, gusa-gainii, ouale-gainilor, papa-gainii, parasita-gainilor sau pui-de-gasca.');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(130,30,'Petunie','Petunia hybrida','Imagini/petunia.jpg','Petunia este una dintre cele mai populare si indragite flori pentru decor. In nenumarate culori, precum alb, galben, roz, rosu, albastru sau violet, floarea de petunie este in forma de trompeta , cu marginea ondulata sau franjuri.');
 
 INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(131,31,'Brandusa','Crocus vernus','Imagini/brandusa.jpeg','Brandusa de toamna este o planta medicinala care creste pe pasuni, fanete umede an zona de deal sau munte, care poate atinge chiar si inaltimea de 50 cm. Florile au culoare violet-purpurie. Brandusa infloreste in luna septembrie, iar fructele se formeaza in al doilea an.');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(132,32,'Crizantema','Chrysanthemum','Imagini/crizantema.jpg','Specifică toamnei, crizantema se gaseste sub formele cele mai diverse, de la tufele pitice pana la cele de un metru inaltime, cu flori care acopera aproape toata gama de culori cunoscuta, cu dimensiuni si forme dintre cele mai variate, de la simple la duble, involte (batute), stelate, globuloase etc.Toate au acel parfum minunat, inconfundabil, care ne anunta ca a venit toamna.');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(133,33,'Liliac','Syringa vulgaris','Imagini/liliac.jpg','Supranumit "floarea memoriei", oamenii spun ca mirosul sau trezeste amintiri de mult uitate, care pot fi retraite in amanunt. Liliacul semnifica misterul iubirii, care poate face ca o persoana sa uite de sine in dragostea pentru altul. De aceea, in functie de culorile sale, liliacul poate sa transmita mesaje de dragoste sau sentimente prietenesti.');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(134,34,'Lacramioara','Convallaria majalis','Imagini/lacramioara.jpg','Florile sunt albe (rareori roz pal), au forma de clopotei, masoara 5-10 mm in diametru si au un parfum imbietor. Planta infloreste de la inceputul primaverii pana la inceputul verii.');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(135,35,'Frezie','Freesia','Imagini/frezia.jpg','Plante delicate și parfumate, freziile sunt folosite în diverse aranjamente florale, singure, în asociere cu frunze proprii, in asociere cu Asparagus sau combinate cu alte specii de flori sau ramuri înflorite.');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(136,36,'Minirosa','Rosa chinensis minima','Imagini/minirosa.jpg','Trandafirii pitici sunt versiuni la scara redusa a trandafirilor obisnuiti, si desi variaza in multe feluri, toti au flori micute, uneori parfumate.');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(137,37,'Orhidee','Orchidaceae','Imagini/orhideea.jpg',' Este o planta perena si exista anumite specii capabile sa absoarba din apa mediului in care se afla substantele necesare supravietuirii. Nu e de mirare ca radacinile ei nu se gasesc in totalitate in pamant, ci si in afara recipientului in care creste.');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(138,38,'Zambila','Hyacinthus orientalis','Imagini/zambila.jpg','Bulbul de zambila produce un spic dens, compact de flori, de 15-30 cm inaltime. Zambile sunt foarte parfumate, in forma de clopotei, cu petale de flori refletate. Spicul dens de flori vine in nuante de alb, portocaliu, galben, roz, rosu, violet si albastru.');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(139,39,'Bujor','Paeonia','Imagini/bujor.jpg','In vechime, bujorii erau folositi pentru tratarea unei mari varietati de afectiuni , precum dureri de dinti, dureri de cap sau anchiloze. Se spunea ca aceste flori ar putea oferi protectie impotriva unor posesiuni demonice sau a deochiului , ele fiind amplasate de-a lungul drumului catre usa de intrare a caselor.');

INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
VALUES(140,40,'Nufar','Nuphar','Imagini/nufar.jpg','Nufarul alb este o planta erbacee perenă, ocrotita de lege, intalnita in ape stagnante sau lin curgatoare si adanci pana la 2 metri.Florile sunt albe, mari, cu un miros dulce si cu circa 20 de petale.');
