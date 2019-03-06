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


<main class="container">
	<form method="post">
		<?= $SecondObject->formRow('Nom du produit','text','IdNom','Saisissez ici votre description'); ?>
		<?= $SecondObject->formRow('Description','textarea','IdDescription','Saisissez ici votre description'); ?>
		<?= $SecondObject->formRow('Prix' ,'number','IdPrix'); ?>
		<button class="btn-primary btn" type="submit" >Envoyez le formulaire</button>
	</form>
</main>
<?php require_once('footer.html'); ?>
