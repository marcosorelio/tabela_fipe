<?php

if(isset($_POST['p_marca']) && isset($_POST['p_modelo']) ){
  
  if(!empty($_POST['p_marca']) && !empty($_POST['p_modelo']))
  {
    $param1 = $_POST['p_marca'];
    $param2 = $_POST['p_modelo'];


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

?>