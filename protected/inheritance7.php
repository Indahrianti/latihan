<?php
// buat class komputer
class komputer
{

    // buat constructor class komputer
    public function __construct()
    {
        echo "Constructor dari class komputer <br />";
    }

    // buat destructor class komputer
    public function __destruct()
    {
        echo "Destructor dari class komputer <br />";
    }
}

// turunkan class komputer ke laptop
class laptop extends komputer
{

    // buat constructor class laptop
    public function __construct()
    {
        echo "Constructor dari class laptop <br />";
    }

    // buat destructor class laptop
    public function __destruct()
    {
        echo "Destructor dari class laptop";
    }
}

// turunkan class laptop ke chromebook
class chromebook extends laptop
{

    // buat constructor class chromebook
    public function __construct()
    {
        echo "Constructor dari class chromebook <br />";
    }

    // buat destructor class chromebook
    public function __destruct()
    {
        echo "Destructor dari class chromebook <br />";
    }
}
// buat objek dari class chromebook (instansiasi)
$gadget_baru = new chromebook();

echo "Belajar OOP PHP <br />";
