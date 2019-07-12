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

INSERT INTO fipe.carros_veiculo values(null,'a','2','3','4','5','6','7','8','9','10','11');
INSERT INTO fipe.carros_veiculo values(null,'b','2','3','4','5','6','7','8','9','10','11');
INSERT INTO fipe.carros_veiculo values(null,'c','2','3','4','5','6','7','8','9','10','11');
