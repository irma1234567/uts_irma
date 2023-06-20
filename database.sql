CREATE TABLE tb_sepatu (
	sepatu_id INT(11) NOT NULL AUTO_INCREMENT,
	sepatu_merk VARCHAR(11) NOT NULL,
    sepatu_ukuran VARCHAR(100) NOT NULL,
	harga INT(100) NOT NULL,
	PRIMARY KEY (sepatu_id),
	UNIQUE KEY (sepatu_merk)
);

CREATE TABLE tb_customer (
	cus_id INT(11) NOT NULL AUTO_INCREMENT,
	cus_nama INT(100) NOT NULL,
	PRIMARY KEY (cus_id)
);

CREATE TABLE tb_harga (
	hrg_id INT(11) NOT NULL AUTO_INCREMENT,
	hrg_id_minuman INT(11) NOT NULL,
	hrg_nama VARCHAR(100) NOT NULL,
	PRIMARY KEY (hrg_id),
	UNIQUE KEY (hrg_nama)
);