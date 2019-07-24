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
	padding:10px;
}

.tb-main{
	font-family: 'Open Sans', Arial, sans-serif;
    
	width 800px;
	border-spacing: 10px 0px;
}

input[type=text], select {
  width: 300px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 30%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 30;
  float:right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

input[type="checkbox"] {
  cursor: pointer;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  outline: 0;
  background: lightgray;
  height: 16px;
  width: 16px;
  border: 1px solid white;
  margin: -2px 0px;
  margin-right: 10px;

padding: 0px;
}




input[type="checkbox"]:checked {
  background: #45a049;
}

input[type="checkbox"]:hover {
  filter: brightness(90%);
}

input[type="checkbox"]:disabled {
  background: #e6e6e6;
  opacity: 0.6;
  pointer-events: none;
}

input[type="checkbox"]:after {
  content: '';
  position: relative;
  left: 40%;
  top: 20%;
  width: 15%;
  height: 40%;
  border: solid #fff;
  border-width: 0 2px 2px 0;
  transform: rotate(45deg);
  display: none;
}

input[type="checkbox"]:checked:after {
  display: block;
}

input[type="checkbox"]:disabled:after {
  border-color: #7b7b7b;
}


</style>
</head>
<body class="bg">
<div>
	<div>
	
	<h1>Busque aqui</h1>
	</div>
	
	<div>
	<form action="/action_page.php">
		<table class="tb-main" >
		<tr><td>
		 <input type="checkbox" name="vehicle" value="Bike" checked >Moto
		
		<input type="checkbox" name="vehicle" value="Bike" checked >Carro
		<input type="checkbox" name="vehicle" value="Bike" checked >Caminhão</td></tr>
		<tr>
		<td colspan="2"><select name="selectMarca" class="st-main" style="width: 100% !important;"><option value="">Selecione</option></select></td>
		<td colspan="2"><select name="selectMarca" class="st-main" style="width: 100% !important;"><option value="">Selecione</option></select></td>
		</tr>
		<tr>
		<td><select name="selectMarca" class="st-main"><option value="">Selecione</option></select></td>
		<td><select name="selectMarca" class="st-main"><option value="">Selecione</option></select></td>
		<td><select name="selectMarca" class="st-main"><option value="">Selecione</option></select></td>
		<td><select name="selectMarca" class="st-main"><option value="">Selecione</option></select></td>
		</tr>
		
		<tr>
		<td colspan="4"><input type="submit" value="Anunciar" /></td>
		</tr>
		</table>	
		</form>
	</div>
</div>
</body>

</html>