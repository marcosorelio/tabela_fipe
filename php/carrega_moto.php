<?php
 if(isset($_POST['get_option']) ){
if(!empty($_POST['get_option']))
{
include 'conectadb.php';

 $selectMarca = $_POST['selectMarca'];
 $selectModelo = $_POST['selectModelo'];
 $selectAnoMin = $_POST['selectAnoMin'];
 $selectAnoMax = $_POST['selectAnoMax'];
 $selectPrecMin = $_POST['selectPrecMin'];
 $selectPrecMax = $_POST['selectPrecMax'];
 $tabela = $_POST['tabela'];
 
 $find=mysqli_query($conn,"select name FROM fipe.$tabela");
 while($row=mysqli_fetch_array($find, MYSQLI_ASSOC))
 {
     if(!empty($row['name'])){
  echo "<option>".$row['name']."</option>";
     }else{
        echo "<option value=''>Select state</option>";
     }
 }
 exit;
}
}
?>