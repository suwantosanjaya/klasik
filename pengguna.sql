CREATE TABLE pengguna(
	uname VARCHAR(30) NOT NULL,
    pwd VARCHAR(32) NOT NULL,
    fname VARCHAR(50),
    email VARCHAR(100) NOT NULL UNIQUE,
    akses INTEGER DEFAULT 2,
    PRIMARY KEY (uname)
);
