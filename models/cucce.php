<?php 
require_once __DIR__ . "/Prodotti.php";
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
    public function setaltezza($newValue) {
        $this->altezza=$newValue;
      }
    
    public function getaltezza() {
        return $this->altezza;
      }

    // larghezza
    public function setlarghezza($newValue) {
        $this->larghezza=$newValue;
      }
    
    public function getlarghezza() {
        return $this->larghezza;
      }
    // profondita
    public function setprofondita($newValue) {
        $this->profondita=$newValue;
      }
    
    public function getprofondita() {
        return $this->profondita;
      }





    //fine class Cucce
}

?>