<?php 
require_once __DIR__ . "/Prodotti.php";
require_once __DIR__ ."/Categoria.php";

class Giochi extends Prodotti{

    protected string $materiale;
    protected int $valutazione;
    protected string $uso;
    
    
    function __construct($_nome, $_prezzo, $_descrizione, $_pezzi_disponibili, $_valutazione, $_uso, $_materiale, Categoria $_categoria){
        parent::__construct($_nome, $_prezzo, $_descrizione, $_pezzi_disponibili, $_categoria);
        $this->materiale=$_materiale;
        $this->valutazione=$_valutazione;
        $this->uso=$_uso;
    }
    
//  **************************
//  IMPOSTO SET E GET 
//  **************************   // 


    //   materiale
    public function setmateriale($newValue) {
        $this->materiale=$newValue;
      }
    
    public function getmateriale() {
        return $this->materiale;
      }

    // valutazione
    public function setvalutazione($newValue) {
        $this->valutazione=$newValue;
      }
    
    public function getvalutazione() {
        return $this->valutazione;
      }
    // uso
    public function setuso($newValue) {
        $this->uso=$newValue;
      }
    
    public function getuso() {
        return $this->uso;
      }



    //fine class Giochi
}

?>