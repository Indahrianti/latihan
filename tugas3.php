<html>
    <head><title>sa</title></head>
    <body>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Warna</td>
                    <td>:</td>
                    <td><input type="text" name="warna"></td>
                </tr>
                <tr>
                    <td>jumlah kaki kucing</td>
                    <td>:</td>
                    <td><input type="number" name="kaki"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="input"></td>
                </tr>
            </table>
        </form>
    </body>
</html>

<?php
if (isset($_POST['input'])) {
    $warna = $_POST['warna'];
    $kaki = $_POST['kaki'];

    class kucing
    {
        public $warna;
        public $kaki;

        public function ucing($warna, $kaki)
        {
            if ($kaki == 4) {
                echo "warna : $warna";
                echo "<br>Keterangan : Normal";
            } else if ($kaki <= 3) {
                echo "warna : $warna";
                echo "<br>Keterangan : Cingked";
            } else if ($kaki >= 5) {
                echo "warna : $warna";
                echo "<br>Keterangan : Siluman";
            }
            //  $this->warna = $warna;
            // $this->kaki = $kaki;
        }

        /* {
    $b = $this->kaki;
    if ($b <= "3") {
    $c = "kucing cingked";
    }
    return $c;
    }*/

    }

    $kucing1 = new kucing();
    echo $kucing1->ucing($warna, $kaki);
}

?>