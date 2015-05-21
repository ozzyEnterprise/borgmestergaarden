drop table rooms;
drop table roomTypes;
drop table users;

create table roomTypes (
  id int UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
  nameDK varchar(20) NOT NULL,
  nameUK varchar(20) DEFAULT 'English Name',
  nameGR varchar(20) DEFAULT 'Deutsch Name',
  descriptionDK varchar(1000) DEFAULT 'Dansk Beskrivelse',
  descriptionUK varchar(1000) DEFAULT 'English Description',
  descriptionGR varchar(1000) DEFAULT 'Deutsch Beschreibung'
);

create table rooms (
  id int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nameDK varchar(30) NOT NULL,
  nameUK varchar(20) DEFAULT 'English Room Name',
  nameGR varchar(20) DEFAULT 'Deutsch Zimmer Name',
  roomType int(3) UNSIGNED NOT NULL,
  maxPeople int(3) UNSIGNED NOT NULL,
  shortDK varchar(200)  DEFAULT 'Kort Dansk Beskrivelse',
  shortUK varchar(200) DEFAULT 'Short English Description',
  shortGR varchar(200) DEFAULT 'Kurz Deutsch Beschreibung',
  descriptionDK varchar(1000) DEFAULT 'Dansk Beskrivekse',
  descriptionUK varchar(1000) DEFAULT 'English Description',
  descriptionGR varchar(1000) DEFAULT 'Deutsch Beschreibung',
  address varchar(400) DEFAULT 'Adresse',
  foreign key (roomType) references roomTypes(id)
);

create table users (
  username varchar(16) PRIMARY KEY,
  password varchar(32) NOT NULL,
  secretkey varchar(50)
);

INSERT INTO roomTypes(nameDK) VALUES ('suite');
INSERT INTO roomTypes(nameDK) VALUES ('normalt vaerelse');
INSERT INTO roomTypes(nameDK) VALUES ('lejlighed');

INSERT INTO rooms(nameDK, roomType, maxPeople) VALUES ('room1-3', 2, 2);

INSERT INTO users(username, password, secretkey) VALUES ('admin', MD5('123454321'), '');
