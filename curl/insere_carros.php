<html>
<head>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
</head>
<body>

<select name="selectMarca" onchange="" style="width:200px;">
        <option value="">Selecione</option>
            <?php comboMarcas(); ?>
        </select>

        <select name="selectVeiculo" onchange="" style="width:200px;">
        <option value="">Selecione</option>
            <?php comboVeiculos(); ?>
        </select>

</body>
</html>

<?php
function comboMarcas()
{
    
    $url1 = 'http://fipeapi.appspot.com/api/1/carros/marcas.json';  

    $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, $url1);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);    

    $json = json_decode(curl_exec($ch), true); 
    
    foreach($json as $i => $item) { 

        $name = $json[$i]['name'];
        $fipe_id = $json[$i]['id']; 

       echo "<option value=\"$fipe_id\">$name</option>";
    
    }


}

function comboVeiculos()
{
    $param = "21";
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


}

?>