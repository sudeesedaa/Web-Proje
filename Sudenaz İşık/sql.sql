CREATE DATABASE ogrenci_sistemi;

USE ogrenci_sistemi;

CREATE TABLE ogrenciler (
    id INT AUTO_INCREMENT PRIMARY KEY,
    isim VARCHAR(100),
    soyisim VARCHAR(100),
    yas INT,
    email VARCHAR(100)
);

