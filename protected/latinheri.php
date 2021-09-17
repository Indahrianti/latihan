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
            <td><b> Jenis Makhluk </b></td>
            <td> : </td>
            <td><select name="jenis">
                <option value="Manusia">Manusia</option>
                <option value="Malaikat">Malaikat</option>
                <option value="Jin">Jin</option>
                <option value="Setan">Setan</option>
            </select></tr>
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

    class hamba
    {
        public function __construct($jenis)
        {
            $this->jenis = $jenis;

        }

    }
    class tugas extends hamba
    {
        public function tug()
        {
            parent::__construct($this->jenis);
            if ($this->jenis == "Manusia") {
                $a = "Beribadah Kepada Tuhan";
            } elseif ($this->jenis == "Malaikat") {
                $a = "Beribadah Kepada Tuhan";
            } elseif ($this->jenis == "Jin") {
                $a = "Ada yang taat, ada yang tidak";
            } else {
                $a = "Menggagu Manusia agar tidak beribadah kepada Allah SWT";
            }
            return $a;

        }
    }

    $hamba = new tugas($jenis);
    ?>
    <table>
<tr>
    <td><?php echo "<b>Jenis makhluk</b> : " . $hamba->jenis . "<br>"; ?></td>
</tr>
    <tr>
        <td><?php echo "<b>Tugas</b> : " . $hamba->tug() . "<br>"; ?> </td>
    </tr>
</table>
<?php
}
?>