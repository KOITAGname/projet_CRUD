<?php
$connexion = new PDO("sqlite:./06-bdd.db");
$connexion->query("CREATE TABLE IF NOT EXISTS article (titre VARCHER(20), contenu TEXT)");

// http://localhost/php-initiation/jour2-POO/06-pdo.php

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