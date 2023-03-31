<?php 
require_once __DIR__ ."/../Categoria.php";
require_once __DIR__ ."/../Cibo.php";
require_once __DIR__ ."/../Cucce.php";
require_once __DIR__ ."/../Giochi.php";
require_once __DIR__ ."/../Varie.php";

$gatto=new Categoria("gatto", "ciao");
var_dump($gatto);
?>