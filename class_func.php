<?php 
class Lingkaran{
  protected $luasLing;
  protected $kelLing;
  public function __construct($r){
    $this->r = $r;
  }
  public function getLuas(){
    $this->luas = 3.14 * ($this->r);
    return $this->luas;
  }
  public function getKeliling(){
    $this->keling = 2 * 3.14 * $this->r;
    return $this->keling;
  }
  }  
  

?>
