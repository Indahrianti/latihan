<?php
class orangTua
{
    protected $noatm = "11-22-33-44";
    private $pinatm = "00123";

    public function noatm()
    {
        return $this->noatm;
    }
    public function pinatm()
    {
        return $this->pinatm;
    }
}

class Anak extends orangtua
{
    public function noatm()
    {
        return $this->noatm;
    }
    public function pinatm()
    {
        return $this->pinatm;
    }
}

$orangtua = new orangTua();
$anak = new Anak();

echo "No kartu atm : " . $orangtua->noatm() . "<br>";
echo "pin atm : " . $orangtua->pinatm() . "<hr>";

echo "No kartu atm : " . $anak->noatm() . "<br>";
echo "Pin atm : " . $anak->pinatm();
