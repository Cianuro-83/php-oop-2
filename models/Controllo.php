<?php 
// creo funzione per controllare che il campo testuale non rimanga vuoto

 function controlla_testo($new_Value) {
if (strlen ($new_Value)<=0){
    throw new Exception("Non puoi lascia questo campo vuoto, per cortesia assicurati di inserire il testo.");
    }
}
 function controlla_prezzo($new_Value) {
    if ($new_Value<=0){
        throw new Exception("Questo prodotto non prevede l'opzione regalo, il prezzo che hai inserito non è corretto.");
        }
    }

?>