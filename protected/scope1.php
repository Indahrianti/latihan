<?php
class komputer
{

    public function lihat_spec()
    {
        return "Spec komputer : Acer, processor Intel core i7,
        Ram 4GB";
    }
}

class laptop extends komputer
{
    public function lihat_spec()
    {
        return "Spec laptop Asus, processor intel core i5, Ram 2GB";
    }
}

$gadget_baru = new laptop();

echo $gadget_baru->lihat_spec();
