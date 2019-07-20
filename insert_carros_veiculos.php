<html>
<meta charset="UTF-8">

<body>
    <h2>Cadastro de Veículos</h2>
    <form action="" method="post">
        <table>
            <tr>
                <td>fipe_referencia:</td>
                <td><input type="text" name="name" /></td>
            </tr>
            <tr>
                <td>fipe_codigo:</td>
                <td><input type="text" name="fipe_name" /></td>
            </tr>
            <tr>
                <td>fipe_name:</td>
                <td><input type="text" name="fipe_order" /></td>
            </tr>
            <tr>
                <td>fipe_combustivel:</td>
                <td><input type="text" name="fipe_key" /></td>
            </tr>
            <tr>
                <td>fipe_marca:</td>
                <td><input type="text" name="fipe_id" /></td>
            </tr>
            <tr style="text-align:right">
                <td colspan='2'><input type="submit" value="Enviar" /></td>
            </tr>
        </table>
    </form>

</html>

<?php

if (isset($_POST['name'])) {

include 'conectadb.php';

$name = $_POST['name'];
$fipe_name = $_POST['fipe_name'];
$fipe_order =$_POST['fipe_order'];
$fipe_key = $_POST['fipe_key'];
$fipe_id = $_POST['fipe_id'];

$sql = "INSERT INTO fipe.carros_marcas 
values('$name','$fipe_name',$fipe_order,'$fipe_key',$fipe_id)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>