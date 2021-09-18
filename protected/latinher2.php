<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoFood</title>
</head>
<body>
    <fieldset>
        <legend>GoFood</legend>
         <form action="" method="post">
            <table>
                <tr>
                    <td>Nama Barang</td>
                    <td> : </td>
                    <td><input type="text" name="nama" id=""></td>

                </tr>
                <tr>
                    <td>Harga</td>
                    <td> : </td>
                    <td><input type="text" name="harga" id=""></td>
                </tr>
                <tr>
                    <td>Jumlah Pesanan</td>
                    <td> : </td>
                    <td><input type="number" name="jumlah" id="" max=100 min=0></td>
                </tr>
                <tr>
                    <td>Jenis Pembayaran</td>
                    <td>:</td>
                    <td><select name="jenis">
                        <option value="Cash">Cash</option>
                        <option value="Banking">M-Banking</option>
                        <option value="Gopay">Gopay</option>
                        <option value="Pickup">PickUp</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td><td></td>
                    <td><input type="submit" name="submit" value="Simpan">
                        <input type="reset" name="reset" value="Hapus"></td>
                </tr>
            </table>
        </form>
</fieldset>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $jenis = $_POST['jenis'];

    class GoFood
    {
        public $nama;
        public $harga;
        public $jumlah;
        public $jenis;

        public function __construct($nama, $harga, $jumlah, $jenis)
        {
            $this->nama = $nama;
            $this->harga = $harga;
            $this->jumlah = $jumlah;
            $this->jenis = $jenis;
        }
    }

    class Pembayaran extends Gofood
    {
        public function TotalBayar()
        {
            $total = $this->jumlah * $this->harga;

            echo "Nama Barang : " . $this->nama . "<br>";
            echo "Harga : " . $this->harga . "<br>";
            echo "Jumlah Pesanan : " . $this->jumlah . "  <br>";
            echo "Total Pembayaran :" . $total . "<br>";
            if ($total >= 150000 && $total < 250000) {
                $diskon = $total * 0.10;
                $hasil = $total - $diskon;

                echo "Anda mendapat diskon 10% <br>";
                echo "harus dibayar : $hasil<br>";
            } else if ($total >= 250000) {
                $diskon = $total * 0.15;
                $hasil = $total - $diskon;

                echo "Anda mendapat diskon 15% : " . $diskon;
                echo "<br>harus dibayar : $hasil<br>";
            }
            echo "Sistem pembayaran : " . $this->jenis . "<br>";

            if ($this->jenis == "Cash") {
                $hasil3 = $hasil;
                echo "Anda Tidak Mendapatkan Diskon";
            } else if ($this->jenis == "Banking") {
                $hasil2 = (2.5 / 100) * $total;
                $hasil3 = $total - $diskon - $hasil2;
                echo "Mendapatkan diskon 2.5% : " . $hasil2;
            } else if ($this->jenis == "Gopay") {
                $hasil2 = (10 / 100) * $total;
                $hasil3 = $total - $diskon - $hasil2;

                echo "Mendapatkan Diskon 10% : " . $hasil2;
            } else {
                $hasil2 = (1.1 / 100) * $total;
                $hasil3 = $total - $diskon - $hasil2;
                echo "Mendapatkan Diskon 1.5% : " . $hasil2;
            }
            return "<br>total semua : " . $hasil3;

        }
    }
    $jajan = new pembayaran($nama, $harga, $jumlah, $jenis);
    echo $jajan->TotalBayar();
}