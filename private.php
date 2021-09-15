<?php
class komputer
{
    private $jenisprocessor = "Intel Core 17";

    public function tampilkanjenisprocessor()
    {
        return $this->jenisprocessor;
    }
}

class Laptop extends komputer
{
    public function getprocessor()
    {
        return $this->jenisprocessor();
    }
}

$komputer = new komputer();
$laptop = new Laptop();

echo $komputer->tampilkanjenisprocessor() . "<br>";
echo $laptop->getprocessor();
