<html>
    <head><title>sa</title></head>
    <body>
        <form action="" method="post">
<table>
    <tr>
        <td>bilangan 1</td>
        <td>:</td>
        <td><input type="number" name="bil1"></td></tr>
    <tr>
        <td>bilangan 2</td>
        <td>:</td>
        <td><input type="number" name="bil2"></td></tr>

<td><input type="submit" name="input"></td>

</table>
</form>
   </body>
</html> 

<?php
if(isset($_POST['input'])){
  $bil1=$_POST['bil1'];
  $bil2=$_POST['bil2'];

class aritmatika{

    public function __construct($bil1, $bil2)
    {
         $this->bil1 =$bil1;
         $this->bil2= $bil2;
    }
    public function penjumlahan()
    {
        return ($this->bil1 +  $this->bil2);
    }
    public function pengurangan()
    {
        return ($this->bil1 - $this->bil2);
    }
    public function perkalian()
    {
        return ($this->bil1 * $this->bil2);
    }
    public function pembagian()
    {
        return ($this->bil1 / $this->bil2);
    }
    public function sisabagi()
    {
        return ($this->bil1 % $this->bil2);
    }
}

$hasil = new aritmatika($bil1, $bil2);
echo "Hasil penjumlahan: ".$hasil->penjumlahan(). "<br>";
echo "Hasil pengurangan: ".$hasil->pengurangan(). "<br>";
echo "Hasil perkalian : ".$hasil->perkalian(). "<br>";
echo "Hasil pembagian : ".$hasil->pembagian(). "<br>";
echo "Hasil sisa bagi : ".$hasil->sisabagi(). "<br>";
}
?>


