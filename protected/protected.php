<?php
class laptop
{
    public $pemilik;

    protected function hidupkanlaptop()
    {
        return "Hidupkan Laptop";
    }
    public function paksahidup()
    {
        return $this->hidupkanlaptop();
    }
}

$laptopanto = new laptop();
$laptopanto->pemilik = "Anto";

echo $laptopanto->pemilik . "<br>";
//echo $laptopanto->hidupkanlaptop();
echo $laptopanto->paksahidup();
