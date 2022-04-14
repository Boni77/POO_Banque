<?php
require_once "compte.php";
require_once "titulaire.php";

$ali = new Titulaire("DELKHAH", "ALI", "1996-03-20", "JORM");
$florian = new Titulaire("DELLMANN", "FLORIAN", "2000-10-11", "STRASBOURG");

$compte = new Compte("COMPTE COURANT", 12000.00, "EUR", $ali);
$compte1 = new Compte("LIVRET A", 3000.00, "EUR", $ali);
$compte2 = new Compte("LIVRET BLEU", 2000.00, "EUR", $florian);
//$compte1->depot(100);
//$compte2->retrait(476);
echo $compte->virement(200, $compte2);
$florian->afficherComptes();
$ali->afficherComptes();
