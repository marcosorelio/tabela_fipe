<?php include 'conectadb.php'; ?>

<html>
<meta charset="UTF-8">

<body>

    <?php
function criarCombo($table,$id)
{
   $sql = "SELECT * FROM ".$table."";
   $rs_sql = mysql_query($sql);
   while($linha=mysql_fetch_array($rs_sql))
   {
     $chave = $linha[$id];
     //$nome  = $linha[$valor];
     $combo = $combo . "<option value=\"$id\">$nome</option>";
   }
   echo $combo;
}
?>
    <form name="form1" method="post" action="">
        <select name="select2">
            <?php criarCombo("carros_veiculo",2); ?>
        </select>
    </form>

    <form action="/action_page.php">
        <select name="Marca">
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="fiat">Fiat</option>
            <option value="audi">Audi</option>
        </select>
        <select name="Modelo">
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="fiat">Fiat</option>
            <option value="audi">Audi</option>
        </select>
        <select name="Ano">
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="fiat">Fiat</option>
            <option value="audi">Audi</option>
        </select>
        <br><br>



        <input type="submit">
    </form>

    <?php

$url1 = 'http://fipeapi.appspot.com/api/1/carros/marcas.json';

$ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, $url1);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 //curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-API-Key: ' . $apiKey));

$json = json_decode(curl_exec($ch), true); 
  
echo "<table border='2' >
		<tr>
			<th>id</th>
			<th>Name</th>
			<th>fipe_name</th>
			<th>order</th>
			<th>key</th>
		</tr>";
foreach($json as $i => $item) {
   
	echo "<tr><td>" . $json[$i]['id']
	. "</td><td>" . $json[$i]['name'] 
	. "</td><td>" . $json[$i]['fipe_name']
	. "</td><td>" . $json[$i]['order'] 
	. "</td><td>" . $json[$i]['key']
	. "</td></tr>";
	// echo $json[$i]['fipe_name'] . "<br>";
    // $array[$i] is same as $item
}

?>

    </table>
</body>

</html>