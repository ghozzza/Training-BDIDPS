CREATE DATABASE LATIHAN;

CREATE TABLE PEGAWAI (
	id_pegawai CHAR(4),
	peg_nama VARCHAR(255),
	jenis_kelamin VARCHAR(255),
	peg_alamat VARCHAR(1000),
	no_telepon VARCHAR(15),
	email VARCHAR(255)
);

SELECT * FROM pegawai;

DROP TABLE pegawai;

DROP TABLE jabatan;

ALTER TABLE pegawai ADD departmen VARCHAR(100);

ALTER TABLE pegawai ADD id_jabatan INT;

ALTER TABLE pegawai DROP departmen;

ALTER TABLE pegawai CHANGE email surel VARCHAR(100);

#ADD PRIMARY KEY
`pegawai`

#DROP PRIMARY KEY
ALTER TABLE pegawai DROP PRIMARY KEY;

#ADD NOT NULL
ALTER TABLE pegawai
MODIFY id_pegawai CHAR(4) NOT NULL;

ALTER TABLE pegawai
MODIFY peg_nama VARCHAR(255) NOT NULL;

ALTER TABLE pegawai
MODIFY jenis_kelamin VARCHAR(1000) NOT NULL;

ALTER TABLE pegawai
MODIFY peg_alamat VARCHAR(255);

ALTER TABLE pegawai
MODIFY no_telepon VARCHAR(15) NOT NULL;

CREATE TABLE jabatan(
	id_jabatan INT PRIMARY KEY,
	nama_jabatan VARCHAR(255)
);

ALTER TABLE pegawai
ADD FOREIGN KEY (id_jabatan) REFERENCES jabatan(id_jabatan);

INSERT INTO jabatan VALUES (1, "Admin");

INSERT INTO pegawai VALUES ("P001", "Budi Buddies", "Laki-laki", "Solo", "+62", "cahcah@email.com", 1);

SELECT * FROM pegawai;

SELECT
a.id_pegawai AS id_pegawai,
a.peg_nama AS peg_nama,
b.nama_jabatan AS nama_jabatan
FROM pegawai AS a
JOIN jabatan AS b
ON a.id_jabatan = b.id_jabatan;