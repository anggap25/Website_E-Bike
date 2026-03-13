CREATE DATABASE ebike_store;

USE ebike_store;

CREATE TABLE users(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
email VARCHAR(100),
password VARCHAR(100),
role ENUM('admin','user')
);

CREATE TABLE sepeda(
id INT AUTO_INCREMENT PRIMARY KEY,
nama_sepeda VARCHAR(100),
harga INT,
stok INT
);

INSERT INTO users(name,email,password,role)
VALUES('Admin','admin@gmail.com','123456','admin');