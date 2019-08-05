<?php

if(isset($_POST['p_marca']) && isset($_POST['p_modelo']) ){
  
  if(!empty($_POST['p_marca']) && !empty($_POST['p_modelo']))
  {
    /*$param = $_POST['marca'];
    $param2 = $_POST['modelo'];*/

    $param = 21;
    $param2 = 4828;


    $url1 = 'http://fipeapi.appspot.com/api/1/carros/veiculo/'. $param1 .'/' . $param2 .'.json';

    $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, $url1);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);    

    $json = json_decode(curl_exec($ch), true); 
    
    foreach($json as $i => $item) { 

        $fipe_id = $json[$i]['id']; 
        $key=$json[$i]['name'];

       echo "<option value=\"$fipe_id\"> $key </option>";
    
    }
}
}

if(isset($_POST['param_marca']) ){
  
    if(!empty($_POST['param_marca']))
    {
      $param = $_POST['param_marca'];
      $url = 'http://fipeapi.appspot.com/api/1/carros/veiculos/'. $param .'.json';  
  
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