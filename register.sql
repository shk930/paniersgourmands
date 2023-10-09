CREATE DATABASE lespaniersgourmands;
USE lespaniersgourmands;

CREATE TABLE user (
    id int auto_increment PRIMARY KEY,
    nom varchar(30),
    email varchar(50),
    mdp varchar(50),
);


