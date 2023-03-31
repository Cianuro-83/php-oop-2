<?php 
require_once __DIR__ . "/Prodotti.php";

class Varie extends Prodotti{
    protected string $pezzi_disponibili;
    protected int $valutazione;
    protected string $uso;
    
    
    function __construct($_categoria, $_nome, $_prezzo, $_pezzi_disponibili){
        parent::__construct($_categoria);
        $this->nome=$_nome;
        $this->categoria=$_categoria;
        $this->pezzi_disponibili=$_pezzi_disponibili;
    }
    
//  **************************
//  IMPOSTO SET E GET 
//  **************************   // 


    //   pezzi_disponibili
    public function setpezzi_disponibili($newValue) {
        $this->pezzi_disponibili=$newValue;
      }
    
    public function getpezzi_disponibili() {
        return $this->pezzi_disponibili;
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

    //fine class Varie
}

?>