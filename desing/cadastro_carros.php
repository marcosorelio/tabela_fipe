<html>
<head>
<meta charset="UTF-8">
  <meta name="description" content="">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="author" content="mojunior">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

.bg{
	margin:0px;
	padding:0px;
}



h1, h2{
	margin:1px;
	padding:1px;
}

.tb-main{
	font-family: 'Open Sans', Arial, sans-serif;
    font-weight: 700;
	width 800px;
}

input[type=text], select {
  width: 500px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 30;
}

input[type=submit]:hover {
  background-color: #45a049;
}

</style>
</head>
<body class="bg">
<div>
	<div>
	<h2>Anúncie aqui. É fácil vender seu carro!</h2>
	<h3>Anúncio publicado fácil e rápido</h3>
	</div>
	
	<div>
	<form action="/action_page.php">
		<table class="tb-main">
		<tr>
		<td>Marca<td>
		<td><select name="selectMarca" class="st-main">
        <option value="">Selecione</option></select><td>
		</tr>
		<tr>
		<td>Modelo<td>
		<td><select name="selectMarca" class="st-main">
        <option value="">Selecione</option></select><td>
		</tr>
		<tr>
		<td>Ano Modelo<td>
		<td><select name="selectMarca" class="st-main">
        <option value="">Selecione</option></select><td>
		</tr>
		<tr>
		<td>Versão<td>
		<td><select name="selectMarca" class="st-main">
        <option value="">Selecione</option></select><td>
		</tr>
		<tr>
		<td>Contato<td>
		<td><input type="text" class="txt-main" required /><td>
		</tr>
		<tr>
		<td colspan="3"><input type="submit" value="Anunciar" /><td>
		</tr>
		</table>	
		</form>
	</div>
</div>
</body>

</html>