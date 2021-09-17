<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><fieldset>
    <legend align="center"><b>TUGAS HAMBA ALLAH</b></legend>
    <table>
        <form action=" " method="POST" name="input">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Nama Dosen</td>
                <td>:</td>
                <td><input type="text" name="dosen"></td>
            </tr>
             <tr>
                <td>Mata Kuliah</td>
                <td>:</td>
                <td><input type="text" name="matkul"></td>
            </tr>
             <tr>
            <td><b> nilai </b></td>
            <td> : </td>
            <td><input type="number" name="jenis" value="jenis"></td></tr>
        <tr></td>
            <td><input type="submit" name="input" value="input"></td>
            </tr>
        </form></fieldset>
    </table>
</body>
</html>
<?php
if (isset($_POST['input'])) {
    $jenis = $_POST['jenis'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $dosen = $_POST['dosen'];
    $matkul = $_POST['matkul'];

    class hamba
    {

        public function __construct($jenis)
        {

            $this->jenis = $jenis;
            /*  $this->nama = $nama;
        $this->nim = $nim;*/

        }

    }
    class tugas extends hamba
    {
        public function tug()
        {
            parent::__construct($this->jenis);
            if ($this->jenis >= 85) {
                $a = "lulus  ";
            } elseif ($this->jenis >= 75) {
                $a = "lulus";
            } elseif ($this->jenis >= 65) {
                $a = "perbaiki";
            } else {
                $a = "tidak lulus";
            }
            return $a;

        }
        public function tu()
        {
            parent::__construct($this->jenis);
            if ($this->jenis >= 85) {
                $a = "A ";
            } elseif ($this->jenis >= 75) {
                $a = "B ";
            } elseif ($this->jenis >= 65) {
                $a = " C";
            } else {
                $a = " E ";
            }
            return $a;

        }
    }

    $hamba = new tugas($jenis, $nama, $nim, $dosen, $matkul);
    ?>
    <table>

    <br><?php echo "nama : " . $nama . "<br>"; ?>
    <br><?php echo "nim : " . $nim . "<br>"; ?>
    <br><?php echo "dosen : " . $dosen . "<br>"; ?>
    <br><?php echo "matkul : " . $matkul . "<br>"; ?>
    <br><?php echo "status : " . $hamba->tu() . "<br>"; ?>
    <br><?php echo "nilai : " . $hamba->tug() . "<br>"; ?>

</table>
<?php
}
?>