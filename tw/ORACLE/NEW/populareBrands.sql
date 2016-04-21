DROP TABLE BRANDS CASCADE CONSTRAINTS;

CREATE TABLE BRANDS(
	id_brand NUMBER,
	nume_brand VARCHAR2(30),
	detalii VARCHAR2(500),
	PRIMARY KEY(id_brand)
);

INSERT INTO BRANDS(id_brand,nume_brand,detalii) VALUES(1,'Gucci','At the end of the 19th century, Guccio Gucci worked at exclusive hotels in London and in Paris. Impressed with the luxurious luggage of the guests, Gucci returned to Florence, where he set up shop and produced and sold the type of fine leather goods that he saw during his time abroad. The offerings of the early Gucci store were simple and only included leather items such as luggage, accessories, handbags, and shoes.');
INSERT INTO BRANDS(id_brand,nume_brand,detalii) VALUES(2,'Calvin Klein','In 1968, Klein founded Calvin Klein Limited, a coat shop in the York Hotel in New York City, with $10,000. The first Calvin Klein collection was a line of "youthful, understated coats and dresses" featured at the New York City store, Bonwit Teller.');
INSERT INTO BRANDS(id_brand,nume_brand,detalii) VALUES(3,'Marc Jacobs','At age 15, Jacobs worked as a stockboy at Charivari, a now-defunct avant-garde clothing boutique in New York City. While still at Parsons, Jacobs designed and sold his first line of hand-knit sweaters. He also designed his first collection for Reuben Thomas, Inc., under the Sketchbook label. With Robert Duffy, Jacobss creative collaborator, and business partner since the mid-1980s, he formed Jacobs Duffy Designs Inc.');
INSERT INTO BRANDS(id_brand,nume_brand,detalii) VALUES(4,'Yves Saint Laurent','In 1953, Saint Laurent submitted three sketches to a contest for young fashion designers, organized by the International Wool Secretariat. He won first place and was invited to attend the awards ceremony in Paris, in December of that year.[citation needed] While he and his mother were in Paris, they met Michel de Brunhoff, editor-in-chief of the French edition of Vogue magazine.');
INSERT INTO BRANDS(id_brand,nume_brand,detalii) VALUES(5,'DSQUARED2','Dean and Dan Caten were born in 1964 as Dean and Dan Catenacci in Toronto, Ontario and grew up in the Willowdale area. They are the youngest of nine children. Their father is from a small town near Sora, Italy.');
INSERT INTO BRANDS(id_brand,nume_brand,detalii) VALUES(6,'Giorgio Armani','Giorgio Armani is an Italian fashion house founded by Giorgio Armani which designs, manufactures, distributes and retails haute couture, ready-to-wear, leather goods, shoes, watches, jewelry, accessories, eyewear, cosmetics and home interiors. The brand markets these products under several labels, from the most expensive to the most accessible.: Armani Prive, Giorgio Armani, Emporio Armani, Armani Collezioni, AJ | Armani Jeans, AX | Armani Exchange. ');
INSERT INTO BRANDS(id_brand,nume_brand,detalii) VALUES(7,'Cristian Dior','Christian Dior, commonly known as Dior, is a French luxury goods company controlled and chaired by businessman Bernard Arnault who also heads LVMH – the worlds largest luxury group');
INSERT INTO BRANDS(id_brand,nume_brand,detalii) VALUES(8,'Dolce','Dolce is an Italian luxury industry fashion house founded in 1985 in Legnano by Italian designers Domenico Dolce and Stefano Gabbana. The two met in Milan in 1980 and worked for the same fashion house');
