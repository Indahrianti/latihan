<?php
class komputer
{
    protected $jenisprocessor = "Intel Core 17";

    protected function tampilkanjenisprocessor()
    {
        return $this->jenisprocessor;
    }
}

class Laptop extends komputer
{
    public function getprocessor()
    {
        return $this->tampilkanjenisprocessor();
    }
}

$laptop = new Laptop();
echo $laptop->getprocessor();
