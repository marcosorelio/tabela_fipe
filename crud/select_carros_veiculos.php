<?php
function comboMarcas()
{
    include 'conectadb.php';
    $result = mysqli_query($conn,"SELECT fipe_referencia, fipe_codigo FROM carros_veiculo");
    
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

        $fipe_referencia = $row["fipe_referencia"];
        $fipe_codigo = $row["fipe_codigo"];

        $combo = $combo . "<option value=\"$fipe_referencia\">$fipe_codigo</option>";
    }
    echo $combo;
    
}

function comboModelo()
{
    include 'conectadb.php';
    $result = mysqli_query($conn,"SELECT name, fipe_name FROM carros_marcas");
    
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

        $name = $row["name"];
        $fipe_name = $row["fipe_name"];

        $combo = $combo . "<option value=\"$name\">$fipe_name</option>";
    }
    echo $combo;
    
}
function comboAno()
{
    include 'conectadb.php';
    $result = mysqli_query($conn,"SELECT name, fipe_name FROM carros_marcas");
    
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

        $name = $row["name"];
        $fipe_name = $row["fipe_name"];

        $combo = $combo . "<option value=\"$name\">$fipe_name</option>";
    }
    echo $combo;
    
}

?>

<form>
<table>
    <tr>
        <td>Carro</td>
        <td>Moto</td>
        <td>Caminhao</td>
    </tr>
    <tr>
        <td><input type="radio" name="carro" value="carro"></td>
        <td><input type="radio" name="moto" value="moto"></td>
        <td><input type="radio" name="caminhao" value="caminhao"></td>
    </tr>
    <tr>
        <td>Marca</td>
        <td>Modelo</td>
        <td>Ano</td>
    </tr>
    <tr>
        <td><select name="select1"><?php comboMarcas(); ?></select></td>
        <td><select name="select2"><?php comboModelo(); ?></select></td>
        <td><select name="select3"><?php comboAno(); ?></select></td>
    </tr>
    <tr><td style="padding-top: 10px;" colspan="3"><input type="submit" value="Pesquisar" /><td></tr>
</table>
</form>