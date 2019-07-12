<html>

<meta charset="UTF-8">
<body>
<?php

$url1 = 'http://fipeapi.appspot.com/api/1/carros/marcas.json';

$ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, $url1);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 //curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-API-Key: ' . $apiKey));

$json = json_decode(curl_exec($ch), true); 
echo "<h2>veiculos</h2>"  
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
