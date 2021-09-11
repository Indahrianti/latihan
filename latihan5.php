<html>
  <head><title>pengolahan form</title></head>
  <body>
  <form action="" method="POST" >
 Masukan bilangan : <input type="text" name="bil"><br>
 Masukan pangkat : <input type="text" name="pang"><br>
  <input type="submit" name="input" value="input">
  

<?php 
if(isset($_POST['input'])) {
    $bil =$_POST['bil'];
    $pang =$_POST['pang'];


  function pangkat( $bil,  $pang) {
    if ($pang > 1){
      return $bil * pangkat($bil, $pang - 1);
    }else{
      return $bil;
    }
  }
  function pangkatnya($bil, $pang){
    for ($i =1; $i <= $pang; $i++){
      echo $bil;
      if($i < $pang){
        echo "x";
      }
    }
  }
  echo "<br>hasil dari perkalian<br>";
  echo pangkatnya($bil,$pang);
  $hasil = pangkat($bil,$pang);
  echo "=" .$hasil;
      /*$data = $bil ** $pang;
      $data = "<br>hasil dari perkalian <br> = $data<br>";

      return $data; */
    }
   /* echo angka($bil, $pang);       
} */

?>
 
 </form>
  </body>
</html>