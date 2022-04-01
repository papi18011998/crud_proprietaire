<?php
require_once '../bootstrap.php';
$type_proprietaire = new TypeProprietaire();
$type_proprietaire->setLibelle('entreprise');

$type_proprietaire2 = new TypeProprietaire();
$type_proprietaire2->setLibelle('particulier');

$entityManager->persist($type_proprietaire);
$entityManager->persist($type_proprietaire2);
$entityManager->flush();
echo 'Le type de propriétaire a été créé avec succès !';