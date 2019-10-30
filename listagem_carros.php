<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="author" content="mojunior">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="fetch.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body class="bg">
<div class="barra">
    <ul class="tabs">
        <div style ="margin-left: -26px; float: left;"><img src="http://motortotal.com.br/wp-content/uploads/2019/03/cropped-logo-png-1.png" width="130px" height="35px"></div>
        <div style="text-align: right;">
            <li><a href='#tab1'>Comprar</a></li>
            <li><a href='#tab2'>Vender</a></li>
            <li><a href='#tab3'>Serviços</a></li>
            <li><a href='#tab4'>Entrar   </a></li><div>
    </ul>
</div>
    <div style="margin-top: 70px;">
        <div>
            <h2>Anúncie aqui. É fácil vender seu carro!</h2>
            <h2>Anúncio publicado fácil e rápido</h3>
        </div>

        <div style="float:right">
            <form action="/action_page.php">
                <table class="tb-main" style="background-color: #ffffff; filter: alpha(opacity=40); opacity: 0.95;border:2px blue solid;">
                    <tr>
                        <td>Email</td>
                        <td>
                            <select id="selectMarca" name="selectMarca" class="st-main" 
                            onchange="fetch_marca(this.value)">
                                <option value="">Selecione</option>
                              <?php //comboMarca(); ?> 
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>FIAT MOBI 1.0 Evo Like</td>
                        <td>
                            <select id="selectModelo" name="selectModelo" class="st-main" 
                            onchange="fetch_modelo(this.value)">
                                <option value="">Selecione</option>
                            </select>
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Continuar" />
                        </td>
                    </tr>
                </table><br>
                <table class="tb-main" style="background-color: #ffffff; filter: alpha(opacity=40); opacity: 0.95;border:2px blue solid;">
                    <tr>
                        <td>Email</td>
                        <td>
                            <select id="selectMarca" name="selectMarca" class="st-main" 
                            onchange="fetch_marca(this.value)">
                                <option value="">Selecione</option>
                              <?php //comboMarca(); ?> 
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>FIAT MOBI 1.0 Evo Like</td>
                        <td>
                            <select id="selectModelo" name="selectModelo" class="st-main" 
                            onchange="fetch_modelo(this.value)">
                                <option value="">Selecione</option>
                            </select>
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Continuar" />
                        </td>
                    </tr>
                </table>
                <br>
                <table class="tb-main" style="background-color: #ffffff; filter: alpha(opacity=40); opacity: 0.95;border:2px blue solid;">
                    <tr>
                        <td>Email</td>
                        <td>
                            <select id="selectMarca" name="selectMarca" class="st-main" 
                            onchange="fetch_marca(this.value)">
                                <option value="">Selecione</option>
                              <?php //comboMarca(); ?> 
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>FIAT MOBI 1.0 Evo Like</td>
                        <td>
                            <select id="selectModelo" name="selectModelo" class="st-main" 
                            onchange="fetch_modelo(this.value)">
                                <option value="">Selecione</option>
                            </select>
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Continuar" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>

<?php
/*
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
*/
?>