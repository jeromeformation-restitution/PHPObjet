<?php
namespace Classes;
use Classes\Database\Connection;

require 'header.php';

$co = new Connection();

$donnees = $co->query('SELECT * FROM product');


?>

<main class="container">


<?php foreach ($donnees as $k) : ?>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $k['name'] ?></h5>
    <h4 class="card-subtitle"><?= $k['price'] ?></h4>
    <p class="card-text"><?= $k['description'] ?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<?php endforeach; ?>

</main>
<?php require 'footer.html' ?>