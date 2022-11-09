CREATE DATABASE IF NOT EXISTS terra-da-tattoo;

USE terra-da-tattoo;
create table product(
	id serial primary key,
	name varchar(255) not null,
	description varchar(255) not null,
	price decimal(10, 2) not null,
	amount int not null
);

create table users(
	id serial primary key,
	name varchar(255) not null,
	password varchar(255) not null,
	email varchar(255) not null
);

create table providers(
	id serial primary key,
	name varchar(255) not null,
	email varchar(255) not null,
	telephone varchar(15) not null,
	cnpj varchar(14) not null,
	address varchar(255) not null
);

create table clients(
	id serial primary key,
	name varchar(255) not null,
	email varchar(255) not null,
	appointment timestamp not null
);

