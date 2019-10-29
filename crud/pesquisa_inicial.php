<?php  include './php/dao.php';?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="author" content="mojunior">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="../js/fetch.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>

<form id="marcas" name="marcas" method="POST" action="">
<table>
    <tr>
        <td>Carro</td>
        <td>Moto</td>
        <td>Caminhao</td>
    </tr>
    <tr>
        <td><input type="radio" name="carro" value="carro" checked></td>
        <td><input type="radio" name="moto" value="moto" disabled></td>
        <td><input type="radio" name="caminhao" value="caminhao" disabled></td>
    </tr>
    <tr>
        <td>Marca</td>
        <td>Modelo</td>
        <td>Ano</td>
    </tr>
    <tr>
        <td><select name="selectMarca" onchange="fetch_modelo(this.value)" style="width:200px;">
        <option value="">Selecione</option>
            <?php comboMarcas(); ?>
        </select>   
        </td>

        <td><select id="selectModelo" onchange="fetch_ano(this.value)" style="width:200px;">       
        </select>
    </td>
        <td><select id="selectAno" class="custom-select" style="width:200px;">
        </select></td>
    </tr>
    <tr><td style="padding-top: 10px;" colspan="3"><input type="submit" class="button" value="Pesquisar" /><td></tr>
</table>
</form>
</body>
</html>