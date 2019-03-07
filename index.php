<?php

require_once('header.php');


$NewObject = new Produit();
$NewObject->changementduNom('Girafe');
$NewObject->setDescription('J\'ai un long cou');
$NewObject->setPrix(0);

$SecondObject = new GenerateHTML();

$voitureNormale = new Voiture('Renault', 'Diesel');

$voitureDiesel = new VoitureDiesel('BMW', 'Diesel');
$voitureElec = new VoitureElec('ZEO', 'Electrique');

var_dump($voitureNormale);
var_dump($voitureDiesel);
var_dump($voitureElec);

?>



<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<main class="container">
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

	<form method="post">
		<?= $SecondObject->formRow('Nom du produit','text','IdNom','Saisissez ici votre description'); ?>
		<?= $SecondObject->formRow('Description','textarea','IdDescription','Saisissez ici votre description'); ?>
		<?= $SecondObject->formRow('Prix' ,'number','IdPrix'); ?>
		<button class="btn-primary btn" type="submit" >Envoyez le formulaire</button>
	</form>



<p><?= $voitureNormale->rouler(200); ?></p>
<p><?= $voitureNormale->rouler(200); ?></p>


<p><?= $voitureDiesel->rouler(200); ?></p>
<p><?= $voitureDiesel->rouler(200); ?></p>
<p><?= $voitureDiesel->rouler(200); ?></p>

<p><?= $voitureElec->rouler(50); ?></p>
<p>recharge<?= $voitureElec->recharger(); ?></p>
<p>Reste energie<?= $voitureElec->getEnergie(); ?></p>
</main>
<?php require_once('footer.html'); ?>
