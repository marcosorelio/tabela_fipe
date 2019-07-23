<?php
function comboMarcas()
{
    include 'conectadb.php';

  $select=mysqli_query($conn,"SELECT name, fipe_id FROM fipe.carros_marcas");
  while($row=mysqli_fetch_array($select, MYSQLI_ASSOC))
  {
    $name = $row["name"];
    $fipe_id = $row["fipe_id"];
   echo "<option value=\"$fipe_id\">$name</option>";
  }

}


if(isset($_POST['get_option']) ){
  
  if(!empty($_POST['get_option']))
  {
  include 'conectadb.php';
  
   $state = $_POST['get_option'];
   $find=mysqli_query($conn,"select name FROM fipe.carros_marcas");
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