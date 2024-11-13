
create table NOTA_FISCAL(
    id_nota INTEGER,
    emissor VARCHAR(150),
    data date,
    PRIMARY KEY(id_nota)
);
CREATE INDEX idx_NOTA_FISCAL_data 
    ON NOTA_FISCAL(data);

create table ITEM(
    id_nota INTEGER,
    id_item INTEGER,
    produto TEXT,
    valor decimal(15,3),
    PRIMARY KEY(id_nota, id_item),
    FOREIGN KEY(id_nota) REFERENCES NOTA_FISCAL(id_nota)

);
CREATE INDEX idx_ITEM_produto
    ON ITEM(produto);