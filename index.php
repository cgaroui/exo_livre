<h1>Livres de stephen King </h1>

<?php

spl_autoload_register(function ($class_name) {
    require 'Classes/'. $class_name . '.php';
});

$auteur1 = new Auteur("King","Stephen");
$livre1 = new Livre("Ca", 1986, 1138, 20,$auteur1);
$livre2 = new Livre("Simetierre", 1983, 374, 15,$auteur1);
$livre3 = new Livre("CLe Fléau", 1978, 823, 14,$auteur1);
$livre4 = new Livre("shinning", 1977, 447, 16,$auteur1);


 echo $livre1->getInfos();
// echo $auteur1;

//echo $auteur1->afficherLivres();