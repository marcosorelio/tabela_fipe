<html>

<meta charset="UTF-8">
<body>
<?php

$url1 = 'http://fipeapi.appspot.com/api/1/carros/veiculo/21/4828/2013-1.json';

$ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, $url1);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 //curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-API-Key: ' . $apiKey));

$json = json_decode(curl_exec($ch), true); 
  
  //var_dump($json);
echo "<h2>Preço Corrente</h2>";
echo "<table border='2' >
		<tr>
			<th>id</th>
			<th>referencia</th>
			<th>fipe_codigo</th>
			<th>name</th>
			<th>combustivel</th>
			<th>marca</th>
			<th>ano_modelo</th>
			<th>preco</th>
			<th>key</th>
			<th>time</th>
			<th>veiculo</th>
		</tr>";
foreach($json as $i => $item) {
   
	echo "<tr><td>" . $json['id']
	. "</td><td>" . $json['referencia'] 
	. "</td><td>" . $json['fipe_codigo']
	. "</td><td>" . $json['name'] 
	. "</td><td>" . $json['combustivel']
	. "</td><td>" . $json['marca']
	. "</td><td>" . $json['ano_modelo']
	. "</td><td>" . $json['preco']
	. "</td><td>" . $json['key']
	. "</td><td>" . $json['time']
	. "</td><td>" . $json['veiculo']
	. "</td></tr>";
	// echo $json[$i]['fipe_name'] . "<br>";
    // $array[$i] is same as $item
}

?>

</table>
</body>
</html>
