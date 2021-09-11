<?php
$angka =[90,80,60,100,127,81,51,99];
echo "nilai terkecil : " .min($angka) ."<br>";
echo "nilai terbesar : " .max($angka);



/* function nilaimax($array){
$n = count($array);
$max = $array[0];
for ($i =1; $i < $n; $i++)
if($max < $array[$i])
   $max = $array[$i];
   return $max;
}
function nilaimin($array){
    $n = count($array);
    $min = $array[0];
    for($i =1; $i <$n; $i++)
    if($min > $array[$i])
       $min = $array[$i];
       return $min;
}

 /*   $array = [90,80,60,100,127,81,51,99];
    rsort($array);
    foreach($array as $v){

        $hasil = $v;
        echo $v;
    


$array = array(90,80,60,100,127,81,51,99);
 echo "Nilai max : " .nilaimax($array);
 echo "<br>";
 echo "Nilai min : " .nilaimin($array);
 //echo "Nilai max : ";
 //echo max(); */

?>