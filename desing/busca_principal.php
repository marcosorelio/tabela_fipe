<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="">
    <meta name="author" content="mojunior">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="../js/fetch.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body class="bg">
    <div>
        <div>

            <h1>Busque aqui</h1>
        </div>

        <div>
            <form action="/action_page.php">
                <table class="tb-main">
                    <tr>
                        <td>
                            <input type="checkbox" name="vehicle" value="1" disabled>Moto 
                            <input type="checkbox" name="vehicle" value="2" checked>Carro 
                            <input type="checkbox" name="vehicle" value="3" disabled>Caminhão</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <select name="selectMarca" class="st-main" style="width: 100% !important;">
                                <option value="">Marca</option>
								<?php comboMarca(); ?>
                            </select>
                        </td>
                        <td colspan="2">
                            <select name="selectModelo" class="st-main" style="width: 100% !important;">
                                <option value="">Modelo</option>
							<?php comboVeiculo(); ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select name="selectAnoMin" class="st-main">
                                <option value="">Ano Mínimo</option>
								<?php comboAno("De"); ?>
                            </select>
                        </td>
                        <td>
                            <select name="selectAnoMax" class="st-main">
                                <option value="">Ano Máximo</option>
								<?php comboAno("Até"); ?>
                            </select>
                        </td>
                        <td>
                            <select name="selectPrecMin" class="st-main">
                                <option value="">Preço Mínimo</option>
								<?php comboValor("De"); ?>
                            </select>
                        </td>
                        <td>
                            <select name="selectPrecMax" class="st-main">
                                <option value="">Preço Máximo</option>
								<?php comboValor("Até"); ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <input type="submit" value="Anunciar" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
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
		$key=$json[$i]['key'];

       echo "<option value=\"$fipe_id\">$veiculo $key </option>";
    
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
        
        foreach($json as $item) { 
			
			
            $veiculo = $json['veiculo'];
            $fipe_id = $json['id']; 
    
           $combo = $combo .  "<option value=\"$fipe_id\">$veiculo</option>";
        
       }
		
   echo $combo;
}


function comboAno($param){
	for ($x = 1929; $x <= 2020; $x++) {
		echo "<option value=\"$x\">$param $x</option>";
	
	}
}

function comboValor($param){
	for ($x = 4; $x <= 200;$x+=2) {
		echo "<option value=\"$x\">$param R$ $x mil</option>";

	}
}

?>
