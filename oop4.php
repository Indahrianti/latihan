<?php

 class segitiga{
    //void main(List<String> args) {
       // double setengah, alas, tinggi; 
        public $setengah = 0.5;
        public $alas = 20.0;
        public $tinggi = 30.0;

      // public $a,$b,$c;

       public function luassegitiga()
       {
           return (0.5 * $this->alas * $this->tinggi);
       }
       public function keliling()
       {
           return ($this->tinggi + $this->alas + $this->setengah);
       }

        
  //  }
 }
  $luas = new segitiga();
  $luas->alas= 10;
  $luas->setengah=20;
  $luas->tinggi=15;

  echo "alas : " .$luas->alas . "<br>"; 
  echo "tinggi : " .$luas->tinggi. "<br>";
  echo "setengah : " .$luas->setengah . "<br>"; 
  echo "Sisi A : " . $luas->setengah. "<br>";
  echo "Sisi B : " . $luas->tinggi. "<br>";
  echo "Sisi C : " . $luas->alas. "<br>";
  echo "hasil luas :" .$luas->luassegitiga(). "<br>";
  echo "Hasil Keliling : " . $luas->keliling(). "<br>";

 
 ?>

