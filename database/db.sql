CREATE DATABASE todo_php;

USE todo_php;

CREATE TABLE users (
	id INTEGER UNSIGNED primary KEY auto_increment,
	email varchar(100) UNIQUE NOT NULL,
	name varchar(100) NOT NULL,
    password varchar(100) NOT NULL
);