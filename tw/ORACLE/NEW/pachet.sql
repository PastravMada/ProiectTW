CREATE OR REPLACE PACKAGE pachet_proiect IS
	FUNCTION return_id_brand(p_nume IN VARCHAR2)RETURN NUMBER;
	FUNCTION verifica_stoc(p_id IN NUMBER) RETURN NUMBER;
	PROCEDURE delete_parfum(p_id IN NUMBER);
END pachet_proiect;
/
CREATE OR REPLACE PACKAGE BODY pachet_proiect IS
	FUNCTION return_id_brand(p_nume IN VARCHAR2) RETURN NUMBER IS
		v_id NUMBER:=0;
	BEGIN
		SELECT ID_BRAND INTO v_id FROM BRANDS WHERE nume_brand=p_nume;
	 RETURN v_id;
	END return_id_brand;	
	FUNCTION verifica_stoc(p_id IN NUMBER) RETURN NUMBER IS
		v_stoc NUMBER:=0;
	BEGIN
		SELECT STOC INTO v_stoc FROM PARFUM WHERE id_parfum=p_id;
	RETURN v_stoc;
	END verifica_stoc;
	PROCEDURE delete_parfum(p_id IN NUMBER) AS
	BEGIN
		DELETE FROM PARFUM WHERE ID_PARFUM=p_id;
	END delete_parfum; 
END pachet_proiect;
/