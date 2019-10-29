function fetch_marca(val)
{
 $.ajax({
 type: 'post',
 url: 'dao_marca.php',
 data: {
  p_marca:val
 },
 success: function (response) {   
  document.getElementById("selectModelo").innerHTML=response;
  
  //document.getElementById("selectModelo").toggleClass('open'); in the future
  }
 });
}

function fetch_modelo(modelo)
{
   var marca = document.getElementById("selectMarca").value;  

 $.ajax({
 type: 'post',
 url: 'dao_modelo.php',
 data: {
  p_marca:marca, p_modelo:modelo
 },
 success: function (response) {   

    alert(response);
  document.getElementById("selectAno").innerHTML=response; 
  
  }
 });
}

function fetch_ano(modelo)
{
   var v_marca = document.getElementById("selectMarca").value;
   var v_modelo = document.getElementById("selectModelo").value;
   var v_ano = document.getElementById("selectAno").value;  

    var v_result = "http://fipeapi.appspot.com/api/1/carros/veiculo/" + v_marca + "/" + v_modelo + "/" + v_ano + ".json";

    alert(v_result);
  document.getElementById("url").value=v_result; 
  
}