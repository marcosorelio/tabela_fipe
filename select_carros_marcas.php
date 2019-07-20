<?php
function criarCombo()
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

<form name="form1">
    <select name="select2">
        <?php criarCombo(); ?>
    </select>
</form>