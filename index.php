<?php

require_once('header.php');


$NewObject = new Produit();
$NewObject->changementduNom('Girafe');
$NewObject->setDescription('J\'ai un long cou');
$NewObject->setPrix(0);

$SecondObject = new GenerateHTML();

?>



<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<p>Je suis une Girafe</p>

<?php var_dump($NewObject); ?>

<p>
<?= $NewObject->affichageduNom(); ?>
</p>
<p>
<?= $NewObject->getDescription(); ?>
</p>
<p>
<?= $NewObject->getPrix(); ?>
</p>


<?= $SecondObject->formRow('Nom du produit'); ?>
<?= $SecondObject->formRow('Description'); ?>
<?= $SecondObject->formRow('Prix'); ?>


<?php require_once('footer.html'); ?>
