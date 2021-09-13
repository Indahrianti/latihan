<?php

 class segitiga{
    //void main(List<String> args) {
       // double setengah, alas, tinggi; 
        public $setengah = 0.5;
        public $alas = 20.0;
        public $tinggi = 30.0;

       public $a,$b,$c;

       public function luassegitiga()
       {
           return (0.5 * $this->alas * $this->tinggi);
       }
       public function keliling()
       {
           return ($this->a + $this->b + $this->c);
       }

        
  //  }
 }
  $luas = new segitiga();
  $luas->a= 10;
  $luas->b=20;
  $luas->c=15;

  echo "alas : " .$luas->alas . "<br>"; 
  echo "tinggi : " .$luas->tinggi. "<br>";
  echo "setengah : " .$luas->setengah . "<br>"; 
  echo "Sisi A : " . $luas->a. "<br>";
  echo "Sisi B : " . $luas->b. "<br>";
  echo "Sisi C : " . $luas->c. "<br>";
  echo "hasil luas :" .$luas->luassegitiga(). "<br>";
  echo "Hasil Keliling : " . $luas->keliling(). "<br>";

 /* $luasSegitiga = new segitiga();
  $luasSegitiga->a = 10;
  $luasSegitiga->b = 20;
  $luasSegitiga->c = 15;
  echo "Setengah : " .$luasSegitiga->setengah. "<br>";
  echo "Alas : " .$luasSegitiga->alas. "<br>";
  echo "Tinggi : " .$luasSegitiga->tinggi. "<br>";
  echo "Sisi A : " . $luasSegitiga->a. "<br>";
  echo "Sisi B : " . $luasSegitiga->b. "<br>";
  echo "Sisi C : " . $luasSegitiga->c. "<br>";
  echo "Luas Segitiga : " .$luasSegitiga->hitungLuas(). "<br>";
  echo "Keliling Segitiga : " .$luasSegitiga->keliling(). "<br>";
 */
 ?>

