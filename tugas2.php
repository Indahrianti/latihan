<?php
class instagram
{
    public $username = "indah rianti";
    protected $email = "indah@gmail.com";
    private $password = "12345";

    public function akun()
    {
        $a = $this->email;
        $b = $this->password;
        if ($a == "indah@gmail.com" && $b == "12345") {
            $c = "Akun Berhasil Terverifikasi";
        }
        return $c;

    }
    public function info()
    {
        $a = $this->email;
        $b = $this->username;
        $c = "email : " . $a . "<br>username : " . $b;
        return $c;
    }
}

$akun = new instagram();

echo "Username : $akun->username<br>";
echo "Email : " . $akun->akun() . "<br>";
// echo $akun->b . "<hr>";
