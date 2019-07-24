<html>
<head>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
</head>
<body>

<select name="selectMarca" onchange="fetch_modelo(this.value)" style="width:200px;">
        <option value="">Selecione</option>
            <?php comboMarca(); ?>
        </select>

        <select name="selectVeiculo" onchange="" style="width:200px;">
        <option value="">Selecione</option>
            <?php comboVeiculo(); ?>
        </select>
		
		<select name="selectVeiculo" onchange="" style="width:200px;">
        <option value="">Selecione</option>
            <?php comboVeiculosAno(); ?>
        </select>

        <select name="selectVeiculo" onchange="" style="width:200px;">
        <option value="">Selecione</option>
            <?php comboVeiculosDetalhe(); ?>
        </select>

</body>
</html>

<?php
function comboMarca()
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

function comboVeiculo()
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

function comboVeiculosAno()
{
    $param1 = "21";
	$param2 = "4828";
    $url1 = 'http://fipeapi.appspot.com/api/1/carros/veiculo/'. $param1 .'/' . $param2 .'.json';

    $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, $url1);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);    

    $json = json_decode(curl_exec($ch), true); 
    
    foreach($json as $i => $item) { 

        $veiculo = $json[$i]['veiculo'];
        $fipe_id = $json[$i]['id']; 

       echo "<option value=\"$fipe_id\">$veiculo</option>";
    
    }
}
    function comboVeiculosDetalhe()
    {
        $param1 = "21";
        $param2 = "4828";
        $param3 = "2013-1";
        $url1 = 'http://fipeapi.appspot.com/api/1/carros/veiculo/'. $param1 .'/' . $param2 .'/'. $param3 .'.json';
    
        $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, $url1);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);    
    
        $json = json_decode(curl_exec($ch), true); 
        
        foreach($json as $i => $item) { 
    
            $veiculo = $json[$i]['veiculo'];
            $fipe_id = $json[$i]['id']; 
    
           echo "<option value=\"$fipe_id\">$veiculo</option>";
        
        }

}

?>