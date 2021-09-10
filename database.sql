create database educate;
use educate;

create table users (
  id  int(11) auto_increment primary key,
  name varchar(30) not null,
  email varchar(30) not null
  pass varchar(30)not null
  date datetime not null;
);
