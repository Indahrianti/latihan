<?php
class laptop
{
    public $pemilik;

    public function hidupkanlaptop()
    {
        return "Hidupkan Laptop";
    }
}
$laptopanto = new laptop();
$laptopanto->pemilik = "Anto";

echo $laptopanto->pemilik . "<br>";
echo $laptopanto->hidupkanlaptop();
