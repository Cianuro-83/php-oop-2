<?php 
require_once __DIR__ ."/../Categoria.php";
require_once __DIR__ ."/../Cibo.php";
require_once __DIR__ ."/../Cucce.php";
require_once __DIR__ ."/../Giochi.php";
require_once __DIR__ ."/../Varie.php";

// CREO LIISTANZA DEL GATTO, E DI DEFAULT MI RITROVO QUELLA DEL CANE CHE BASTA SOLO INDICARE NELLE ISTANZE DOVE INSERIRLO

$gatto=new Categoria("gatto");
var_dump($gatto);
$cane=new Categoria("cane");
var_dump($cane);

// CREO LE ISTANZE DI CIBO (STRING-INTER-STRING-INTER------STRING-INTER-STRING-STRING-STRING------$ANIMALE)
$cibo1= new Cibo("Edgar Cooper", 9, "Carne fresca di pollo allevato a terra", 150, "Pollo, mango e mirtilli", "Questa ricetta senza cereali contiene tanta carne fresca di pollo allevato a terra ed è un’eccellente fonte ipocalorica di proteine di alta qualità. Non utilizziamo carne essiccata o disidratata", "E.U.", $cane);
// var_dump($cibo1);
$cibo2= new Cibo("Edgar Cooper", 43, "Le nostre crocchette al pollo allevato all’aperto sono complete e senza schifezze, perfette per tutti i gatti adulti, anche sterilizzati. Preparate solo con tanta carne fresca, che non è stata ridotta in polvere, stracotta o sfilacciata e con una selezione di ingredienti tra i più gustosi", 300, "Pollo", "Passa al cibo senza schifezze aumentando gradualmente il prodotto Edgard & Cooper e diminuendo proporzionalmente quello precedente nell’arco di 10 giorni.", "E.U.", $gatto);
// var_dump($cibo2);
$cibo3= new Cibo("Royal Canin Maxi Adult Crocchette per cani", 60, "Crocchette per cani", 12, "proteine di pollame disidratate, mais, farina di mais, grassi animali, frumento, proteine di maiale disidratate, riso, idrolizzato di proteine animali, glutine di mais, polpa di barbabietola, sali minerali, olio di pesce, olio di soia, lieviti e prodotti simili, idrolizzato di crostacei (fonte di glucosamina), idrolizzato di cartilagine (fonte di condroitina).", "I cani grandi hanno esigenze grandi! Per questo motivo, Royal Canin Maxi Adult è stato formulato per soddisfare le speciali esigenze nutrizionali dei cani adulti con un peso compreso tra i 26 e i 44 kg.
Le fibre nutrizionali contenute in queste crocchette favoriscono una buona digestione e può contribuire a una buona salute digestiva", "E.U.", $cane);
// var_dump($cibo3);
$cibo4= new Cibo("Purina One Bifensis", 38, "Crocchette gatto adulto", 150, "Salmone e cereali", "Grazie all'esclusiva formula rafforza le difese naturali del tuo gatto", "E.U.", $gatto);
$cibo5= new Cibo("Natural Trainer Medium Adult con Manzo & Riso", 40, "Crocchette per cani adulti di taglia media (12 mesi - 7 anni) Natural Trainer Medium Adult con Manzo & Riso formulate con estratto di radice di cicoria e alga spirulina per il benessere dell'animale", 1, "Manzo e Riso", "Questa ricetta olistica è stata specificatamente studiata per soddisfare le esigenze dei cani adulti di taglia grande", "E.U.", $cane);
// var_dump($cibo5);
// CREO ARRAY CIBO E CI PUSHO DENTRO TUTTE LE INSTANZE
$cibo=[];
$cibo[]=$cibo1;
$cibo[]=$cibo2;
$cibo[]=$cibo3;
$cibo[]=$cibo4;
$cibo[]=$cibo5;
// var_dump($cibo);

// CREO LE ISTANZE DI CUCCE (STRING-INTER-STRING-INTER------INTER-INTER-INTER------$ANIMALE)
$cucce1= new Cucce("Amazon Basic", 24, "Lettino circolare per gatti in tela", 51, 50, 50, 155, $gatto);
$cucce2= new Cucce("Cuccia in legno per cani", 215, "Cuccia da esterno rinforzata con tendina in omaggio", 10, 45, 60, 48, $cane);
$cucce3= new Cucce("Wzryjs", 14, "Cuccia per gatti con cuscino rimovibile e lavabile", 2, 70, 90, 80 ,$gatto);
$cucce4= new Cucce("Festnight Canile da esterno", 267, "Gabbia per cani, Cuccia cane esterno", 7, 275, 200, 192, $cane);
$cucce5= new Cucce("Cuccia palestra", 40, "Cuccia con albero tiragraffi", 132, 60, 40, 112,$gatto);


// CREO ARRAY CUCCE E CI PUSHO DENTRO TUTTE LE INSTANZE
$cucce=[];
$cucce[]=$cucce1;
$cucce[]=$cucce2;
$cucce[]=$cucce3;
$cucce[]=$cucce4;
$cucce[]=$cucce5;
// var_dump($cucce);

// CREO LE ISTANZE DI GIOCHI (STRING-INTER-STRING-INTER------INTER-STRING-STRING------$ANIMALE)
$giochi1= new Giochi("Bibikivn", 19, "Giochi da masticare per cani di taglia media", 657, 4, "gioco", "anallergico",  $cane);
$giochi2= new Giochi("Pet Love", 14, "Bastone da masticare", 12, 5,"anallergico", "gioco",$cane);
$giochi3= new Giochi("Chuckit", 6, "Ultra squeller ball size M", 435, 5, "anallergico", "gioco", $cane);
$giochi4= new Giochi("Trixie Dog Activity", 12, "Flib Board interattiva", 21, 5, "anallergico", "gioco", $cane);
$giochi5= new Giochi("Happy Haky",35, "Giocattolo interattivo per gatto", 1, 2, "anallergico", "gioco", $gatto);
// CREO ARRAY GIOCHI E CI PUSHO DENTRO TUTTE LE INSTANZE
$giochi=[];
$giochi[]=$giochi1;
$giochi[]=$giochi2;
$giochi[]=$giochi3;
$giochi[]=$giochi4;
$giochi[]=$giochi5;
// var_dump($giochi);



// CREO LE ISTANZE DI VARIE (STRING-INTER-STRING-INTER------INTER-STRING------$ANIMALE)
 $varie1= new Varie("Cat Toy", 20, "Cesta porta giocattoli per animali domestici", 11, 5, "interno", $gatto);
$varie2= new Varie("Aoliandatong 2Pz", 10, "Ciotola in silicone per cani e gatti", 543, 5, "interno", $cane);
$varie3= new Varie("Daonly", 28, "Patiglie per le articolazioni di cani e gatti", 5, 4, "interno", $gatto);
$varie4= new Varie("ProjectFont", 10, "Togli peli per cani", 2, 5, "esterno", $cane);
$varie5= new Varie("Oneisall toelettatura", 117, "Kit tolettatura e aspirazione a Vuoto per animali domestici", 1, 5, "esterno", $cane);

// CREO ARRAY VARIE E CI PUSHO DENTRO TUTTE LE INSTANZE
$varie=[];
$varie[]=$varie1;
$varie[]=$varie2;
$varie[]=$varie3;
$varie[]=$varie4;
$varie[]=$varie5;
var_dump($varie);
?>