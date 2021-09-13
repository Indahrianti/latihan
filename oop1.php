<?php

// mendefinisikan sebuah class
class kucing {
    // membuat property atau atribut
    public $warna = "coklat";
    public $jumlahkaki = 4;
    public $jenisbulu = "panjang";
    public $makanan = "ikan pindang";

    //membuat method (behaviour / )
    public function bersuara()
    {
        return "meong.. meong..";
    }
    public function berburu()
    {
        return"berburu ikan";
    }
}

// membuat object inisiasi object)
$kucing1 =new kucing();
echo "Warna kucing : " .$kucing1->warna . "<br>";
echo "Sifat kucing : " .$kucing1->bersuara() . "<hr>";

$kucing2 = new kucing();
// set warna kucing
$kucing2->warna = "oren";
echo "Warna kucing : " .$kucing2->warna. "<br>";
echo "Jenis Bulu : " .$kucing2->jenisbulu. "<br>";

echo "Sifat kucing : " .$kucing2->berburu() . "<hr>";

?>