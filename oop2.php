<?php

// mendefinisikan sebuah class
class komputer {
    // membuat property atau atribut
    public $pemilik = "indah";
    public $merk = "Lenovo";
    public $ukuranlayar = "L=40cm P=70cm";

    public function dinyalakan()
    {
        return "nyala";
    }
    public function dimatikan()
    {
        return "mati";
    }
}

$komputer1 = new komputer();
echo "Nama pemilik : " .$komputer1->pemilik . "<br>";
echo "Sifat komputer : " .$komputer1->dinyalakan() . "<br>";
echo "Ukuran Layar : " .$komputer1->ukuranlayar . "<hr>";

$komputer2 = new komputer();
//set komputer
$komputer2->pemilik = "Fuji";
$komputer2->merk = "philips";
echo "Nama pemilik : " .$komputer2->pemilik . "<br>";
echo "Merk : " .$komputer2->merk . "<br>";
echo "Sifat komputer : " .$komputer2->dimatikan() . "<hr>";

$komputer3 = new komputer();
// set komputer
$komputer3->pemilik = "Indri";
$komputer3->ukuranlayar = "P=30cm L=30cm";
$komputer3->merk = "Asus";
echo "Nama Pemilik : " .$komputer3->pemilik. "<br>";
echo "Merk : " .$komputer3->merk . "<br>";
echo "Ukuran Layar : " .$komputer3->ukuranlayar. "<br>";
echo "Sifat komputer : " .$komputer3->dimatikan() . "<hr>";

$komputer4 = new komputer();
//set komputer
$komputer4->pemilik = "Fitria";
$komputer4->merk = "Acer";

echo "Nama Pemilik : " .$komputer4->pemilik. "<br>";
echo "Merk : " .$komputer4->merk . "<br>";
echo "Sifat komputer : " .$komputer4->dinyalakan() . "<hr>";

$komputer5 = new komputer();

$komputer5->pemilik = "Rianti";
$komputer5->merk = "Samsung";

echo "Nama Pemilik : " .$komputer5->pemilik. "<br>";
echo "Merk : " .$komputer5->merk . "<br>";
echo "Sifat komputer : " .$komputer5->dinyalakan() . "<hr>";

?>