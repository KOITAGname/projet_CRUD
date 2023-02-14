<?php
$connexion = new PDO("sqlite:./06-bdd.db");

$connexion->query("CREATE TABLE IF NOT EXISTS auteur ( id INTEGER KEY AUTO_INCREMENT, prenom VARCHER(200), nom VARCHER(200), `status ` BOOLEAN, dt_creation DATE )");

// http://localhost/php-initiation/jour2-POO/07-exo.php

// créer un nouveau fichier 07-exo.php
// créer une nouvelle instance de PDO qui va se connecter à la base 
// 06-bdd.db 

// créer une table 
// auteur
// dispose de 5 colonnes 
// id clé primaire
// prenom texte maximum de 200 lettres 
// nom texte maximum de 200 lettres 
// status actif / inactif
// dt_creation annee mois jour 

// afficher cette table dans l'explorer SQLite


// créer un nouveau fichier 08-exo.php
// vous connectez à la base 06-bdd.db

// insérer 4 lignes dans la table auteur
// Victor Hugo actif 01/01/2023
// George Sand actif 01/02/2023
// Jean Jacques Rousseau inactif 15/01/2012
// Arthur Rimbaud actif 01/01/2023