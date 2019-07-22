<html>
<head>
<script type="text/javascript" src="jquery-3.4.1.min.js"></script>

<style>
.button {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>

<body>

<?php
function comboMarcas()
{
    include 'conectadb.php';

  $select=mysqli_query($conn,"SELECT name, fipe_id FROM fipe.carros_marcas");
  while($row=mysqli_fetch_array($select, MYSQLI_ASSOC))
  {
    $name = $row["name"];
    $fipe_id = $row["fipe_id"];
   echo "<option value=\"$fipe_id\">$name</option>";
  }

}
?>

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

<script type="text/javascript">
function fetch_modelo(val)
{
 $.ajax({
 type: 'post',
 url: 'fetch_data.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("selectModelo").innerHTML=response; 
  document.getElementById("selectAno").innerHTML="";
 }
 });
}

</script>

<script type="text/javascript">
function fetch_ano(val)
{
 $.ajax({
 type: 'post',
 url: 'fetch_data.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("selectAno").innerHTML=response; 
 }
 });
}
</script>

</html>