
DROP TABLE USERI CASCADE CONSTRAINTS;

CREATE TABLE USERI(
  id_user INTEGER,
  username VARCHAR2(30),
  password VARCHAR2(30),
  nume VARCHAR2(30),
  prenume VARCHAR2(30),
  email VARCHAR2(30),
  sex VARCHAR2(30),
  oras VARCHAR2(30),
  adresa VARCHAR2(50),
  telefon VARCHAR2(10),
  PRIMARY KEY(id_user)
);

DECLARE
  v_i NUMBER:=11;
  v_s VARCHAR2(30);
  v_x NUMBER;
  v_x2 NUMBER;
  v_oras VARCHAR2(30);
BEGIN
  INSERT INTO USERI(id_user,username,password,nume,prenume,EMAIL,sex,ORAS,ADRESA) VALUES(1,'admin','admin','X','X','X','X','X','X');
  INSERT INTO USERI(id_user,username,password,nume,prenume,EMAIL,sex,ORAS,ADRESA) VALUES(2,'ramona','ramona','blanaru','ramona','ramona@gmail.com','female','Suceava','str. Mitocelului, nr.35');
  INSERT INTO USERI(id_user,username,password,nume,prenume,EMAIL,sex,ORAS,ADRESA) VALUES(3,'andreea','andreea','blanaru','andreea','andreea@gmail.com','female','Suceava','str. Mitocelului, nr.35');
  INSERT INTO USERI(id_user,username,password,nume,prenume,EMAIL,sex,ORAS,ADRESA) VALUES(4,'cristi','cristi','cozaciuc','cristi','cristi@gmail.com','man','Suceava','str Oituz');
  INSERT INTO USERI(id_user,username,password,nume,prenume,EMAIL,sex,ORAS,ADRESA) VALUES(5,'ana','ana','cucu','ana','ana@gmail.com','female','Iasi','str. Cuza-Voda');
  INSERT INTO USERI(id_user,username,password,nume,prenume,EMAIL,sex,ORAS,ADRESA) VALUES(6,'mihaela','mihaela','holoca','mihaela','mihaela@gmail.com','female','Iasi','str. Independentei');
  INSERT INTO USERI(id_user,username,password,nume,prenume,EMAIL,sex,ORAS,ADRESA) VALUES(7,'madalina','madalina','pastrav','madalina','madalina@gmail.com','female','Iasi','str. Copou');
  INSERT INTO USERI(id_user,username,password,nume,prenume,EMAIL,sex,ORAS,ADRESA) VALUES(8,'abel','abel','policiuc','abel','abel@gmail.com','man','Iasi','str. Dacia');
  INSERT INTO USERI(id_user,username,password,nume,prenume,EMAIL,sex,ORAS,ADRESA) VALUES(9,'simona','simona','ecoboaea','simona','simona@gmail.com','female','Bucuresti','str. dac');
  INSERT INTO USERI(id_user,username,password,nume,prenume,EMAIL,sex,ORAS,ADRESA) VALUES(10,'ela','ela','ecoboaea','ela','ela@gmail.com','female','Bucuresti','str. Mitocelului');
  INSERT INTO USERI(id_user,username,password,nume,prenume,EMAIL,sex,ORAS,ADRESA) VALUES(11,'roxana','roxana','hlihor','roxana','roxana@gmail.com','female','cluj','str. Mitocelului');

  
  WHILE v_i<=5000 LOOP
    v_x:=ROUND(DBMS_RANDOM.value(1,2));
    IF v_x=1 THEN
      v_s:='female';
    ELSE
      v_s:='man';
    END IF;
    v_x2:=ROUND(DBMS_RANDOM.VALUE(1,5));
    IF v_x2=1 THEN
      v_oras:='Suceava';
    ELSIF v_x2=2 THEN
        v_oras:='Iasi';
      ELSIF v_x2=3 THEN
          v_oras:='Bucuresti';
        ELSIF v_x2=4 THEN
            v_oras:='Cluj';
          ELSE
            v_oras:='Timisoara';
          END IF;
  INSERT INTO USERI(id_user,username,password,nume,prenume,EMAIL,sex,ORAS,ADRESA) VALUES(v_i+5,'user'||TO_CHAR(v_i+5),'user'||TO_CHAR(v_i+5),'user'||TO_CHAR(v_i+5),'user'||TO_CHAR(v_i+5),'user'||TO_CHAR(v_i+5)||'@gmail.com',v_s,v_oras,'str. Mit'||v_oras);
    v_i:=v_i+1;
  END LOOP;
END;
/