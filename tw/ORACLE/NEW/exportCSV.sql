CREATE OR REPLACE PROCEDURE EXPORT_CSV_TABLE AS
   	v_file utl_file.file_type;
    	fname varchar(20);
	CURSOR C1 IS SELECT * FROM USERI10;
BEGIN
	fname:='export_useri.csv';
    	v_file:=utl_file.fopen('DIR5',fname,'W');
    	FOR c_i IN C1 LOOP
      		UTL_FILE.PUT_LINE(v_file,c_i.id_user||';'||c_i.username||';'||c_i.password||';'||c_i.nume||';'||c_i.prenume||';'||c_i.email||';'||c_i.sex||';'||c_i.oras||';'||c_i.adresa||';'||c_i.telefon);
    	END LOOP;
    	utl_file.fclose(v_file);
END EXPORT_CSV_TABLE;
/
DECLARE
BEGIN
	EXPORT_CSV_TABLE;
END;
/