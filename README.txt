2. Structura tabelei cu date:

CREATE TABLE cg_allprod (
	ID int(10) UNSIGNED NOT NULL AUTO_INCREMENT,  
	col_tipClient int(1) UNSIGNED NOT NULL,
	col_nume varchar(255) NOT NULL,
	col_prenume varchar(255) NOT NULL,
	col_societate varchar(255) NOT NULL,
	col_cui varchar(255) NOT NULL,
	col_producator varchar(255) NOT NULL,
	col_catProd varchar(255) NOT NULL,
	col_modelProd varchar(255) NOT NULL,
	col_serieProd varchar(255) NOT NULL,
	col_nrFact int(10) UNSIGNED NOT NULL,
	col_dataFact date NOT NULL,
	col_garantie int(3) UNSIGNED NOT NULL,
	PRIMARY KEY (ID)
)