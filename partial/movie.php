<?php

class Movie
{
  public $name;
  public $price;
  public $year;
  public $oscar;
  public $note;
  static $countOscar = 0;
  static $countPrice = 0;
  static $sumPrice = 0;

  /* 
  COSTRUTTORE
  */
  public function __construct($_name, $_price = 0, $_year, $_oscar = 'nessuno')
  {
    $this->name = $_name;
    $this->price = $_price;
    $this->year = $_year;
    $this->oscar = $_oscar;
    self::$countPrice++;
    self::$sumPrice += $_price;
  }

  /* 
  METODI PUBBLICI
  */
  public function setOscar($_oscar)
  {
    $this->oscar = $_oscar;
    $this->setCountOscar(); //aggiunge oscar solo se caricati con funzione setOscar
  }

  /* METODI PRIVATI
   */
  private function setCountOscar()
  {//conta gli Oscar ricevuti
    self::$countOscar++;
  }

  /* METODI STATICI
   */
  static function getCountOscar()
  {//ritorno gli oscar ricevuti
    return self::$countOscar;
  }

  static function getMedPrice()
  {//ritorno la media dei prezzi dei biglietti
    return self::$sumPrice / self::$countPrice;
  }
}
