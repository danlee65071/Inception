CREATE DATABASE InceptionDB;
CREATE USER 'hcharlsi'@'%' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON InceptionDB.* TO 'hcharlsi'@'%';
FLUSH PRIVILEGES;

ALTER USER 'root'@'localhost' IDENTIFIED BY 'root';