<?php



  if(isset($_POST['p_marca']) ){
  
    if(!empty($_POST['p_marca']))
    {
      $param = $_POST['p_marca'];
      $url1 = 'http://fipeapi.appspot.com/api/1/carros/veiculos/'. $param .'.json';  
  
      $ch = curl_init();
       curl_setopt($ch, CURLOPT_URL, $url1);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);    
  
      $json = json_decode(curl_exec($ch), true); 
      
      foreach($json as $i => $item) { 
  
          $name = $json[$i]['name'];
          $fipe_id = $json[$i]['id']; 
  
         echo "<option value=\"$fipe_id\">$name</option>";
      
      }
      exit;
    }
    }

?>