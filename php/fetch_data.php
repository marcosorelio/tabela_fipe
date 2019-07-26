
<?php
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
