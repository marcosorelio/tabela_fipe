<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
* {
  
  padding: 0;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  -o-font-smoothing: antialiased;
  font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}

body {
  font-family: "Roboto", Helvetica, Arial, sans-serif;
  font-weight: 100;
  font-size: 12px;
  line-height: 30px;
  color: #777;
  background: #4272d7;

}

.container {
  max-width: 90%;
  width: 100%;
  margin: 0 auto;
  position: relative;
  
}


#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact select,
#contact textarea,
#contact button[type="submit"] {
  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

#contact {
  background: #F9F9F9;
  padding: 25px;
  margin: 30px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

#contact h3 {
  display: block;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 10px;
  margin-top: 0;
}

#contact h4 {
  margin: 5px 0 15px;
  display: block;
  font-size: 13px;
  font-weight: 400;
}

fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#contact select{color:#8a7777}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact select,
#contact textarea {
  width: 50%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  float:left;
 }

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="url"]:hover,
#contact select:hover,
#contact textarea:hover {
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 1px solid #aaa;
}

#contact textarea {
  height: 100px;
  max-width: 100%;
  resize: none;
}

#contact button[type="submit"] {
  cursor: pointer;
  width: 100%;
  border: none;
  background: #4272d7;
  color: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;
}

#contact button[type="submit"]:hover {
  background: #39639e;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

.copyright {
  text-align: center;
}

#contact input:focus,
#contact select:focus,
#contact textarea:focus {
  outline: 0;
  border: 1px solid #aaa;
}

::-webkit-input-placeholder {
  color: #888;
}

:-moz-placeholder {
  color: #888;
}

::-moz-placeholder {
  color: #888;
}

:-ms-input-placeholder {
  color: #888;
}
    
</style>
</head>
<body>

    <div class="container">

    <form id="contact" action="" method="post"><center>
      <h3> Busque aqui seu Carro! <i class="fa fa-car" aria-hidden="true"></i></h3>
      <h4>Anunciou, vendeu. Quando você perceber, já foi! </h4></center>
      <fieldset>
        <select id="selectMarca" name="selectMarca" onchange="fetch_marca(this.value)">
        <option value="">Marca</option>
        <?php comboMarca(); ?>
        </select>
        <select id="selectModelo" name="selectModelo" >
        <option value="">Modelo</option>
								<?php comboVeiculo(); ?>
          </select>
      </fieldset>
      <fieldset>
        <select id="selectModelo" name="selectModelo" style="width:25%">
        <option value="">Ano Mínimo</option>
								<?php comboAno("De"); ?>
        </select>
        <select id="selectAno" name="selectAno" style="width:25%" >
        <option value="">Ano Máximo</option>
								<?php comboAno("Até"); ?>
          </select>
          <select id="selectAno" name="selectAno" style="width:25%">
          <option value="">Preço Mínimo</option>
								<?php comboValor("De"); ?>
            </select>
            <select id="selectAno" name="selectAno" style="width:25%">
            <option value="">Preço Máximo</option>
								<?php comboValor("Até"); ?>
              </select>
      </fieldset>
    </fieldset>
    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Enviar</button>
  </fieldset>
      <p class="copyright">By <a href="https://github.com/mojunior" target="_blank" title="Colorlib">Mojunior</a></p>
    </form>
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