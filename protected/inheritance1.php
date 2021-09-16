<?php
class komputer
{
    public $merk;
    public $processor;
    public $memory;

    public function belikomputer()
    {
        return "Beli komputer baru";
    }
}

class laptop extends komputer
{
    public function lihatspec()
    {
        return "<br>Merk: $this->merk <br>processor: $this->processor
        <br>Memory: $this->memory";
    }
}

// buat objek laptop
$laptop1 = new laptop();
// set property laptop dari komputer
$laptop1->merk = "Asus";
$laptop1->processor = "Intel Core I5";
$laptop1->memory = "4GB";

echo $laptop1->belikomputer() . "<br>";
echo $laptop1->lihatspec();
