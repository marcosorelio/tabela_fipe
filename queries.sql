CREATE TABLE fipe.carros_marcas (
    name varchar(20),
    fipe_name varchar(20),
    fipe_order int,
    fipe_key varchar(30),
    fipe_id int NOT NULL,
    PRIMARY KEY (fipe_id)
);


+------------+-------------+------+-----+---------+-------+
| Field      | Type        | Null | Key | Default | Extra |
+------------+-------------+------+-----+---------+-------+
| name       | varchar(20) | YES  |     | NULL    |       |
| fipe_name  | varchar(20) | YES  |     | NULL    |       |
| fipe_order | int(11)     | YES  |     | NULL    |       |
| fipe_key   | varchar(30) | YES  |     | NULL    |       |
| fipe_id    | int(11)     | NO   | PRI | NULL    |       |
+------------+-------------+------+-----+---------+-------+


CREATE TABLE fipe.carros_veiculo (
    id int NOT NULL AUTO_INCREMENT,
    fipe_referencia varchar(255),
    fipe_codigo varchar(255),
    fipe_name varchar(255),
    fipe_combustivel varchar(255),
    fipe_marca varchar(255),
    fipe_ano_modelo varchar(255),
    fipe_preco varchar(255),
    fipe_key varchar(255),
    fipe_time varchar(255),
    fipe_veiculo varchar(255),
    fipe_id varchar(255),
    PRIMARY KEY (id)
);

INSERT INTO fipe.carros_marcas values('FIAT','Fiat',2,'fiat-21',21);
INSERT INTO fipe.carros_marcas values('FORD','Ford',2,'ford-22',22);
INSERT INTO fipe.carros_marcas values('CHEVROLET','GM - Chevrolet',2,'gm-chevrolet-23',23);
INSERT INTO fipe.carros_marcas values('HONDA','Honda',2,'honda-25',25);
INSERT INTO fipe.carros_marcas values('HYUNDAI','Hyundai',2,'hyundai-26',26);




INSERT INTO fipe.carros_veiculo values(null,'b','2','3','4','5','6','7','8','9','10','11');
INSERT INTO fipe.carros_veiculo values(null,'c','2','3','4','5','6','7','8','9','10','11');
