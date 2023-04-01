<?php 
require_once __DIR__ ."/../Categoria.php";
require_once __DIR__ ."/../Cibo.php";
require_once __DIR__ ."/../Cucce.php";
require_once __DIR__ ."/../Giochi.php";
require_once __DIR__ ."/../Varie.php";

$animale=new Categoria("gatto");
var_dump($animale);

$prova= new Cibo("croccantini", 10, "cibo croccante", 1, "olio, sale, pepe", "senza polifosfati o allergeni", "Italia", $animale);
var_dump($prova);
?>