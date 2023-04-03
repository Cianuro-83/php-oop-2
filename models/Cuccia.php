<?php 
require_once __DIR__ . "/Prodotto.php";
require_once __DIR__ . "/Categoria.php";

class Cucce extends Prodotti{
    protected int $altezza;
    protected int $larghezza;
    protected int $profondita;
    
    
    function __construct($_nome, $_prezzo, $_descrizione, $_pezzi_disponibili, $_larghezza, $_profondita, $_altezza, Categoria $_categoria){
      parent::__construct($_nome, $_prezzo, $_descrizione, $_pezzi_disponibili, $_categoria);
        $this->altezza=$_altezza;
        $this->larghezza=$_larghezza;
        $this->profondita=$_profondita;
       
    }
    
//  **************************
//  IMPOSTO SET E GET 
//  **************************   // 


    //   altezza
    public function set_altezza($newValue) {
        $this->altezza=$newValue;
      }
    
    public function get_altezza() {
        return $this->altezza;
      }

    // larghezza
    public function set_larghezza($newValue) {
        $this->larghezza=$newValue;
      }
    
    public function get_larghezza() {
        return $this->larghezza;
      }
    // profondita
    public function set_profondita($newValue) {
        $this->profondita=$newValue;
      }
    
    public function get_profondita() {
        return $this->profondita;
      }





    //fine class Cucce
}

?>