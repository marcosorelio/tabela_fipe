<html>
<meta charset="UTF-8">

<body>
    <h2>Cadastro de Veículos</h2>
    <form action="" method="post">
        <table>
            <tr>
                <td>fipe_referencia:</td>
                <td><input type="text" name="fipe_referencia" /></td>
            </tr>
            <tr>
                <td>fipe_codigo:</td>
                <td><input type="text" name="fipe_codigo" /></td>
            </tr>
            <tr>
                <td>fipe_name:</td>
                <td><input type="text" name="fipe_name" /></td>
            </tr>
            <tr>
                <td>fipe_combustivel:</td>
                <td><input type="text" name="fipe_combustivel" /></td>
            </tr>
            <tr>
                <td>fipe_marca:</td>
                <td><input type="text" name="fipe_marca" /></td>
            </tr>
            <tr>
                <td>fipe_ano_modelo:</td>
                <td><input type="text" name="fipe_ano_modelo" /></td>
            </tr>
            <tr>
                <td>fipe_preco:</td>
                <td><input type="text" name="fipe_preco" /></td>
            </tr>
            <tr>
                <td>fipe_key:</td>
                <td><input type="text" name="fipe_key" /></td>
            </tr>
            <tr>
                <td>fipe_time:</td>
                <td><input type="text" name="fipe_time" /></td>
            </tr>
            <tr>
                <td>fipe_veiculo:</td>
                <td><input type="text" name="fipe_veiculo" /></td>
            </tr>
            <tr>
                <td>fipe_id:</td>
                <td><input type="text" name="fipe_id" /></td>
            </tr>
            <tr style="text-align:right">
                <td colspan='2'><input type="submit" value="Enviar" /></td>
            </tr>
        </table>
    </form>

</html>

<?php

if (isset($_POST['fipe_name'])) {

include 'conectadb.php';

$fipe_referencia = $_POST['fipe_referencia'];
$fipe_codigo = $_POST['fipe_codigo'];
$fipe_name = $_POST['fipe_name'];
$fipe_combustivel = $_POST['fipe_combustivel'];
$fipe_marca = $_POST['fipe_marca'];
$fipe_ano_modelo = $_POST['fipe_ano_modelo'];
$fipe_preco = $_POST['fipe_preco'];
$fipe_key = $_POST['fipe_key'];
$fipe_time = $_POST['fipe_time'];
$fipe_veiculo = $_POST['fipe_veiculo'];
$fipe_id = $_POST['fipe_id'];


$sql = "INSERT INTO fipe.carros_veiculo 
values(null,'$fipe_referencia',
            '$fipe_codigo', 
            '$fipe_name',
            '$fipe_combustivel',
            '$fipe_marca',
            '$fipe_ano_modelo',
            '$fipe_preco',
            '$fipe_key',
            '$fipe_time',
            '$fipe_veiculo',
            '$fipe_id')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>