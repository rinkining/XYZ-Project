create database XYZMusic;
use XYZMusic;

create table Utilisateur(
id_utilisateur int auto_increment primary key,
nom varchar(50) not null,
email varchar(100) not null unique,
mot_de_passe varchar(255) not null,
adresse varchar(100) not null,
telephone varchar(20) not null
);

create table Commande(
id_commande int auto_increment primary key,
date datetime default current_timestamp,
montant_total decimal(10,2),
statut varchar(20),
id_utilisateur int,
foreign key (id_utilisateur) references Utilisateur(id_utilisateur)
);

create table Produit(
id_produit int auto_increment primary key,
nom varchar(50) not null,
prix decimal(10,2) not null,
stock int
);

create table Commande_Produit (
id_commande int,
id_produit int,
quantite int not null,
prix_unitaire decimal(10,2) not null,
primary key (id_commande, id_produit),
foreign key (id_commande) references Commande(id_commande),
foreign key (id_produit) references Produit(id_produit)
);
