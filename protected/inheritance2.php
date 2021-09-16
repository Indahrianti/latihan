<?php
class komputer
{
    protected function beli_komputer()
    {
        return "Beli Komputer baru";
    }
}
// turunkan class komputer
class laptop extends komputer
{
    protected function beli_laptop()
    {
        return "Beli Laptop baru";
    }
}
// turunkan class laptop
class chromebook extends laptop
{
    protected function beli_chromebook()
    {
        return "Beli Chromebook baru";
    }

    public function beli_semua()
    {
        $a = $this->beli_komputer();
        $b = $this->beli_laptop();
        $c = $this->beli_chromebook();
        return "$a<br>$b<br>$c<br>";
    }
}
// buat objek dari class laptop (instansi)
$gadget_baru = new chromebook();

// panggil method objek
echo $gadget_baru->beli_semua();

//$gadget_baru->beli_komputer();
// fatal error : call to property ....
